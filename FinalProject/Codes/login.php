<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Login Page</title>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="js/bootstrap.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script> 
$(function(){
  $("#header").load("styles/jobseekerHeader.html"); 
  $("#footer").load("styles/footer.html"); 
});
</script>
	<script>
var app = angular.module('myApp', []);
app.controller('loginController', function($scope) {
   
});
</script>
	<style>
/* footer social icons */
ul.social-network {
	list-style: none;
	display: inline;
	margin-left:0 !important;
	padding: 0;
}
ul.social-network li {
	display: inline;
	margin: 0 5px;
}


/* footer social icons */

.social-network a.icoFacebook:hover {
	background-color:#3B5998;
}
.social-network a.icoTwitter:hover {
	background-color:#33ccff;
}
.social-network a.icoGoogle:hover {
	background-color:#BD3518;
}

.social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i{
	color:#fff;
}
a.socialIcon:hover, .socialHoverClass {
	color:#44BCDD;
}

.social-circle li a {
	display:inline-block;
	position:relative;
	margin:0 auto 0 auto;
	-moz-border-radius:50%;
	-webkit-border-radius:50%;
	border-radius:50%;
	text-align:center;
	width: 50px;
	height: 50px;
	font-size:20px;
}
.social-circle li i {
	margin:0;
	line-height:50px;
	text-align: center;
}

.social-circle li a:hover i, .triggeredHover {
	-moz-transform: rotate(360deg);
	-webkit-transform: rotate(360deg);
	-ms--transform: rotate(360deg);
	transform: rotate(360deg);
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-ms-transition: all 0.2s;
	transition: all 0.2s;
}
.social-circle i {
	color: #fff;
	-webkit-transition: all 0.8s;
	-moz-transition: all 0.8s;
	-o-transition: all 0.8s;
	-ms-transition: all 0.8s;
	transition: all 0.8s;
}

.col-md-12 a {
 background-color: #D3D3D3;   
}

.col-centered{
    float: none;
    margin: 0 auto;
}
	</style>
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
				<h3 class="dark-grey">Login Form</h3>
				</div>
				<form action="check_user-pass.php" method="POST" ng-app="myApp" ng-controller="loginController" name="myForm" novalidate>
				<div class="form-group col-lg-12">
					<label>Username or Email-ID</label>
					<input type="" name="uname" class="form-control" placeholder="Username or Email-ID" id="uname" value="" ng-model="uname" required>
				</div>
				
				<div class="form-group col-lg-12">
					<label>Password</label>
					<input type="password" name="pwd" class="form-control" placeholder="Password" id="pwd" value="" ng-model="pwd" required>
				</div>
				
				<div class="form-group col-lg-12" style="color:red">
				<?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
				
				</div>
				<?php unset($_SESSION['errMsg']); ?>
				<div class="form-group col-lg-12">
				<button type="submit" class="btn btn-primary" ng-disabled="myForm.$invalid" ng-click="submit()">SIGN IN</button>
				</div>	
				
				<div class="col-md-12">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        
                    </ul>				
				</div>
				</form>
			</div>
		</div>
	</section>
</div>
<div id="footer">
</div>
</body>
</html>