@extends('back-end.layouts.author-master')
@section('author-content')

<div class="row"> 
	<form class="col s12" method="POST" action="{{ route('author.store') }}">
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12 l8">
        <i class="material-icons prefix">account_circle</i>
          <input placeholder="Nhập tên tác giả" id="icon_prefix" name="txtNameAuthor" type="text" class="validate" value="">
          <label for="icon_prefix">Tên tác giả</label>
          @if ($errors->has('txtNameAuthor'))
              <span class="red-text">
                  <strong>{{ $errors->first('txtNameAuthor') }}</strong><br>
              </span>
          @endif
        </div>
        <div class="input-field col s12 l8">
	          <i class="material-icons prefix">mode_edit</i>
	          <textarea  placeholder="tdsa" id="icon_prefix2" class="materialize-textarea" name="txtAuthorInfo"></textarea>
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
            <input class="file-path validate" name="txtAuthorImage" id="valueAvatar" value="" type="text">
          </div>
          @if ($errors->has('txtAuthorImage'))
              <span class="red-text">
                  <strong>{{ $errors->first('txtAuthorImage') }}</strong><br>
              </span>
            @endif
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
           <button class="btn waves-effect waves-light" type="submit"  value="edit" name="btn_edit">Thêm tác giả
              <i class="material-icons right">send</i>
            </button>
        </div>
      </div>
    </form>
  </div>


<form action="{{ route('uploadAvatarBook') }}" method="POST" id="uploadAvatarBook" style="display: none" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" id="inputUploadAvatar" hidden name="file" ><br />
    <input type="submit" id='btnSubmitAvatar' hidden>
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
            $("#author_avatar").attr('src','{{URL::to('/')}}'+url);
      }
  }

</script>
@stop