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
           <select id="author" class="icons"  name="txtAuthor">
            <option value="null" disabled selected>Choose your option</option>
            @foreach ($listAuthor as $element)
              @if ($book->author_id!=$element->id)
                <option value="{{$element->id}}" data-icon="{{$element->author_image}}" class="left circle">{{$element->author_name}}</option>
              @else
                <option value="{{$element->id}}" selected="selected" data-icon="{{$element->author_image}}" class="left circle">{{$element->author_name}}</option>
              @endif
            @endforeach
          </select>
          <label for="author">Tác giả</label>
        </div>
    </div>

    <div class="row"> 
      <div class="input-field col s12">
       <img class="materialboxed" width="300" id="book_image" src="{{ asset($book->book_image) }}">
       </div>
         <div class="input-field input-field">
          <div class="btn" id="btnUploadAvatar">
            <span>Ảnh</span>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate " value="{{$book->book_image}}" hidden id="valueAvatar" name="txtAvatarBook" type="text">
          </div>
          <div id="messageAvatar"></div>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <textarea name="txtDescription" class="materialize-textarea"  name="txtDescription" id="edit_description">{{$book->description}}</textarea>
          <label for="edit_description">Mô tả</label>
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
              @if ($book->company_id!=$element->id)
                <option value="{{$element->id}}" data-icon="{{$element->company_image}}" class="left circle">{{$element->company_name}}</option>
              @else
                <option value="{{$element->id}}" selected="selected" data-icon="{{$element->company_image}}" class="left circle">{{$element->company_name}}</option>
              @endif
            @endforeach
          </select>
          <label for="company">Công ty phát hành</label>
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s12">
          <label for="publish_date">Ngày xuất bản</label>
          <input name="txtPublish_date" value="{{$book->publish_date}}" type="date" class="datepicker">
        </div>
    </div>
    <div class="row"> 
        <div class="input-field col s6">
          <input id="publish_house" class="autocomplete_house" type="text" value="{{$book->publishing_house}}" name="txtPublish_house">
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
      <div class="col s12">
        <label for="images">Một số hình ảnh đọc thử</label>
        <div class="message"></div>
      </div>
      <div class="input-field col s3" style="clear: both;">
         <a class="btn waves-effect waves-light" id="btnUploadImages">Upload
            <i class="material-icons right">send</i>
          </a>
      </div>
      <div class="col s12">
         <div id="images-book">
         @php
           $arrImg=json_decode($book->images);
         @endphp
         @if (is_array($arrImg)&&$arrImg!=null)
         @foreach($arrImg as $key => $value)
           <div class='item-image' id='item-image-{{$key}}'>
             <img src='{{ url($value) }}' height='150px'>
               <input type='text' hidden='hidden' value='{{ $value }}' name='txtImages[]'>
               <a class='waves-effect waves-light btn red' onclick='deleteImg({{$key}})'>
                <i class='material-icons'>delete</i>
                </a>
           </div>
         @endforeach 
         @endif
        </div>
      </div>
    </div>
    <div class="row" style="clear: both;">
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
<script>
$(function() {
  $('input.autocomplete_house').autocomplete({
    data: {
      @php
        foreach ($house as $element) {
          if ($element->publishing_house!=''&&$element->publishing_house!='null')
            echo '"'.$element->publishing_house.'": null,';
          }
      @endphp
    },
    // limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
  });
});
</script>
<script type='text/javascript'>
     $('.materialboxed').materialbox();
</script>

<form action="{{ route('uploadAvatarBook') }}" method="POST" id="uploadAvatarBook" style="display: none" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" id="inputUploadAvatar" hidden name="file" ><br />
    <input type="submit" id='btnSubmitAvatar' hidden>
</form>

<form action="{{ route('uploadImagesBook') }}" method="POST" id="uploadImagesBook" style="display: none" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" id="inputUploadImages" hidden name="file[]" multiple><br />
    <input type="submit" id='btnSubmitImages' hidden>
</form>

<script>
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
</script>
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