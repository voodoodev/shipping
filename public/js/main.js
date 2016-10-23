var app = angular.module('trackingApp', [], function($interpolateProvider){
    $interpolateProvider.startSymbol('<-');
    $interpolateProvider.endSymbol('->');
});

app.controller('trackingCtrl', function($scope, $http){
	$scope.searchReq = function() {
		$http.get('/search/' + $scope.search).then(function(response){
			$scope.items = response.data;
			console.log($scope.items);
		});
	};
});