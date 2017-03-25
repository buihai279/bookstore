function OtherController($scope) {}
myApp.controller('OtherController', OtherController);
myApp.controller('MyController',function($scope,$http,API){
  $http({
    method: 'GET',
    url: API + 'order/list'
  }).then(function successCallback(response) {
    $scope.orders=response.data;
    });
  $scope.currentPage = 1;
  $scope.pageSize = 10;
  $scope.orders = [];
});