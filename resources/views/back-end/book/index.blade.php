@extends('back-end.layouts.book-master')
@section('book-content')
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
                  <th data-field="name">Ảnh Book</th>
                  <th data-field="image">link</th>
                  <th data-field="image">status</th>
                  <th data-field="total">order</th>
                  <th data-field="total">created_at</th>
                  <th data-field="total">created_at</th>
                  <th data-field="total">created_at</th>
                  <th data-field="total">created_at</th>
                  <th data-field="total">created_at</th>
                  <th data-field="total">created_at</th>
                  <th data-field="total"></th>
              </tr>
            </thead>

            <tbody>
              <tr dir-paginate="book in books | filter:q | itemsPerPage: pageSize" current-page="currentPage">
                <td>{{book.id}}</td>
                <td>{{book.book_name}}</td>
                <td>{{book.description}}</td>
                <td>{{book.publish_date}}</td>
                <td>{{book.author_id}}</td>
                <td>{{book.company_id}}</td>
                <td>{{book.category_id}}</td>
                <td>{{book.publishing_house}}</td>
                <td>{{book.translator}}</td>
                <td>{{book.created_at}}</td>
                <td>{{book.updated_at}}</td>

                <td>
                  <a href="book/{{book.id}}/edit" class="waves-effect waves-light btn" style="width: 35px;padding: 0">
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
  <script src="{{ URL::asset('lib/controller/BookController.js') }}"></script>
@stop