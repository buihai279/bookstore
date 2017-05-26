@extends('back-end.layouts.book-master')
@section('book-content')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-sanitize.js"></script>
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
              <table class="table-book striped responsive-table">
            <thead>
              <tr>
                  <th data-field="id">Id</th>
                  <th data-field="name">Tên sách</th>
                  <th data-field="name">Tác giả</th>
                  <th data-field="name">Ảnh Bìa</th>
                  <th data-field="image">Xuất bản</th>
                  <th data-field="image">Công ty phát hành</th>
                  <th data-field="total">Danh mục</th>
              </tr>
            </thead>
            <tbody>
              <tr dir-paginate="book in books | filter:q | itemsPerPage: pageSize" current-page="currentPage">
                <td>{{book.id}}</td>
                <td style="width:350px">{{book.book_name}}</td>
                <td style="width:300px">{{book.author_name}}</td>
                <td><img width="70px" src="http://localhost/bookstore{{book.book_image}}"></td>
                <td style="width:200px">{{book.publish_date | date:'MM-yyyy'}}</td>
                <td style="width:300px">{{book.company_name}}</td>
                <td style="width:300px">{{book.category_name}}</td>

                <td>
                  <a href="book/{{book.id}}/edit" class="waves-effect waves-light btn" style="width: 35px;padding: 0">
                    <i class="material-icons">edit</i>
                  </a>
                  <a href="sach/{{book.id}}" class="waves-effect waves-light btn blue lighten-4" style="width: 35px;padding: 0">
                    <i class="material-icons">remove_red_eye</i>
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
  <script src="{{ URL::asset('lib/controller/BookController.js') }}"></script>
@stop
{{-- <td ng-bind-html="book.description "></td> --}}