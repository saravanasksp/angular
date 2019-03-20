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
    <link href="css/style.css" rel="stylesheet">
	<style>

	</style>
	
  </head>

<body class="logreg-bg" id="formValid" ng-controller="mainController">
<div class="wrapper-fluid">
	<div class="container-fluid lgregfrom pt-3">
		<div class="page-body-wrapper">
			<div class="d-flex align-items-center w-100">
					<div class="max-wid mx-auto">
						<div class="auto-form-wrapper">
						<div class="text-center mb-4 img-logo">
							<h3><a class="text-dark" href="http://localhost/test/1">AngularJS</a></h3>
						</div>
						<form name="userForm" ng-submit="submitForm(userForm.$valid)" novalidate> 
							<div class="form-group" ng-class="{ 'has-error has-feedback' : submitted && userForm.name.$invalid}">
								<label class="control-label">Name</label>
								<input type="text" placeholder="Name" name="name" id="uName" class="form-control" ng-model="name" required>
								<p ng-show="submitted && userForm.name.$invalid" class="help-block">Name is required.</p>
							</div>
							<div class="form-group" ng-class="{'has-error has-feedback' : submitted && userForm.username.$invalid}">
								<label class="control-label">Username</label>
								<input type="text" placeholder="Username" name="username" id="usrName" class="form-control" ng-model="username" required>
								<p ng-show="submitted && userForm.username.$invalid" class="help-block">Username is required.</p>
							</div>
							<div class="form-group" ng-class="{'has-error has-feedback' : submitted && userForm.email.$invalid}">
								<label class="control-label">E-Mail</label>	
								<input type="email" placeholder="E-Mail" name="email" id="Email" class="form-control" ng-model="email" required>
								<p ng-show="submitted && userForm.email.$error.required" class="help-block">E-Mail is required.</p>
								<p ng-show="userForm.email.$error.email" class="help-block error">Not a valid email!</p>								
							</div>
							<div class="form-group" ng-class="{'has-error has-feedback' : submitted && userForm.password.$invalid}">
								<label class="control-label">Password</label>
								<input type="password" placeholder="Password" name="password" id="password" class="form-control" ng-model="password" ng-minlength="8" ng-maxlength="20" ng-pattern="/(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z])/" required>
								<p ng-show="submitted && userForm.password.$error.required" class="help-block">Password is required.</p>
								<p class="help-block" ng-show="submitted && !userForm.password.$error.required && (userForm.password.$error.minlength || userForm.password.$error.maxlength) && userForm.password.$dirty">Passwords must be between 8 and 20 characters.</p>
								<p class="help-block" ng-show="submitted && !userForm.password.$error.required && !userForm.password.$error.minlength && !userForm.password.$error.maxlength && userForm.password.$error.pattern && userForm.password.$dirty">Must contain one lower &amp; uppercase letter, (a number or a symbol.)</p>
							</div>
							<div class="text-center">
								<button type="submit" class="btn-enter">Submit</button>
							</div>
							<div class="form-group d-xs-block d-md-flex justify-content-between">
								<div class="custom-control custom-checkbox mb-xs-5">
									<input type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label text-small" for="customCheck1">Remember Me</label>
								</div>								
							</div>
						</form>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>	

   <script src="js/jquery-3.1.0.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/angular-1.1.5.min.js"></script>
   <script src="js/script.js"></script>
   <script>
	angular.bootstrap(document.getElementById("formValid"), ['formValidation']);
	
	
	
	</script>
</body>
</html>