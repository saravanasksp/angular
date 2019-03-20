<?php include "header.php"?>



<section class="sectionThree colrpicker py-5">
    <div class="container py-5">
		<div class="section-header text-center">
			<h3>Bootstrap Colorpicker</h3>
			<p>No jQuery dependendencies, just an AngularJS directive based on the bootstrap-colorpicker jQuery library.</p>
		</div>
        <div class="row mt-4">
			<div class="col-md-12 pb-4 pb-md-0">
				 <div id="mycolorpicker" ng-controller="colormainCtrl">					
					<div class="jumbotron text-center">
						<a class="btn btn-lg btn-primary" href="https://github.com/buberdds/angular-bootstrap-colorpicker" target="_blank" role="button">View on Github </a>						
					</div>
					<div class="card mb-3">
						<div class="card-header">hex: {{ hexPicker.color }}</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<p>
										<button class="btn btn-primary" ng-click="resetColor()">Update Model</button>
									</p>
									<input colorpicker class="form-control" ng-model="hexPicker.color" type="text" style="color:{{ hexPicker.color }}"/>
								</div>
								<div class="col-md-6">
									<pre>&lt;input colorpicker ng-model="hexPicker.color" type="text"&gt;</pre>
								</div>
							</div>
						</div>
					</div>
					<div class="card mb-3">
						<div class="card-header">rgb: {{ rgbPicker.color }}</div>
						<div class="card-body">
							<div class='row'>
								<div class="col-md-6">
									<p>
										<button class="btn btn-primary" ng-click="resetRBGColor()">Update Model</button>
									</p>
									<input colorpicker="rgb" class="form-control" ng-model="rgbPicker.color" type="text" style="background:{{ rgbPicker.color }}"/>
								</div>
								<div class="col-md-6">
									<pre>&lt;input colorpicker="rgb" ng-model="rgbPicker.color" type="text"&gt;</pre>
								</div>
							</div>
						</div>
					</div>
					<div class="card mb-3">
						<div class="card-header">rgba: {{ rgbaPicker.color }}</div>
						<div class="card-body">
							<div class='row'>
								<div class="col-md-6">
									<p>
										<button class="btn btn-primary" ng-click="resetRBGAColor()">Update Model</button>
									</p>
									<input colorpicker="rgba" colorpicker-position="right" class="form-control" ng-model="rgbaPicker.color" type="text" style="background:{{ rgbaPicker.color }}"/>
								</div>
								<div class="col-md-6">
									<pre>&lt;input colorpicker="rgba" colorpicker-position="right" ng-model="rgbaPicker.color" type="text"&gt;</pre>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header">non input element model value: {{ nonInput.color }}</div>
						<div class="card-body">
							<div class='row'>
								<div class="col-md-6">
									<p>
										<button class="btn btn-primary" ng-click="resetNonInputColor()">Update Model</button>
									</p>
									<button colorpicker type="button" colorpicker-position="top" class="btn btn-success" ng-model="nonInput.color">Change color</button>
								</div>
								<div class="col-md-6">
									<pre>&lt;button colorpicker type="button" colorpicker-position="top" ng-model="nonInput.color"&gt;Change Color&lt;/button&gt;</pre>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>



<?php include "footer.php"?>
