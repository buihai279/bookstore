@section('title')
{{$book->book_name}}   
@stop
@extends('front-end.layouts.master')
@section('content')
<script type="text/javascript" src="{{ asset('lib/zoom/jquery.zoom.min.js') }}"></script>
<div class="row">
    @include('front-end.layouts.detail-book')
</div>

    <!-- Load Facebook SDK for JavaScript -->
    <div class="fb-save" data-uri="{{url()->current()}}" data-size="large"></div>
    <div id="fb-root"></div>


<!-- Modal Trigger -->

  <!-- Modal Structure -->
  <div id="modal1" class="modal  bottom-sheet" style="max-height: 75%">
        <div class="modal-content">
          <h4>Đọc thử vài trang sách</h4>
            @if (is_array(json_decode($book->images)))
                @foreach (json_decode($book->images) as $element)
                  <img src="{{ url($element) }}" alt="">
                @endforeach
            @else
                <p class="red-text">Không có hình ảnh đọc thử</p>
          @endif
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Đóng</a>
        </div>
  </div>

<a class="modal-trigger waves-effect waves-light btn" href="#modal1">Đọc thử</a>
<div class="row">
    <div class="item-other">
        <div class="item-benefit">
            <p>
                Xem thêm Sách của <a href="{{ route('viewAuthor',$book->authorId) }}" class="category_brand_list">{{$book->author_name}}</a>
            </p>
        </div>
    </div>
</div>
<div class="row">
    @include('front-end.layouts.info-book')
</div>

<div class="fixed-action-btn">
    <a class="btn-floating btn-large red" href="{{ route('book.edit',$book->bookId) }}">
      <i class="large material-icons">mode_edit</i>
    </a>
</div>
@stop