@extends('back-end.layouts.master')
@section('content')
<div class="row"> 
  <form class="col s12 l8" method="POST"  enctype="multipart/form-data" action="{{ route('book.store') }}">
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
         <div class="input-field input-field">
          <div class="btn" id="btnUploadAvatar">
            <span>Ảnh</span>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate " hidden id="valueAvatar" name="txtAvatarBook" type="text">
          </div>
          <div id="messageAvatar"></div>
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
      <a class="btn waves-effect waves-light" id="btnUploadImages">Upload
          <i class="material-icons right">send</i>
        </a>
      <div id="message"></div>
      <div class=" col s12">
         <div id="images-book">
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
</script>
<form action="{{ route('uploadAvatarBook') }}" method="POST" id="uploadAvatarBook" style="display: none"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" id="inputUploadAvatar" hidden name="file" ><br />
    <input type="submit" id='btnSubmitAvatar' hidden>
</form>

<form action="{{ route('uploadImagesBook') }}" method="POST" id="uploadImagesBook" style="display: none"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" id="inputUploadImages" hidden name="file[]" multiple><br />
    <input type="submit" id='btnSubmitImages' hidden>
</form>
<script>
  var formImages = document.getElementById('uploadImagesBook');
  var requestImages = new XMLHttpRequest();

  formImages.addEventListener('submit', function(e){
      e.preventDefault();
      var formdata = new FormData(formImages);
      requestImages.open('post', '{{route('uploadImagesBook') }}');
      requestImages.addEventListener("load", transferCompleteImages);
      requestImages.send(formdata);
  });
  function transferCompleteImages(data){
      response = JSON.parse(data.currentTarget.response);
      if(response.success){
          $('message').text("Successfully Uploaded Files!");
          for (var i = response.files.length - 1; i >= 0; i--) {
            var x = Math.floor((Math.random() * 999888999) + 1);
            var url=response.files[i];
            var node="<div class='item-image' id='item-image-"+x+"'><img src='"+'{{URL::to('/')}}'+url+"' height='150px'><input type='text' hidden='hidden' value='"+url+"' name='txtImages[]'><a class='waves-effect waves-light btn red' onclick='deleteImg("+x+")'><i class='material-icons'>delete</i></a></div>";
            $("#images-book").append(node);
          }
      }
  }


  var formAvatar = document.getElementById('uploadAvatarBook');
  var requestAvatar = new XMLHttpRequest();

  formAvatar.addEventListener('submit', function(e){
      e.preventDefault();
      var formdata = new FormData(formAvatar);
      requestAvatar.open('post', '{{route('uploadAvatarBook') }}');
      requestAvatar.addEventListener("load", transferCompleteAvatar);
      requestAvatar.send(formdata);
  });
  function transferCompleteAvatar(data){
      response = JSON.parse(data.currentTarget.response);
      if(response.success){
            $('#messageAvatar').text('Successfully Uploaded Files!');
            var url=response.file;
            // var node="<img src='"+url+"' height='150px'>";
            $("#valueAvatar").val(url);
            $("#book_image").attr('src','{{URL::to('/')}}'+url);
      }
  }
</script>
@stop
