@extends('back-end.layouts.slide-master')
@section('slide-content')
<div class="row"> 
	<form class="col s12 l8" method="POST" action="{{ route('slide.store') }}">
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12 l12">
          <input placeholder="Nhập link slide" id="icon_prefix" name="txtLinkSlide" type="text" class="validate" value="#">
            <label for="icon_prefix2">Link slide</label>
            @if ($errors->has('txtLinkSlide'))
                <span class="red-text">
                    <strong>{{ $errors->first('txtLinkSlide') }}</strong><br>
                </span>
            @endif
        </div>
        </div>
      <div class="row">
	      <div class="file-field input-field s12 l12">
		      <img src="" id="slideImage" style="max-width: 200px" alt="">
          <div class="btn" id="btnUploadImageSlide">
            <span>Chọn Ảnh</span>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" id="valueImageSlide"  name="txtImageSlide" value="" type="text">
          </div>
	    	</div>
        @if ($errors->has('txtImageSlide'))
          <span class="red-text">
              <strong>{{ $errors->first('txtImageSlide') }}</strong><br>
          </span>
        @endif
    	</div>

      <br>

      <div class="row">
        <div class="input-field col s12 l12">
            <div class="switch">
                <label>
                  Off
                  <input type="checkbox" name="cb_status">
                  <span class="lever"></span>
                  On
                </label>
              </div>
            @if ($errors->has('cb_status'))
              <span class="red-text">
                  <strong>{{ $errors->first('cb_status') }}</strong><br>
              </span>
            @endif
        </div>
      </div><br>
      <div class="row">
        <div class="input-field col s3">
           <button class="btn waves-effect waves-light" type="submit" value="add" name="btn_add">Thêm slide
              <i class="material-icons right">send</i>
            </button>
        </div>
      </div>
    </form>
  </div>

<form action="{{ route('uploadSlideImage') }}" method="POST" id="uploadSlideImage" style="display: none" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" id="inputUploadAvatar" hidden name="file" ><br />
    <input type="submit" id='btnSubmitAvatar' hidden>
</form>
<script>
  var formAvatar = document.getElementById('uploadSlideImage');
  var requestAvatar = new XMLHttpRequest();

  formAvatar.addEventListener('submit', function(e){
      e.preventDefault();
      var formdata = new FormData(formAvatar);
      requestAvatar.open('post', '{{route('uploadSlideImage') }}');
      requestAvatar.addEventListener("load", transferCompleteAvatar);
      requestAvatar.send(formdata);
  });
  function transferCompleteAvatar(data){
      response = JSON.parse(data.currentTarget.response);
      if(response.success){
            $('#messageAvatar').text('Successfully Uploaded Files!');
            var url=response.file;
            // var node="<img src='"+url+"' height='150px'>";
            // alert(url);
            $("#valueImageSlide").val(url);
            $("#slideImage").attr('src','{{URL::to('/')}}'+url);
      }
  }
</script>
@stop