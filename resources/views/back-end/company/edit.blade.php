@extends('back-end.layouts.company-master')
@section('company-content')

<div class="row"> 
	<form class="col s12 m6" method="POST" action="{{ route('company.update',$company->id) }}">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
          <input placeholder="Nhập tên Nhà cung cấp" id="icon_prefix" name="txtNameCompany" type="text" class="validate" required autofocus value="{{$company->company_name}}">
          <label for="icon_prefix">Tên Nhà cung cấp</label>
          @if ($errors->has('txtNameCompany'))
              <span class="red-text">
                  <strong>{{ $errors->first('txtNameCompany') }}</strong><br>
              </span>
          @endif
        </div>
        <div class="input-field col s12">
	          <i class="material-icons prefix">mode_edit</i>
	          <textarea id="icon_prefix2" class="materialize-textarea" name="txtCompanyInfo">{{$company->company_info}}</textarea>
	          <label for="icon_prefix2">Thông tin Nhà cung cấp</label>
            @if ($errors->has('txtCompanyInfo'))
                <span class="red-text">
                    <strong>{{ $errors->first('txtCompanyInfo') }}</strong><br>
                </span>
            @endif
        </div>
          
      </div>
      <div class="row">
	      <div class="file-field input-field s12">
          <img src="{{$company->company_img}}" id="companyLogo" style="max-width: 200px" alt="">
		      <div class="btn" id="btnUploadLogoCompany">
		        <span>Chọn Ảnh</span>
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" id="valueLogo"  name="txtCompanyLogo" value="{{$company->company_img}}" type="text">
		      </div>
	    	</div>
        @if ($errors->has('txtCompanyLogo'))
          <span class="red-text">
              <strong>{{ $errors->first('txtCompanyLogo') }}</strong><br>
          </span>
        @endif
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
      <h4 class="red-text">Công ty phát hành {{count($books)}} đầu sách</h4>
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
<form class="col s12 fmtDelete" method="POST" action="{{ route('company.destroy',$company->id) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
</form>
  <div class="row">
    <div class="input-field col s3">
       <button class="btn waves-effect waves-light red" data-target="modalConfirmDelete" type="submit"  value="delete" name="btn_delete">Xóa Nhà cung cấp
          <i class="material-icons right">send</i>
        </button>
    </div>
  </div>
  <!-- Modal Structure -->
  <div id="modalConfirmDelete" class="modal sm-modal">
    <div class="modal-content">
      <h4 class="red-text ">Bạn có thực sự muốn xóa</h4>
      <p>Nhà cung cấp và các sách có liên quan sẽ bị xóa</p>
    </div>
    <div class="modal-footer">
      <a href="" class="modal-action modal-close waves-effect waves-light btn-flat ">Đóng</a>
      <a href="" class="btnDelete modal-action modal-close waves-effect waves-light btn-flat ">Xóa</a>
    </div>
<form action="{{ route('uploadCompanyLogo') }}" method="POST" id="uploadCompanyLogo" style="display: none" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" id="inputUploadAvatar" hidden name="file" ><br />
    <input type="submit" id='btnSubmitAvatar' hidden>
</form>

<script>
  var formAvatar = document.getElementById('uploadCompanyLogo');
  var requestAvatar = new XMLHttpRequest();

  formAvatar.addEventListener('submit', function(e){
      e.preventDefault();
      var formdata = new FormData(formAvatar);
      requestAvatar.open('post', '{{route('uploadCompanyLogo') }}');
      requestAvatar.addEventListener("load", transferCompleteAvatar);
      requestAvatar.send(formdata);
  });
  function transferCompleteAvatar(data){
      response = JSON.parse(data.currentTarget.response);
      if(response.success){
            $('#messageAvatar').text('Successfully Uploaded Files!');
            var url=response.file;
            // var node="<img src='"+url+"' height='150px'>";
            $("#valueLogo").val(url);
            $("#companyLogo").attr('src','{{URL::to('/')}}'+url);
      }
  }

</script>
@stop
