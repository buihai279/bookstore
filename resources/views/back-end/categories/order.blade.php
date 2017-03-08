@extends('back-end.layouts.category-master')
@section('user-content')
<div style="clear: both;"></div>
  

 <div class="wrapSortable">
    <ul class="sortable sortablecolumn">
      <li class="ui-state-disabled"><h4 class="red-text">Links</h4></li>
      <li class="ui-state-default portlet"><span class="portlet-header">Item 1</span></li>
      <li class="ui-state-default portlet"><span class="portlet-header">Item 2</span></li>
      <li class="ui-state-default portlet"><span class="portlet-header">Item 3</span></li>
      <li class="ui-state-default portlet"><span class="portlet-header">Item 4</span></li>
      <li class="ui-state-default portlet"><span class="portlet-header">Item 5</span></li>
    </ul>
    <ul  class="sortable sortablecolumn">
      <li class="ui-state-disabled"><h4 class="red-text">Links</h4></li>
      <li class="ui-state-highlight portlet"><span class="portlet-header">Item 1</span></li>
      <li class="ui-state-highlight portlet"><span class="portlet-header">Item 2</span></li>
      <li class="ui-state-highlight portlet"><span class="portlet-header">Item 3</span></li>
      <li class="ui-state-highlight portlet"><span class="portlet-header">Item 4</span></li>
      <li class="ui-state-highlight portlet"><span class="portlet-header">Item 5</span></li>
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