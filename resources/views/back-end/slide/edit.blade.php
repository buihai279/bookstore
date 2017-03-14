@extends('back-end.layouts.slide-master')
@section('slide-content')
<div class="row"> 
  <form class="col s12 l8" method="POST" action="{{ route('slide.update',$slide->id) }}">
      {{ csrf_field() }}
  {{ method_field('PUT') }}
      <div class="row">
        <div class="input-field col s12 l12">
          <input placeholder="Nhập link slide" id="icon_prefix" name="txtLinkSlide" type="text" class="validate" value="{{$slide->link}}">
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
            <input class="file-path validate" name="fileNameImg" type="text" value="{{$slide->slide_image}}">
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
                  <input type="checkbox" name="cb_status" value="@if ($slide->status)
                    {{'on'}}
                  @endif">
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
           <button class="btn waves-effect waves-light" type="submit" value="add" name="btn_add">Cập nhật
              <i class="material-icons right">send</i>
            </button>
        </div>
      </div>
    </form>

   <button class="btn waves-effect waves-light red" data-target="modalConfirmDelete"  type="submit" name="btn_delete" value="delete" >Xóa
      <i class="material-icons right">delete</i>
    </button>
      <form id="form-destroy" action="{{ route('slide.destroy',$slide->id) }}" method="POST" style="display: none;">
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