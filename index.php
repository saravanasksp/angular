<?php include "header.php"?>
<div class="wrapper" ng-app="indexWrapper">
<section ng-controller="slideController" class="main-slider mt-5 pt-2">
    <div id="homeSlide" class="hp carousel slide" data-ride="carousel">
        <ul class="carousel-indicators pb-2">
            <li data-target="#homeSlide" data-slide-to="0" class="active"></li>
            <li data-target="#homeSlide" data-slide-to="1" class=""></li>
            <li data-target="#homeSlide" data-slide-to="2" class=""></li>
        </ul>
        <div class="carousel-inner">
			<div class="carousel-item" ng-class="{'active': $index===0}" ng-repeat="slide in slides">
				<img src="{{slide.image}}" alt="slide1" class="img-fluid w-100">
			</div>
			<!--
		   <div class="carousel-item active">
                <img src="img/banner1.jpg" class="img-fluid w-100" alt="slide1">
            </div>
            <div class="carousel-item">
                <img src="img/banner2.jpg" class="img-fluid w-100" alt="slide1">
            </div>
            <div class="carousel-item">
                <img src="img/banner1.jpg" class="img-fluid w-100" alt="slide1">
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#homeSlide" data-slide="prev">
            <span class="carousel-control-prev-icon"><i class="fas fa-angle-left"></i></span>
        </a>
        <a class="carousel-control-next" href="#homeSlide" data-slide="next">
            <span class="carousel-control-next-icon"><i class="fas fa-angle-right"></i></span>
        </a>
    </div>
</section>


<section class="sectionTwo py-5" id="about">
    <div class="container py-5 wow fadeInUpBig" data-wow-duration="1.5s">
		<div class="section-header text-center">
			<h3>What is Angular?</h3>
			<p>Develop Across All Platforms</p>
		</div>
        <div class="row">
			<div class="col-lg-12 text-center">
				<p>Angular is a platform that makes it easy to build applications with the web. Angular combines declarative templates, dependency injection, end to end tooling, and integrated best practices to solve development challenges. Angular empowers developers to build applications that live on the web, mobile, or the desktop.</p>
			</div>
		</div>
	</div>
</section>  

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


<section class="sectionProjects py-5" id="project" ng-controller="galleryController">
    <div class="container-fluid py-5">
		<div class="section-header text-center">
			<h3>Gallery</h3>
			<p>We are always with you to make your gallery.</p>
		</div>
		<div class="filterbar text-center">
			<div class="filterselect active" name="filter1" ng-class="{active: query=='all'}" ng-click="query = 'all'">All</div>
			<div class="filterselect" name="filter1" ng-class="{active: query=='filter1'}" ng-click="query = 'filter1'">Filter 1</div>
			<div class="filterselect" name="filter2" ng-class="{active: query=='filter2'}" ng-click="query = 'filter2'">Filter 2</div>
		</div>
        <div class="row text-center mt-4 imgBlock">
			<div class="col-md-6 col-lg-3 mb-4 mb-lg-0" ng-repeat="item in images | filter: query | orderBy: order" ng-class="{'query' : toggle }">
				<div class="project-sec">
					 <img class="galleryItems" src="{{item.source}}" alt="{{item.altText}}" title="{{item.altText}}">
					<div class="project-over">
						<div class="project-content d-flex justify-content-center align-items-center w-100">
							<h3>{{item.title}}</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>    

<section class="sectionFour py-5" id="contact">
    <div class="container-fluid p-0">
		<div class="section-header text-center">
			<h3>Contact us</h3>
			<p>We are always with you to make your project.</p>
		</div>
        <div class="row mt-5">
			<div class="col-md-12 col-lg-12 mb-4 mb-lg-0">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8149837.484772229!2d105.12225694390342!3d4.1389167068345145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3034d3975f6730af%3A0x745969328211cd8!2sMalaysia!5e0!3m2!1sen!2smy!4v1553046727669" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>       
 
<section class="sectionFive py-2">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="copyright-text">
					<p>&copy; Copyright - 2009 - 2018 <a href="#">Company Name</a>. All Rights Reserved. </p>
				</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="social-ico text-right d-flex justify-content-md-end">
					<a class="social-slide48 facebook48" href="#"></a>
					<a class="social-slide48 instagram48" href="#"></a>
					<a class="social-slide48 whatsapp48" href="#"></a>
				</div>
			</div>
		</div>
	</div>

</section> 
</div>
<?php include "footer.php"?>
