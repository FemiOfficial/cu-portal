var application = angular.module('cu-portal', ['ngRoute']);

application.controller('logincontroller', function($scope, $rootScope, $location){
  
  $scope.submit = function(){
    if ($scope.username == 'Admin' && $scope.password == 'admin'){
      //$rootScope.loggedIn = true;
      $location.path('/dashboard');
    }else{
      alert("Invalid Username or Password");
    }
  }
  $scope.login = function(){
    //login php script
  }
  $scope.logout = function(){
    //logout php script
  }
});
application.controller('pagescontroller', function($scope){
    
})
.config(function($routeProvider){
  $routeProvider
  .when('/', {
    templateUrl : 'partials/dashboard.php',
   // controller : 'maincontroller'
  })
  .otherwise({
    redirectTo: '/'
  });

});
