@extends('back-end.layouts.news-master')
@section('news-content')
<div class="row"> 
  <form class="col s12 l8" method="POST" action="{{ route('news.store') }}">
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12 l12">
          <input placeholder="Nhập tiêu đề" id="icon_prefix" name="txtTitle" type="text" class="validate">
            <label for="icon_prefix2">Tiêu đề tin tức</label>
            @if ($errors->has('txtTitle'))
                <span class="red-text">
                    <strong>{{ $errors->first('txtTitle') }}</strong><br>
                </span>
            @endif
        </div>
        </div>
      <div class="row">

        <div class="input-field col s12 l12">
            <textarea id="icon_prefix2" class="materialize-textarea" name="txtDescription"></textarea>
            <label for="icon_prefix2">Mô tả tin tức</label>
            @if ($errors->has('txtDescription'))
                <span class="red-text">
                    <strong>{{ $errors->first('txtDescription') }}</strong><br>
                </span>
            @endif
        </div>

      </div>
      <div class="row">

        <div class="input-field col s12 l12">
            <textarea id="icon_prefix2" class="materialize-textarea" name="txtContent"></textarea>
            <label for="icon_prefix2">Nội dung</label>
            @if ($errors->has('txtContent'))
                <span class="red-text">
                    <strong>{{ $errors->first('txtContent') }}</strong><br>
                </span>
            @endif
        </div>

      </div>
      <br>

      <div class="row">
        <div class="input-field col s3">
           <button class="btn waves-effect waves-light" type="submit" value="add" name="btn_add">Thêm
              <i class="material-icons right">send</i>
            </button>
        </div>
      </div>
    </form>
  </div>
@stop