@extends('front-end.users.master')
@section('user-content')
<h5>Lưu lại mua sau</h5>
   
  @foreach ($books as $book)
    <div class="save-for-later-item col s12" style="margin-bottom: 2px;padding: 15px;border: 1px solid #f3f3f3">
        <div class="col l2 s12"><img src="{{url($book->book_image)}}" width='270' class="responsive-img"></div>
        <div class="col l7 s12">
          <p><a href="{{ route('viewBook',$book->bookId) }}">{{$book->book_name}}</a></p>
          <p>Tác giả:<a href="{{route('viewAuthor',$book->authorId)}}">{{$book->author_name}}</a></p>
          <p>Cung cấp bởi : <a href="{{route('viewCompany',$book->companyId)}}">{{$book->company_name}}</a></p>
          <p><div  class="rateYo{{$book->bookId}}"></div></p>
          <p>Có {{$book->totalComment}} bình luận</p>
        </div>
        <div class="col l3 s12">
          <p>

              <span id="span-saving-price" class="number-format">
                {{$book->price}}
              </span> ₫
          </p>
          <p>
            <span class="number-format" style="text-decoration: line-through;">{{$book->cover_price}}</span>  ₫
            <span class="red-text">{{round((1-$book->cover_price/$book->price)*100)}}%</span>
          </p>
          <a class="btn add-to-cart" data-url='{{$book->bookId}}'><i class="material-icons">shopping_cart</i></a>
          <a class="btn-delete-save" data-url='{{ route('save.destroy',$book->bookId) }} data-id='{{$book->bookId}}' href="#!"><i class="material-icons">delete</i></a>
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
  {{-- end .row --}}
    <form action="#" id='fmtDeleteSave' method="POST" style="display: none;">
    {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
@stop 