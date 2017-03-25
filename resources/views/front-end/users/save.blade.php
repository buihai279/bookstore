@extends('front-end.users.master')
@section('user-content')
<h5>Lưu lại mua sau</h5>
<form action="save_submit" method="POST" accept-charset="utf-8">
   
  @foreach ($books as $book)
    <div class="save-for-later-item col s12" style="margin-bottom: 2px;padding: 15px;border: 1px solid #f3f3f3">
        <div class="col l2 s12"><img src="{{url($book->book_image)}}" width='270' class="responsive-img"></div>
        <div class="col l7 s12">
          <p><a href="{{ route('viewBook',$book->bookId) }}">{{$book->book_name}}</a></p>
          <p>Tác giả:<a href="{{$book->authorId}}">{{$book->author_name}}</a></p>
          <p>Cung cấp bởi : <a href="{{$book->companyId}}">{{$book->company_name}}</a></p>
          <p><div  class="rateYo{{$book->bookId}}"></div></p>
          <p>Có {{$book->totalComment}} bình luận</p>
        </div>
        <div class="col l3 s12">
          <p class="number-format">{{$book->price}}</p>
          <p>
            <span class="number-format" style="text-decoration: line-through;">{{$book->cover_price}}</span> 
            <span class="red-text">-{{round((1-$book->cover_price/$book->price)*100)}}%</span>
          </p>
          <button class="btn"><i class="material-icons">shopping_cart</i></button>
          <a class="btn-delete-save" data-id='{{$book->bookId}}' href="#!"><i class="material-icons">delete</i></a>
        </div>
    </div> 
  <script>
  $(document).ready(function(){
    $(function () {
      $(".rateYo{{$book->bookId}}").rateYo({
        rating: {{(float)$book->avgComment}},
        readOnly: true
      });
    });
  });
  </script>
  @endforeach
</form>
  {{-- end .row --}}
  @foreach ($books as $book)
    <form action="{{ route('save.destroy',$book->bookId) }}" id='fmtDeleteSave' data-form-id='{{$book->bookId}}' method="POST" style="display: none;">
    {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
  @endforeach
@stop 