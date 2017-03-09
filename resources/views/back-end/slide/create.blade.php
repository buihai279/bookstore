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
		      <div class="btn">
		        <span>Chọn Ảnh</span>
		        <input type="file" name="fileImg">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" name="fileNameImg" type="text">
		      </div>
            @if ($errors->has('fileNameImg'))
              <span class="red-text">
                  <strong>{{ $errors->first('fileNameImg') }}</strong><br>
              </span>
            @endif
	    	</div>
    	</div><br>

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
@stop