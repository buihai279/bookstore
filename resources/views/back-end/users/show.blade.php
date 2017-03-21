@extends('back-end.layouts.usermaster')
@section('user-content')
<table class="responsive-table" ng-controller="UserController">
    <thead>
      <tr>
          <th></th>
          <th>Họ tên</th>
          <th>Email</th>
          <th>Số điện thoại</th>
          <th>Địa chỉ</th>
          <th></th>
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat="user in users"  ng-style="user.deleted && {'text-decoration': 'line-through'}">
      @verbatim
        <td>
          <a href="user/{{user.id}}/edit" class="waves-effect waves-light btn" style="width: 35px;padding: 0"  ng-if="user.deleted==0">
            <i class="material-icons">edit</i>
          </a>
        </td>
        <td>{{ user.name }}</td>
        <td>{{ user.email }}</td>
        <td>{{ user.phone }}</td>
        <td>{{ user.address }}</td>
        <td>
          <span class="new badge blue" data-badge-caption="mod" ng-if="user.level==1"></span>
          <span class="new badge" data-badge-caption="admin" ng-if="user.level==2"></span>
          <span class="badge" data-badge-caption="Thành viên" ng-if="user.level==0"></span>
          <span class="new badge red" data-badge-caption="Đã khóa" ng-if="user.block==1"></span>
        </td>
      @endverbatim
      </tr>
    </tbody> 
  </table>
@stop