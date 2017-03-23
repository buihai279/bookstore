@extends('front-end.users.master')
@section('user-content')
  
  {{-- end .row --}}
  @foreach ($books as $book)
    <form action="{{ route('cart.destroy',$book->bookId) }}" data-form-id='{{$book->bookId}}' method="POST" style="display: none;">
    {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
  @endforeach
@stop