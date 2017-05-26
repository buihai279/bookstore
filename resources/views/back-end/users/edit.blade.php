@extends('back-end.layouts.usermaster')
@section('user-content')
    @php
    if(Auth::id()==$user->id || Auth::user()->level<=$user->level)
      $disabled="disabled='disabled'";
    else
      $disabled='';
    @endphp
    <form class="col s12 l6"  method="POST" action="{{ route('user.update',$user->id) }}">
     {{ csrf_field() }}
      <div class="row">
          <div class="input-field col s12">
            <input disabled value="{{$user->id}}" id="disabled" name="id" type="text" class="validate">
            <label for="disabled">ID</label>
          </div>
      </div>

      <div class="row">
          <div class="input-field col s12">
            <input disabled value="{{$user->email}}" id="disabled" type="text" class="validate">
            <label for="disabled">Email</label>
          </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
            <input disabled value="{{$user->phone}}" id="disabled" type="text" class="validate">
            <label for="disabled">Số điện thoại</label>
          </div>
      </div>

      <div class="row">
          <div class="input-field col s12">
          @php
            $arrayName = array('0' => 'Memmber','1' => 'Mod','2' =>  'Admin');
          @endphp
            @foreach ($arrayName as $key => $element)
                <p>
                  <input name="rdo_level" @if ($key==$user->level){{'checked'}} @endif type="radio" id="{{$element}}" value="{{$key}}" {{$disabled}} @if ($key==2){{"disabled='disabled'"}} @endif />
                  <label for="{{$element}}">{{$element}}</label>
                </p>
            @endforeach
            <label>Phân quyền</label>
          </div>
      </div>
      <p>Khóa người dùng</p>
      <div class="row">
          <div class="input-field col s6">
            <div class="switch">
              <label>
                Mở
                <input type="checkbox" @if ($user->block==true){{ 'checked' }} @endif {{$disabled}} name="rdo_block" value="1" >
                <span class="lever"></span>
                Khóa
              </label>
            </div>
          </div>
      </div><br>
      <div class="row">
        <div class="input-field col s6">
          <textarea disabled id="disabled" class="materialize-textarea">{{$user->address}}</textarea>
          <label for="disabled">Địa chỉ</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <button class="btn waves-effect waves-light" type="submit" value="update" name="btn_update">Cập nhật
              <i class="material-icons right">send</i>
          </button>
        </div>
        <div class="input-field col s6">
          <button class="btn waves-effect waves-light" type="submit" value="delete" name="btn_delete">Xóa người dùng
              <i class="material-icons right">delete</i>
          </button>
        </div>
      </div>
      
    </form>
@stop