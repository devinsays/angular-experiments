var myapp = angular.module( 'myapp', [] );

// Set the configuration
myapp.run( ['$rootScope', function($rootScope) {

	// Variables defined by wp_localize_script
	$rootScope.api = aeJS.api;

}]);

// Add a controller
myapp.controller( 'mycontroller', ['$scope', '$http', function( $scope, $http ) {

	// Load posts from the WordPress API
	$http({
		method: 'GET',
		url: $scope.api,
		params: {
			'filter[posts_per_page]' : 10
		},
	}).
	success( function( data, status, headers, config ) {
		console.log( $scope.api );
		console.log( data );
		$scope.posts = data;
	}).
	error(function(data, status, headers, config) {});

}]);