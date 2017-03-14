@extends('back-end.layouts.news-master')
@section('news-content')
<div class="row"> 
  <form class="col s12 l8" method="POST" action="{{ route('book.store') }}">
    {{ csrf_field() }}
    <div class="row"> 
        <div class="input-field col s12">
          <input id="book_name" value="" type="text" name="txtBook_name" >
          <label for="book_name">Tên sách</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <input id="author" type="text" value=""  name="txtAuthor">
          <label for="author">Tác giả</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <textarea name="txtDescription" class="materialize-textarea"  name="txtDescription" id="description"></textarea>
          <label for="description">Mô tả</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <input id="book_image" type="text" value="" name="fBook_image">
          <label for="book_image">Ảnh</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <input id="category" type="text" value="" name="txtCategory">
          <label for="category">Danh mục</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <input id="company" type="text" value=""  name="txtCompany">
          <label for="company">Công ty phát hành</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <input id="publish_date" type="text" value="" name="txtPublish_date">
          <label for="publish_date">Ngày xuất bản</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s6">
          <input id="publish_house" type="text" value="" name="txtPublish_house">
          <label for="publish_house">Nhà xuất bản</label>
        </div>
        <div class="input-field col s6">
          <input id="quality" type="text" value="" name="txtQuality">
          <label for="quality">Số lượng</label>
      </div>
    </div>
    <div class="row"> 
        <div class="input-field col s6">
          <input id="page" type="text" value="" name="txtPage">
          <label for="page">Số trang</label>
        </div>
        <div class="input-field col s6">
          <input id="translator" type="text" value="" name="txtTranslator">
          <label for="translator">Người dịch</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s6">
          <input id="cover_price" type="text" value="" name="txtCover_price">
          <label for="cover_price">Giá bìa</label>
        </div>
        <div class="input-field col s6">
          <input id="price" type="text" value="" name="txtPrice">
          <label for="price">Giá bán</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <input id="images" type="text" value="" name="txtImages" >
          <label for="images">Một số hình ảnh đọc thử</label>
        </div>
    </div>
    <div class="row">
      <div class="input-field col s3">
         <button class="btn waves-effect waves-light" type="submit"  value="edit" name="btn_edit">Sửa
            <i class="material-icons right">send</i>
          </button>
      </div>
    </div>
  </form>
</div>
@stop