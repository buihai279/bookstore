@extends('back-end.layouts.category-master')
@section('user-content')

    <form class="col s12 m4" method="POST" action="{{ route('category.update',$category->id) }}">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="row">
        <div class="input-field ">
          <input placeholder="Nhập tên danh mục" name="txtNameCategory" id="category_name" type="text" value="{{$category->category_name}}" class="validate">
          <label for="category_name">Tên danh mục</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field ">
            <select name="parent_id">
              <option value='0'>Danh mục gốc</option>
              @php
                echo $listOption;
              @endphp
            </select>
            <label>Danh mục cha</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
           <button class="btn waves-effect waves-light" type="submit"  value="edit" name="btn_edit">Sửa
              <i class="material-icons right">send</i>
            </button>
        </div>
      </div>
    </form>
    <div class="col s12 m8">
      @if (count($books)>0)
        <h4 class="red-text">Danh mục có {{count($books)}} đầu sách</h4>
        <ul>
          @foreach ($books as $element)
            <li>
              {{$element->book_name}}
            </li>
          @endforeach      
        </ul>
      @endif
    </div>
    <div class="row">
      <form class="col s8 fmtDelete" method="POST" action="{{ route('category.destroy',$category->id) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
         <button class="btn waves-effect waves-light red" data-target="modalConfirmDelete"  type="submit" name="btn_delete" value="delete" >Xóa
            <i class="material-icons right">delete</i>
          </button>
      </form>
    </div>
    <div class="row">
      <ul class="sortable sortablecolumn col s12 m6 l4">
        <li class="ui-state-disabled"><span class="red-text">Sắp xếp thứ tự các danh mục con</span></li>
        <form method ="POST" action="{{ route('submitOrderCategory') }}">
        {{ csrf_field() }}
        @foreach ($listOrder as $element)
          <li class="ui-state-default portlet">
            <span class="portlet-header">{{$element->category_name}}</span>
            <input type="text" name="order[]" value="{{$element->id}}" hidden="hidden">
          </li>
        @endforeach
        <button class="btn waves-effect waves-light" type="submit"  value="order" name="btn_order">Sắp xếp
            <i class="material-icons right">send</i>
          </button>
        </form>
      </ul>
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
      <a href="" class="btnDelete modal-action modal-close waves-effect waves-light btn-flat ">Xóa</a>
    </div>
  </div>