
<script src="{{ url('lib/ckeditor/ckeditor.js') }}"></script>
<script src="{{ url('lib/ckfinder/ckfinder.js') }}"></script>
@extends('back-end.layouts.news-master')
@section('news-content')
 <div id="ckfinder1"></div>
 
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
           <select id="author" class="icons"  name="txtAuthor">
            <option value="null" disabled selected>Choose your option</option>
            @foreach ($listAuthor as $element)
            <option value="{{$element->id}}" data-icon="{{$element->author_image}}" class="left circle">{{$element->author_name}}</option>
            @endforeach
          </select>
          <label for="author">Tác giả</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <textarea name="txtDescription" placeholder="Placeholder"  name="txtDescription" id="create_description" rows="10" cols="80"></textarea>
          <label for="create_description">Mô tả</label>

        </div>
    </div>
    <div class="row"> 
      <div class="input-field col s12">
       <img class="materialboxed" width="300" id="book_image" src="">
       </div>
         <div class="file-field input-field">
          <div class="btn">
            <span>Ảnh</span>
            <input type="file" onclick="openPopup()" >
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate " id="url" name="fBook_image" type="text">
          </div>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <select  id="category" name="txtCategory" value="">
            <option value="" disabled selected>Choose your option</option>
            @php
              echo $cate;
            @endphp
          </select>
          <label for="category">Danh mục</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <select id="company" type="text" name="txtCompany" class="icons"  >
            <option value="" selected>Choose your option</option>
            @foreach ($listCompany as $element)
                <option value="{{$element->id}}" data-icon="{{$element->company_image}}" class="left circle">{{$element->company_name}}</option>
            @endforeach
          </select>
          <label for="company">Công ty phát hành</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <label for="publish_date">Ngày xuất bản</label>
          <input name="txtPublish_date" type="date" class="datepicker">
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s6">
          <input id="publish_house" class="autocomplete" type="text" value="" name="txtPublish_house">
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
      <div class="col s12">
        <label for="images">Một số hình ảnh đọc thử</label>
      </div>
      <div class="input-field col s3" style="clear: both;">
         <a class="btn waves-effect waves-light" onclick="openPopupImages()">Upload
            <i class="material-icons right">send</i>
          </a>
      </div>
      <div class=" col s12">
         <div class="images-book" >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s3">
         <button class="btn waves-effect waves-light" type="submit"  value="edit" name="btn_edit">Thêm sách
            <i class="material-icons right">send</i>
          </button>
      </div>
    </div>
  </form>
</div>
<script>
$(function() {
  $('input.autocomplete').autocomplete({
    data: {
      @php
        foreach ($house as $element) {
          if ($element->publishing_house!=''&&$element->publishing_house!='null')
            echo '"'.$element->publishing_house.'": null,';
          }
      @endphp
    },
    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
  });
});

var editor = CKEDITOR.replace( 'create_description',
{
    language:'vi',
    height: 300,
    filebrowserBrowseUrl: '../lib/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl: '../lib/ckfinder/ckfinder.html?type=Images',
    filebrowserUploadUrl: '../lib/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl: '../lib/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
} );
CKFinder.setupCKEditor( editor, {
    skin: 'jquery-mobile',
    swatch: 'b',
    onInit: function( finder ) {
        finder.on( 'files:choose', function( evt ) {
            var file = evt.data.files.first();
            console.log( file.get( 'name' ) );
        } );
    }
} );
</script>
@stop