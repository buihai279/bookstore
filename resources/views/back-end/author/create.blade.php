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
	          <textarea id="icon_prefix2" class="materialize-textarea" name="txtAuthorInfo"></textarea>
	          <label for="icon_prefix2">Thông tin tác giả</label>
	          @if ($errors->has('txtAuthorInfo'))
                <span class="red-text">
                    <strong>{{ $errors->first('txtAuthorInfo') }}</strong><br>
                </span>
            @endif
        </div>
          
      </div>
      <div class="row">
	      <div class="file-field input-field s12 l8">
		      <div class="btn">
		        <span>Chọn Ảnh</span>
		        <input type="file" name="fileAuthorImg">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" value="" type="text">
		      </div>
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
@stop