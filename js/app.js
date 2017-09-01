var application = angular.module('cu-portal', ['ngRoute']);

application.controller('maincontroller', function($scope){
  $scope.form = {
    email : '',
    password : '',
    keepmein : false,
  }
  $scope.login = function(){
    //login php script
  }
  $scope.logout = function(){
    //logout php script
  }
});
