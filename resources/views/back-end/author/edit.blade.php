@extends('back-end.layouts.author-master')
@section('author-content')

<div class="row"> 
	<form class="col s12 m6" method="POST" action="{{ route('author.update',$author->id) }}">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
          <input placeholder="Nhập tên tác giả" id="icon_prefix" name="txtNameAuthor" type="text" class="validate" required autofocus value="{{$author->author_name}}">
          <label for="icon_prefix">Tên tác giả</label>
          @if ($errors->has('txtNameAuthor'))
              <span class="red-text">
                  <strong>{{ $errors->first('txtNameAuthor') }}</strong><br>
              </span>
          @endif
        </div>
        <div class="input-field col s12">
	          <i class="material-icons prefix">mode_edit</i>
	          <textarea id="icon_prefix2" class="materialize-textarea" placeholder="tdsa" name="txtAuthorInfo">{{$author->author_info}}</textarea>
	          <label for="icon_prefix2">Thông tin tác giả</label>
            @if ($errors->has('txtAuthorInfo'))
                <span class="red-text">
                    <strong>{{ $errors->first('txtAuthorInfo') }}</strong><br>
                </span>
            @endif
        </div>
          
      </div>
      <div class="row">
        <div class="col s12">
          <img src="" id="author_avatar" style="max-width: 200px" alt="">
        </div>
	      <div class="file-field input-field s12">
		      <div class="btn" id="btnUploadAvatarAuthor">
		        <span>Chọn Ảnh</span>
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" name="txtAuthorImage" id="valueAvatar" value="{{$author->author_img}}" type="text">
		      </div>
	    	</div>
        @if ($errors->has('txtAuthorImage'))
          <span class="red-text">
              <strong>{{ $errors->first('txtAuthorImage') }}</strong><br>
          </span>
        @endif
    	</div>
     <div class="row">
        <div class="input-field col s12">
          <input disabled value="1" id="disabled" type="text" class="validate">
          <label for="disabled">Tổng số sách</label>
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
  <div class="col s12 m6">
    @if (count($books)>0)
      <h4 class="red-text">Tác giả có {{count($books)}} đầu sách</h4>
      <ul>
        @foreach ($books as $element)
          <li>
            {{$element->book_name}}
          </li>
        @endforeach      
      </ul>
    @endif
  </div>
  </div>
<form class="col s12 fmtDelete" method="POST" action="{{ route('author.destroy',$author->id) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
</form>
  <div class="row">
    <div class="input-field col s3">
       <button class="btn waves-effect waves-light red" data-target="modalConfirmDelete" type="submit"  value="delete" name="btn_delete">Xóa Tác giả
          <i class="material-icons right">send</i>
        </button>
    </div>
  </div>
  <!-- Modal Structure -->
  <div id="modalConfirmDelete" class="modal sm-modal">
    <div class="modal-content">
      <h4 class="red-text ">Bạn có thực sự muốn xóa</h4>
      <p>Tác giả và các sách có liên quan sẽ bị xóa</p>
    </div>
    <div class="modal-footer">
      <a href="" class="modal-action modal-close waves-effect waves-light btn-flat ">Đóng</a>
      <a href="" class="btnDelete modal-action modal-close waves-effect waves-light btn-flat ">Xóa</a>
    </div>
<form action="{{ route('uploadAvatarAuthor') }}" method="POST" id="uploadAvatarAuthor" style="display: none" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" id="inputUploadAvatar" hidden name="file" ><br />
    <input type="submit" id='btnSubmitAvatar' hidden>
</form>

<script>
  var formAvatar = document.getElementById('uploadAvatarAuthor');
  var requestAvatar = new XMLHttpRequest();

  formAvatar.addEventListener('submit', function(e){
      e.preventDefault();
      var formdata = new FormData(formAvatar);
      requestAvatar.open('post', '{{route('uploadAvatarAuthor') }}');
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
            $("#author_avatar").attr('src','{{URL::to('/')}}'+url);
      }
  }

</script>
@stop
