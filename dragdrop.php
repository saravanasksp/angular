<?php include "header.php"?>



<section class="py-5">
    <div class="container py-5">
		<div class="section-header text-center">
			<h3>Angular Drag &amp; Drop</h3>
			<p>Just an AngularJS directive drap and drop elements</p>
		</div>
        <div class="row mt-4">
			<div class="col-md-12 pb-4 pb-md-0">
				<div id="dragdrop" ng-controller="ddController">
					<div wg-drag-item-moved="moveItem" wg-drag-container>
						<div ng-repeat="item in items" ng-click="itemClick(item)" wg-drag-disabled="{{item.disabled}}" class="myItem" ng-class="{disabled: item.disabled}" wg-drag-item>{{item.title}}</div>
					</div>
					<div class='logContainer'>
						<div ng-repeat="logItem in logItems">{{logItem.message}}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php include "footer.php"?>
