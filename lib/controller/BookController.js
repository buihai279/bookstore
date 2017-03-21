
myApp.controller('OtherController', OtherController);
myApp.controller('MyController',function($scope,$http,API){
  $http({
    method: 'GET',
    url: API + 'book/list'
  }).then(function successCallback(response) {
    $scope.books=response.data;
    });
  $scope.currentPage = 1;
  $scope.pageSize = 10;
  $scope.books = [];
});