function OtherController($scope) {}
myApp.controller('OtherController', OtherController);
myApp.controller('MyController',function($scope,$http,API){
  $http({
    method: 'GET',
    url: API + 'comment/list'
  }).then(function successCallback(response) {
    $scope.comments=response.data;
    // console.log(1);
    });
  $scope.currentPage = 1;
  $scope.pageSize = 10;
  $scope.comments = [];
});