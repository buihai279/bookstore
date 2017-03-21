app.controller('CategoryController',function($scope,$http,API){
	$http({
	  method: 'GET',
	  url: API + 'list-categories'
	}).then(function successCallback(response) {
		$scope.categories=response.data;
	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });
});