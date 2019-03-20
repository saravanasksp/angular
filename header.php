<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

    <title>Angular - One framework. Mobile & desktop.</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/angular-date-picker.css" rel="stylesheet">
    <link href="css/colorpicker.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  
  <body>
	<header id="myHeader" ng-controller="menuController">
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top main-nav">
			<div class="container">
				<a class="navbar-brand" href="http://localhost/test/1/"><img src="img/logo-nav.png" alt="logo-nav" class="img-fluid"></a>
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
					<!--<span class="navbar-text">
					  <a href="login.php" title="Register"><i class="far fa-user"></i></a>
					</span>-->
				</div>
			</div>
		</nav>
	
	
	</header>
<div id="helloCalendar" class="calendar-container block-center" ng-controller="CalendarController">
  <div class="calendar-clip left"></div>
  <div class="calendar-clip right"></div>

	<div class="calendar-head">
	  <span class="month text-center">{{M}}</span>
	</div>
	<div class="calendar-body">
		<span class="date text-center">{{D}}</span>
	</div>
</div>	