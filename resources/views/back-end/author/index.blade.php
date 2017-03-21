@extends('back-end.layouts.author-master')
@section('author-content')
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
		              <th data-field="name">Tên tác giả</th>
		              <th data-field="image">Giới thiệu</th>
		              <th data-field="image">Ảnh</th>
		              <th data-field="total">Tổng số sách</th>
		              <th data-field="total"></th>
		          </tr>
		        </thead>

		        <tbody>
		          <tr dir-paginate="author in authors | filter:q | itemsPerPage: pageSize" current-page="currentPage">
		            <td>{{author.id}}</td>
		            <td>{{author.author_name}}</td>
		            <td> {{author.author_info}}</td>
		            <td>
                  <img ng-if="author.author_image" width="70"  class="responsive-img" ng-src="http://localhost/bookstore{{author.author_image}}">
                </td>
		            <td>{{author.total}}</td>

		            <td>
			            <a href="author/{{author.id}}/edit" class="waves-effect waves-light btn" style="width: 35px;padding: 0">
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
  <script src="{{ URL::asset('lib/controller/AuthorController.js') }}"></script>
@stop