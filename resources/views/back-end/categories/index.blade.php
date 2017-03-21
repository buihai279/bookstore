@extends('back-end.layouts.category-master')
@section('user-content')
<div class="row">
    <ul class="collapsible col s6" data-collapsible="accordion">
        <li>
          <div class="collapsible-header">
            <i class="material-icons">filter_drama</i>Thêm danh mục mới
            @if ($errors->has('txtNameCategory'))
                <span class="red-text">
                    <strong>{{ $errors->first('txtNameCategory') }}</strong><br>
                </span>
            @endif
          </div>
          <div class="collapsible-body">
              <form class="" method="POST" action="{{ route('category.store') }}">
              {{ csrf_field() }}
                <div class="input-field">
                  <input placeholder="Placeholder" name="txtNameCategory" id="category_name" type="text" class="validate">
                  
                  <label for="category_name">Tên danh mục</label>
                  @if ($errors->has('txtNameCategory'))
                      <span class="red-text">
                          <strong>{{ $errors->first('txtNameCategory') }}</strong><br>
                      </span>
                  @endif
                </div>
                <div class="input-field">
                  <select name="parent_id">
                    <option value='0'>Danh mục gốc</option>
                    @php
                      echo $selectCategory;
                    @endphp
                  </select>
                  <label>Danh mục cha</label>
                  @if ($errors->has('parent_id'))
                      <span class="red-text">
                          <strong>{{ $errors->first('parent_id') }}</strong><br>
                      </span>
                  @endif
              </div>
                <div class="input-field">
                   <button class="btn waves-effect waves-light" type="submit" name="action">Thêm mới
                      <i class="material-icons right">add</i>
                    </button>
                </div>
              </form>
          </div>
        </li>
      </ul>
</div>
    <table class="responsive-table bordered highlight list-categories">
      <thead>
        <tr>
            <th>Danh mục menu</th>
            <th></th>
        </tr>
      </thead>
      <tbody>
        @php
          echo  $listCategories;
        @endphp
      </tbody> 
    </table>
@stop