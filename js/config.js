application.config(function($routeProvider){
  $routeProvider
  .when('/', {
    templateUrl : 'partials/login.php',
   // controller : 'maincontroller'
  })
  .when('/dashboard', {
  	 // resolve: {
  	 // 	"check": function($location){
  	 // 		//if(!$rootScope.loggedIn){
   	// 		//$location.path("/");
  	 		//}else{
  	 			templateUrl: 'partials/dashboard.php',			
  	 		//}	
  	 // }
  	
  //	controller : 'maincontroller'
  })
  .when('#', {
      
    })
  .otherwise({
  	redirectTo: '/'
  });

});
