@extends('back-end.layouts.company-master')
@section('company-content')

<div class="row"> 
	<form class="col s12" method="POST" action="{{ route('company.store') }}">
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12 l8">
        <i class="material-icons prefix">account_circle</i>
          <input placeholder="Nhập tên Nhà cung cấp" id="icon_prefix" name="txtNameCompany" type="text" class="validate" value="">
          <label for="icon_prefix">Tên Nhà cung cấp</label>
          @if ($errors->has('txtNameCompany'))
              <span class="red-text">
                  <strong>{{ $errors->first('txtNameCompany') }}</strong><br>
              </span>
          @endif
        </div>
        <div class="input-field col s12 l8">
	          <i class="material-icons prefix">mode_edit</i>
	          <textarea id="icon_prefix2" class="materialize-textarea" name="txtCompanyInfo"></textarea>
	          <label for="icon_prefix2">Thông tin Nhà cung cấp</label>
	          @if ($errors->has('txtCompanyInfo'))
                <span class="red-text">
                    <strong>{{ $errors->first('txtCompanyInfo') }}</strong><br>
                </span>
            @endif
        </div>
          
      </div>
      <div class="row">
	      <div class="file-field input-field s12 l8">
		      <div class="btn">
		        <span>Chọn Ảnh</span>
		        <input type="file" name="fileCompanyImg">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" value="" type="text">
		      </div>
	    	</div>
    	</div>
      <div class="row">
        <div class="input-field col s3">
           <button class="btn waves-effect waves-light" type="submit"  value="edit" name="btn_edit">Thêm Nhà cung cấp
              <i class="material-icons right">send</i>
            </button>
        </div>
      </div>
    </form>
  </div>
@stop