<?php
  include_once("res/session.php");
  include_once("res/connect.php");
?>

<!DOCTYPE html>
<html lang="en" ng-app = "cu-portal">
  <head>
    <title>School Portal</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href = "css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  </head>
  <body>


  <div ng-view>

  </div>
  
  <script type="text/javascript" src = "js/angular.min.js"></script>
  <script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src = "js/app.js"></script>
  <script type="text/javascript" src = "js/config.js"></script>
  <script type="text/javascript" src = "js/ctrl.js"></script>
 <script type="text/javascript" src = "js/print.js"></script>
 
  </body>

</html>
