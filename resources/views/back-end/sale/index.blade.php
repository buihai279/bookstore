@extends('back-end.layouts.sale-master')
@section('sale-content')
 @verbatim 

    <div class="row">
        <div ng-controller="MyController" class="my-controller">
          <div class="row">
            <div class="col s8">
              <label for="search">Search:</label>
              <input ng-model="q" autofocus id="search" class="form-control" placeholder="Filter text">
            </div>
            <div class="col s4">
              <label for="search">items per page:</label>
              <input type="number" min="1" max="100" class="form-control" ng-model="pageSize">
            </div>
          </div>
              <table>
            <thead>
              <tr>
                  <th data-field="id">Id</th>
                  <th data-field="name">Mã giảm giá</th>
                  <th data-field="name">Lượng mã còn</th>
                  <th data-field="name">Nội dung giảm giá</th>
                  <th data-field="image">Phần trăm</th>
                  <th data-field="image">Đơn hàng áp dụng</th>
                  <th data-field="image">Tối đa</th>
                  <th data-field="image">Thời gian bắt đầu</th>
                  <th data-field="total">Thời gian kết thúc</th>
                  <th data-field="total">Ngày tạo</th>
              </tr>
            </thead>

            <tbody>
              <tr dir-paginate="sale in sales | filter:q | itemsPerPage: pageSize" current-page="currentPage">
                <td>{{sale.id}}</td>
                <td>{{sale.code}}</td>
                <td>{{sale.quality_code}}</td>
                <td>{{sale.content}}</td>
                <td>-{{sale.percent}}% </td>
                <td>{{sale.condition}} {{sale.number}}</td>
                <td>{{sale.max}}</td>
                <td>{{sale.started | date:'medium'}}</td>
                <td>{{sale.stopped | date:'medium'}}</td>
                <td>{{sale.created_at}}</td>
                <td>
                  <a href="sale/{{sale.id}}/edit" class="waves-effect waves-light btn" style="width: 35px;padding: 0">
                    <i class="material-icons">edit</i>
                  </a>
              </td>
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
  <script src="{{ URL::asset('lib/dirPagination.js') }}"></script>
  <script src="{{ URL::asset('lib/controller/SaleController.js') }}"></script>
@stop