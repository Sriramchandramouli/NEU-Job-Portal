<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="js/bootstrap.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script> 
$(function(){
  $("#footer").load("styles/footer.html"); 
});
</script>
<script>
var app = angular.module('myApp', []);
app.controller('signupController', function($scope) {
   
});
app.directive('pwCheck', [function () {
    return {
      require: 'ngModel',
      link: function (scope, elem, attrs, ctrl) {
        var firstPassword = '#' + attrs.pwCheck;
        elem.add(firstPassword).on('keyup', function () {
          scope.$apply(function () {
            var v = elem.val()===$(firstPassword).val();
            ctrl.$setValidity('pwmatch', v);
          });
        });
      }
    }
  }]);
</script>
</head>
<body>

<div class="text-center">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.html">Online Job Portal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-center">
      <li><a href="findJob.php">Find a Job</a></li>
      <li><a href="Job_Portal_final_Project/index.html">Blog</a></li>
	  <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Learn About Us
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>
                <li><a href="Job_Portal_final_Project/aboutus.html"><span class="text-middle">About Us</span></a>
                                </li>

                                <li><a href="Job_Portal_final_Project/contactus/contactus.html"><span class="text-middle">Contact Us</span></a>
                                </li>
              </ul>
            </li>
			</li>
      <li><a href="Job_Portal_final_Project/user_account.html">Settings</a></li>


    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signupForm.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
  </div>
</nav>
</div> <br><br><br>
<div class="container-fluid">
<section class="container">
<div class="container-page">	
<div class="col-md-6 col-md-offset-3">
<div class="form-group col-lg-12">
<h3 class="dark-grey">Registration Form</h3> 
</div>
<form action="registrationForm.php" method="POST" ng-app="myApp" ng-controller="signupController" name="myForm" novalidate>
<div class="form-group col-lg-12">
					<label>Username</label>
					<input type="" name="uname" class="form-control" id="uname" value="" ng-model="uname" required>  
					<span style="color:red" ng-show="myForm.uname.$dirty && myForm.uname.$invalid">
<span ng-show="myForm.uname.$error.required">User Name is required.</span>
</span> 
				</div>
				<div class="form-group col-lg-12" style="color:red">
				<?php if(!empty($_SESSION['userMsg'])) { echo $_SESSION['userMsg']; } ?>
				
				</div>
				<?php unset($_SESSION['userMsg']); ?>
				<div class="form-group col-lg-12">
					<label>Email Address</label>
					<input type="" name="email" class="form-control" id="email" value="" ng-model="email" required ng-pattern="/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/">  
					<span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
<span ng-show="myForm.email.$error.required">Email is required.</span>
</span> 
<span style = "color:red" ng-show = "myForm.email.$invalid">
					 <span ng-show="myForm.email.$error.pattern">Email pattern is incorrect</span>
						</span>
				</div>
				<div class="form-group col-lg-12" style="color:red">
				<?php if(!empty($_SESSION['emailMsg'])) { echo $_SESSION['emailMsg']; } ?>
				
				</div>
				<?php unset($_SESSION['emailMsg']); ?>
				<div class="form-group col-lg-12">
					<label>Password</label>
					<input type="password" name="pwd" class="form-control" id="pwd" value="" ng-model="pwd" required ng-pattern="/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/">
					<span style="color:red" ng-show="myForm.pwd.$dirty && myForm.pwd.$invalid">
<span ng-show="myForm.pwd.$error.required">Password is required.</span>
</span> 
<span style = "color:red" ng-show = "myForm.pwd.$invalid">
					 <span ng-show="myForm.pwd.$error.pattern">Password pattern is incorrect. Should contain uppercase, lowercase, special characters and numbers</span>
						</span>
				</div>
				<div class="form-group col-lg-12">
					<label>Confirm Password</label>
					<input type="password" name="password1" class="form-control" id="password1" value="" ng-model="password1" required pw-check="pwd">
						<span style = "color:red" class="msg-error" ng-show="myForm.password1.$error.pwmatch">Passwords don't match.</span>
					</div>	
				<div class="form-group col-lg-12">
					<label>Phone Number</label>
					<input type="" name="phone" class="form-control" id="phone" value="" ng-model="phone" required ng-pattern="/^[0-9]+$/">  
					<span style="color:red" ng-show="myForm.phone.$dirty && myForm.phone.$invalid">
<span ng-show="myForm.phone.$error.required">Phone field is required.</span>
</span> 
<span style = "color:red" ng-show = "myForm.phone.$invalid">
					 <span
                        ng-show="myForm.phone.$error.pattern">Phone pattern is incorrect</span>
						</span>
				</div>
				<div class="form-group col-lg-12" style="color:red">
				<?php if(!empty($_SESSION['phoneMsg'])) { echo $_SESSION['phoneMsg']; } ?>
				
				</div>
				<?php unset($_SESSION['phoneMsg']); ?>
				<div class="form-group col-lg-12">
				<label for="sel1">Member Type (select one):</label>
				<select class="form-control" name = "memberType" id="sel1" ng-model="memberType" required>
				<option value="" disabled="disabled">Select a Type</option>
				<option>Employer</option>
				<option>Jobseeker</option>
				</select>
				<span style = "color:red" ng-show="myForm.memberType.$error.required">Select Member Type</span>
				</div>
				<div class="form-group col-lg-12">
				<div class="g-recaptcha" data-sitekey="6Lf63icTAAAAABiRGK0iKGpBha4N-HsPLGpbyWJW"></div>
				</div>
				<div class="form-group col-lg-12">
				<label><input type="checkbox" value="" ng-model="item.selected" ng-required="true"> I have understood & accept the <a href="Job_Portal_final_Project/terms.html"><font color="red">Terms and condition</font></a> of this website. </label>
				</div>
				<div class="form-group col-lg-12">
				<button type="submit" class="btn btn-success" ng-disabled="myForm.$invalid" ng-click="submit()">Register</button>
				</div>	
</form>
</div>
</div>
</section>
</div><br><br><br><br>
<div id="footer">
</div>
</body>
</html>

