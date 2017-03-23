var myApp = angular.module('myApp', ['ngRoute']);

myApp.config(['$routeProvider', '$locationProvider',
  function($routeProvider, $locationProvider){
    $routeProvider.when('/',{
      templateUrl: '/templates/search.html',
      controller: 'myController'
    });

    $routeProvider.otherwise('/');
  }
]);

myApp.config(function ($interpolateProvider) {

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

myApp.controller('myController', ['$scope', function($scope){

}]);
