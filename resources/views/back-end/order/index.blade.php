@extends('back-end.layouts.order-master')
@section('order-content')
<form method="POST" action="{{route('order.updateOrders')}}">
            {{ csrf_field() }}
 @verbatim 
    <div class="row">
        <div ng-controller="MyController" class="my-controller l12">
          <div class="row">
            <div class="col l8">
              <label for="search">Tìm kiếm :</label>
              <input ng-model="q" autofocus id="search" class="form-control" placeholder="Filter text">
            </div>
            <div class="col l4">
              <label for="search">Số đơn hàng trên 1 trang:</label>
              <input type="number" min="1" max="100" class="form-control" ng-model="pageSize">
            </div>
          </div>
            <div class="input-field col s12 l3">
              <select name="option">
                <option value="" disabled selected>Chọn 1 trong các lựa chọn</option>
                <option value="Giao hàng thành công">Giao hàng thành công</option>
                <option value="Đơn hàng đang xử lý">Đơn hàng đang xử lý</option>
                <option value="Đơn hàng đang giao">Đơn hàng đang giao</option>
                <option value="Hủy đơn hàng">Hủy đơn hàng</option>
                <option value="Đã thanh toán">Đã thanh toán</option>
                <option value="Chưa thanh toán">Chưa thanh toán</option>
              </select>
              <label>Cập nhật trạng thái đơn hàng và thanh toán</label>
            </div>
            <div class="input-field col s12 l3">
              <button type="submit" name="btnSent" class="btn">Gửi dữ liệu</button>
            </div>
            <div class="input-field col s12 l3">
              <button type="submit" name="btnPrint" value="submit" class="btn">In hóa đơn</button>
            </div>
            <table>
  		        <thead>
  		          <tr>
                    <th data-field="id"></th>
  		              <th data-field="id">Id</th>
                    <th data-field="name">Thời gian</th>
  		              <th data-field="name">Sách</th>
  		              <th data-field="info">Tên người nhận</th>
  		              <th data-field="logo">SDT liên hệ</th>
  		              <th data-field="total">Địa chỉ</th>
                    <th data-field="total">Tình trạng thanh toán</th>
                    <th data-field="total">Loại thanh toán</th>
                    <th data-field="total">Tổng tiền</th>
                    <th data-field="total">Trạng thái đơn hàng</th>
  		          </tr>
  		        </thead>
  		        <tbody>
  		          <tr dir-paginate="order in orders | filter:q | itemsPerPage: pageSize" current-page="currentPage">
                  <td><input type="checkbox" name="order[]" value="{{order.orderId}}" class="filled-in" id="filled-in-box-{{order.orderId}}" /><label for="filled-in-box-{{order.orderId}}"></label></td>
                  <td>{{order.orderId}}</td>
                  <td>{{order.orderCreatedAt}}</td>
                  <td>{{order.totalBook}} (quyển)</td>
                  <td>{{order.nameReceiver}} </td>
                  <td>{{order.phoneReceiver}}</td>
                  <td>{{order.shipping_address}}</td>
                  <td>{{order.payment_status}}</td>
                  <td>{{order.payment_type}}</td>
                  <td>{{order.amount}}</td>
  		            <td>{{order.order_status}}</td>
  		          </tr>
  		        </tbody>
  		      </table>
        </div>

        <div ng-controller="OtherController" class="other-controller">
          <div>
          <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)">
              <ul class="pagination" ng-if="1 < pages.length || !autoHide">
                <li class="waves-effect" ng-if="boundaryLinks" ng-class="{ disabled : pagination.current == 1 }">
                    <a href="" ng-click="setCurrent(1)">&laquo;</a>
                </li>
                <li class="waves-effect"  ng-if="directionLinks" ng-class="{ disabled : pagination.current == 1 }">
                    <a href="" ng-click="setCurrent(pagination.current - 1)">&lsaquo;</a>
                </li>
                <li class="waves-effect"  ng-repeat="pageNumber in pages track by tracker(pageNumber, $index)" ng-class="{ active : pagination.current == pageNumber, disabled : pageNumber == '...' }">
                    <a href="" ng-click="setCurrent(pageNumber)">{{ pageNumber }}</a>
                </li>

                <li  class="waves-effect" ng-if="directionLinks" ng-class="{ disabled : pagination.current == pagination.last }">
                    <a href="" ng-click="setCurrent(pagination.current + 1)"><i class="material-icons">chevron_right</i></a>
                </li>
                <li  class="waves-effect" ng-if="boundaryLinks"  ng-class="{ disabled : pagination.current == pagination.last }">
                    <a href="" ng-click="setCurrent(pagination.last)"><i class="material-icons">chevron_right</i></a>

                </li>
            </ul>
          </dir-pagination-controls>
          </div>
        </div>
    </div>
@endverbatim
</form>
  <script src="{{ URL::asset('lib/dirPagination.js') }}"></script>
  <script src="{{ URL::asset('lib/controller/orderController.js') }}"></script>
@stop