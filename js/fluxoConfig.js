angular.module("fluxo").config(function ($routeProvider) {
	$routeProvider.when("/entradas", {
		templateUrl: "views/entradas.html",
		controller: "fluxoCtrl"
	});
	$routeProvider.when("/saidas", {
		templateUrl: "views/saidas.html",
		controller: "fluxoCtrl"
	});
	$routeProvider.otherwise({redirectTo: "/index"});
});