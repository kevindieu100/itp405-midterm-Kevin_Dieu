var myApp = angular.module('myApp', ['ngRoute']);

myApp.config(['$routeProvider', '$locationProvider',
  function($routeProvider, $locationProvider){
    $routeProvider.when('/search',{
      templateUrl: '/templates/search.htm',
      controller: 'myController'
    });

    $routeProvider.otherwise('/');
    $locationProvider.html5Mode({enabled: true, requireBase:false}).hashPrefix('!');
  }
]);

myApp.controller('myController', ['$scope', '$http', '$location', '$rootScope', function($scope, $http, $location, $rootScope){
  $scope.search = function() {
    $http({
      url: '/api/dvds',
      data: $scope.form,
      method: 'POST'
    }).then(function(success){
      console.log(success.data);
      $rootScope.dvds = success.data;
      $location.path('/search');
    });
  }
}]);

//# sourceMappingURL=app.js.map
