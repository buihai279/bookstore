@extends('back-end.layouts.news-master')
@section('news-content')
<div class="row"> 
  <form class="col s12 l8" method="POST" action="{{ route('news.update',$news->id) }}">
      {{ csrf_field() }}
  {{ method_field('PUT') }}
      <div class="row">
        <div class="input-field col s12 l12">
          <input placeholder="Nhập tiêu đề" id="icon_prefix" name="txtTitle" type="text" class="validate" value="{{$news->title}}">
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
            <textarea id="icon_prefix2" class="materialize-textarea" name="txtDescription">{{$news->description}}</textarea>
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
            <textarea id="icon_prefix2" class="materialize-textarea" name="txtContent">{{$news->content}}</textarea>
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
           <button class="btn waves-effect waves-light" type="submit" value="add" name="btn_add">Cập nhật
              <i class="material-icons right">send</i>
            </button>
        </div>
      </div>
    </form>
   <button class="btn waves-effect waves-light red" data-target="modalConfirmDelete"  type="submit" name="btn_delete" value="delete" >Xóa
      <i class="material-icons right">delete</i>
    </button>
      <form id="form-destroy" action="{{ route('news.destroy',$news->id) }}" method="POST" style="display: none;">
          {{ csrf_field() }}
  {{ method_field('DELETE') }}
      </form>
  </div>
@stop
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