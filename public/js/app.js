"use strict";

var sampleApp = angular.module('sampleApp', ['ngRoute', 'dndLists'], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

sampleApp.config(function($routeProvider){
	$routeProvider
		.when('/view1', 
			{
				templateUrl: 'partials/view1.php',
				controller: 'SimpleController'
			})
		.when('/view2', 
			{
				templateUrl: 'partials/view2.php',
				controller: 'SimpleController'
			})
		.otherwise({ redirectTo: '/view1' });
});
