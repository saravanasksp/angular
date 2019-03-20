<?php include "header.php"?>



<section class="py-5">
    <div class="container py-5">
		<div class="section-header text-center">
			<h3>Form Addon</h3>
			<p>Just an AngularJS directive bootstrap multiple form addon.</p>
		</div>
        <div class="row mt-4">
			<div class="col-md-12 pb-4 pb-md-0">
				<div id="csreaddplus">
					<div ng-controller="ContactfCtlr">
						<form role="form" class="well">
							<div class="form-group">
								<label for="name"> Name: </label>
								<input type="text" id="name" class="form-control" placeholder="Enter Name " ng-model="newcontact.name">
							</div>
							<div class="form-group">
								<label for="email"> Email: </label>
								<input type="email" id="email" class="form-control" placeholder="Enter Email " ng-model="newcontact.email">
							</div>
							<div class="form-group">
								<label for="phone"> Phone: </label>
								<input type="text" id="phone" class="form-control" placeholder="Enter Phone " ng-model="newcontact.phone">
							</div>
							
							<input type="hidden" ng-model="newcontact.id">
							<input type="button" class="btn btn-primary" ng-click="saveContact()" class="btn btn-primary" value="Submit">
						</form>

						<table class="table table-striped table-bordered table-hover mt-4">
							<thead class="thead-light">
								<tr class="info">
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr ng-repeat="contact in contacts">
									<td>{{ contact.name }}</td>
									<td>{{ contact.email }}</td>
									<td>{{ contact.phone }}</td>
									<td>
										<a href="#" ng-click="edit(contact.id)" role="button" class="btn btn-info">edit</a> &nbsp;
										<a href="#" ng-click="delete(contact.id)" role="button" class="btn btn-danger">delete</a>
									</td>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php include "footer.php"?>
