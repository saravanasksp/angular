<!doctype html>
<html lang="en" ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

    <title>Angular - One framework. Mobile & desktop.</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	
  </head>
 <body>
 <header ng-controller="menuController">
		<nav class="navbar navbar-expand-lg navbar-light fixed-top main-nav">
			<div class="container">
				<a class="navbar-brand" href="#">Logo</a>
				<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					
					<i class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav text-uppercase ml-auto">
						<li ng-repeat="menu in menus" class="nav-item dropdown">
							<ng-template ng-if="menu.menus.length > 0">
						  <a target="_self" href="{{menu.action}}" class="dropdown-toggle nav-link" data-toggle="dropdown">{{menu.title}}</a>
						  <ul ng-if="menu.menus" class="dropdown-menu">
							<li ng-repeat="submenu in menu.menus">
							  <a target="_self" href="{{submenu.action}}" class="dropdown-item">{{submenu.title}}</a>
							</li>
						  </ul>
						  </ng-template>
						   <ng-template ng-if="menu.menus.length == null">
								  <a target="_self" ng-click="" href="{{menu.action}}" class="nav-link">{{menu.title}}</a>
						   </ng-template>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
	
	
	</header>
	<section class="sectionThree py-5" id="services" ng-controller="iconBox">
		<div class="container py-5">
			<div class="section-header text-center">
				<h3>AngularJS</h3>
				<p>We are always with you to make your project.</p>
			</div>
			<div class="row text-center mt-4">
				<div class="col-md-4 col-lg-4 pb-4 pb-md-0" ng-repeat="serviceitem in servicebox">
					<div class="service-box">
						<i class="{{serviceitem.icon}}"></i>
						<h3>{{serviceitem.title}}</h3>
						<p>{{serviceitem.desc}}</p>
					</div>
				</div>
			</div>
		</div>
	</section>
  
  
  
  
  
  
  
  
  
  
  
  
  
	<script src="http://localhost/test/1/js/angular-1.1.5.min.js"></script>
	<script>
var app = angular.module("myApp", []);

//menu
app.controller("menuController", function($scope) {
  $scope.menus = [  
	{
		title: "Home", 
		action: "/test/1"
	},
	{
		title: "About", 
		action: "about.php"
	},
	{
		title: "Module", 
		action: "#", 
		menus: [
		  {
			title: "Calendar",
			action: "calendar.php"
		  },
		  {
			title: "Submenu 2",
			action: "#"
		  }
		]
	},
	{
		title: "Form", 
		action: "form.php"
	}
]
});

//iconbox	
app.controller('iconBox', function iconBox($scope) {
	$scope.servicebox = [
		{
			"icon" 		: "fas fa-shopping-cart",
			"title" 	: "ng-app",
			"desc"		: "The ng-app directive tells AngularJS that this is the root element of the AngularJS application. All AngularJS applications must have a root element. You can only have one ng-app directive in your HTML document." 
		},
		{
			"icon" 		: "fas fa-desktop",
			"title" 	: "ng-controller",
			"desc"		: "The ng-controller directive adds a controller to your application. In the controller you can write code, and make functions and variables, which will be parts of an object, available inside the current HTML element." 
		},
		{
			"icon" 		: "fas fa-lock",
			"title" 	: "$scope",
			"desc"		: "The scope is the binding part between the HTML (view) and the JavaScript (controller). The scope is an object with the available properties and methods. The scope is available for both the view and the controller." 
		}
	];
});
	
	
	</script>
     </body>
</html>