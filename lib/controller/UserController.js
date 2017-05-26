var app=angular.module('myApp',[]).constant('API',$domain);
app.controller('UserController',function($scope,$http,API){
	$http({
	  method: 'GET',
	  url: API + 'list-users'
	}).then(function successCallback(response) {
		$scope.users=response.data;
	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });
});