@extends('back-end.layouts.book-master')
@section('book-content')
<div class="row"> 
  <form class="col s12 l8" method="POST" action="{{ route('book.update',$book->id) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="row"> 
        <div class="input-field col s12">
          <input disabled value="{{$book->id}}" id="disabled" type="text" class="validate">
          <label for="disabled">ID</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <input id="book_name" value="{{$book->book_name}}" type="text" name="txtBook_name" >
          <label for="book_name">Tên sách</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <input id="author" type="text" value="{{$book->author_id}}"  name="txtAuthor">
          <label for="author">Tác giả</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <textarea name="txtDescription" class="materialize-textarea"  name="txtDescription" id="description">{{$book->description}}</textarea>
          <label for="description">Mô tả</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <input id="book_image" type="text" value="{{$book->book_image}}" name="fBook_image">
          <label for="book_image">Ảnh</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <input id="category" type="text" value="{{$book->category_id}}" name="txtCategory">
          <label for="category">Danh mục</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <input id="company" type="text" value="{{$book->company_id}}"  name="txtCompany">
          <label for="company">Công ty phát hành</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <input id="publish_date" type="text" value="{{$book->publish_date}}" name="txtPublish_date">
          <label for="publish_date">Ngày xuất bản</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s6">
          <input id="publish_house" type="text" value="{{$book->publishing_house}}" name="txtPublish_house">
          <label for="publish_house">Nhà xuất bản</label>
        </div>
        <div class="input-field col s6">
          <input id="quality" type="text" value="{{$book->quality}}" name="txtQuality">
          <label for="quality">Số lượng</label>
      </div>
    </div>
    <div class="row"> 
        <div class="input-field col s6">
          <input id="page" type="text" value="{{$book->number_of_pages}}" name="txtPage">
          <label for="page">Số trang</label>
        </div>
        <div class="input-field col s6">
          <input id="translator" type="text" value="{{$book->translator}}" name="txtTranslator">
          <label for="translator">Người dịch</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s6">
          <input id="cover_price" type="text" value="{{$book->cover_price}}" name="txtCover_price">
          <label for="cover_price">Giá bìa</label>
        </div>
        <div class="input-field col s6">
          <input id="price" type="text" value="{{$book->price}}" name="txtPrice">
          <label for="price">Giá bán</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <input id="images" type="text" value="{{$book->images}}" name="txtImages" >
          <label for="images">Một số hình ảnh đọc thử</label>
        </div>
    </div>
    <div class="row">
      <div class="input-field col s3">
         <button class="btn waves-effect waves-light" type="submit"  value="edit" name="btn_edit">Sửa
            <i class="material-icons right">send</i>
          </button>
      </div>
      <div class="input-field col s3">
         <button class="btn waves-effect waves-light red" data-target="modalConfirmDelete" name="btn_delete" value="delete" >Xóa
            <i class="material-icons right">delete</i>
          </button>
      </div>
    </div>
  </form>
   
</div>
@stop
<form id="form-destroy" action="{{ route('book.destroy',$book->id) }}" method="POST" style="display: none;">
  {{ csrf_field() }}
  {{ method_field('DELETE') }}
</form>
<!-- Modal Structure -->
<div id="modalConfirmDelete" class="modal sm-modal">
  <div class="modal-content">
    <h4 class="red-text ">Bạn có thực sự muốn xóa</h4>
    <p>Các danh mục con và sản phẩm của danh mục này sẽ bị xóa</p>
  </div>
  <div class="modal-footer">
    <a href="" class="modal-action modal-close waves-effect waves-light btn-flat ">Đóng</a>
    <a href="" onclick="event.preventDefault();document.getElementById('form-destroy').submit()" class="btnDelete modal-action modal-close waves-effect waves-light btn-flat ">Xóa</a>
  </div>
</div>