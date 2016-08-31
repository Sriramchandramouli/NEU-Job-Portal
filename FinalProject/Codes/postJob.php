<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Post a Job</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="js/bootstrap.js"></script>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link rel="stylesheet" href="styles/bg.css">
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script> 
$(function(){
  $("#footer").load("styles/footer.html"); 
});
</script>
<script>
var app = angular.module('myApp', []);
app.controller('postJobController', function($scope) {
   
});
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
	<style>
.navset .navbar .navbar-nav {
    display: inline-block;
    float: none;
}

.navbar .navbar-collapse {
    text-align: center;
	font-size: 16px;
}
.banner
  {
   background-color:#DEDEDE;
   color:#000000;
   text-align:left;
   font-family:Arial, san-serif;
   font-size:32px;
   font-weight:bold;
   width:100%;
   max-height:1000px;
   display: table;
   overflow: hidden;
  }
  .banner p {
    top: 20px;
	text-align: center;
    position: relative;
}
.btn-xl {
    padding: 10px 28px;
    font-size: 22px;
}
.container-page {
	height:1150px;
}
.centred {
 margin: 0 auto;
}
</style>
</head>
<body>
<div class="navset">
<div class="text-center">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="employer.php">Employer Home Page</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-center">
        
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Employer
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li>
          <li><a href="postJob.php"><span class="text-middle">Post a Job</span></a>
                          </li>

                          <li><a href="viewResume.php"><span class="text-middle">View Resumes</span></a>
                          </li>
        </ul>
      </li>
	  </li>
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
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Job_Portal_final_Project/user_account.html"><span class="glyphicon glyphicon-user"></span> Welcome <?php if(!empty($_SESSION['username'])) { echo $_SESSION['username']; } ?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
  </div>
</nav>
<br><br>
<section class="content_area">
<div class="banner">
<p>Post a Job </p>
</div> <br><br>
<div class="container-page centred">	
<div class="col-md-12 col-centered">
<form action="jobPost.php" method="POST" ng-app="myApp" ng-controller="postJobController" name="myForm" novalidate>
	<div class="row">
		<div class="form-group col-md-3 col-md-offset-3 col-xs-12">
			<label>Your Email</label>
			<input type="" name="email" class="form-control" id="email" value="" ng-model="email" placeholder="Email" required ng-pattern="/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/">
		<span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
<span ng-show="myForm.email.$error.required">Email is required.</span>
</span> 
<span style = "color:red" ng-show = "myForm.email.$invalid">
					 <span ng-show="myForm.email.$error.pattern">Email pattern is incorrect</span>
						</span>
		</div>

		<div class="form-group col-md-3  col-xs-12">
			<label>Job Title</label>
			<input type="" name="job" class="form-control" id="job" placeholder="Title Of Job" value="" ng-model="job" required ng-pattern="/^[a-zA-Z\s]+$/">
		<span style="color:red" ng-show="myForm.job.$dirty && myForm.job.$invalid">
<span ng-show="myForm.job.$error.required">Job title is required.</span>
</span> 
<span style = "color:red" ng-show = "myForm.job.$invalid">
					 <span ng-show="myForm.job.$error.pattern">Job title pattern is incorrect</span>
						</span>
		</div>
	</div>
	<div class="row">
<div class="form-group col-md-3 col-md-offset-3 col-xs-12">
                <label>Location</label>
					<input type="" name="location" class="form-control" placeholder="Location" id="location" value="" ng-model="location" required ng-pattern="/^[a-zA-Z\s]+$/">
            <span style="color:red" ng-show="myForm.location.$dirty && myForm.location.$invalid">
<span ng-show="myForm.location.$error.required">Location is required.</span>
</span> 
<span style = "color:red" ng-show = "myForm.location.$invalid">
					 <span ng-show="myForm.location.$error.pattern">Location pattern is incorrect</span>
						</span>
			</div>

            <div class="form-group col-md-3  col-xs-12">
                <label>Job Type</label>
					<input type="" name="jobtype" class="form-control" placeholder="Type Of Job" id="jobtype" value="">
            </div>
			</div>
			<div class="row">
			<div class="form-group col-md-3 col-md-offset-3 col-xs-12">
                <label>Job Category</label>
					<input type="" name="category" class="form-control" placeholder="Job Category" id="category" value="" ng-model="category" required ng-pattern="/^[a-zA-Z\s]+$/">
            <span style="color:red" ng-show="myForm.category.$dirty && myForm.category.$invalid">
<span ng-show="myForm.category.$error.required">Job Category is required.</span>
</span> 
<span style = "color:red" ng-show = "myForm.category.$invalid">
					 <span ng-show="myForm.category.$error.pattern">Job Category pattern is incorrect</span>
						</span>
			</div>

            <div class="form-group col-md-3  col-xs-12">
                <label>Job Tags (Optional)</label>
					<input type="" name="jobtags" class="form-control" placeholder="Job Tags" id="jobtags" value="">
            </div>
			 </div>
			 <div class="row">
			<div class="form-group col-md-6 col-md-offset-3">
				<label>Description:</label>
				<textarea class="form-control" rows="5" name="description" placeholder="Description Of Job" id="description" ng-model="description" required></textarea>
        <span style="color:red" ng-show="myForm.description.$dirty && myForm.description.$invalid">
<span ng-show="myForm.description.$error.required">Description is required.</span>
</span>
		</div>
		</div>
		<div class="row">
		<div class="form-group col-md-3 col-md-offset-3 col-xs-12">
                <label>Application Email/URL</label>
					<input type="" name="appemail" class="form-control" placeholder="Application Email/URL" id="appemail" value="" ng-model="appemail" required>
            <span style="color:red" ng-show="myForm.appemail.$dirty && myForm.appemail.$invalid">
<span ng-show="myForm.appemail.$error.required">Application Email/URL is required.</span>
</span>
			</div>
			
            <div class="form-group col-md-3  col-xs-12">
                <label>Minimum Rate/h ($) (optional)</label>
					<input type="" name="minrate" class="form-control" placeholder="Minimum Rate Per Hour" id="minrate" value="">
            </div>
			</div>
			<div class="row">
			<div class="form-group col-md-3 col-md-offset-3 col-xs-12">
                <label>Maximum Rate/h ($) (optional)</label>
					<input type="" name="maxrate" class="form-control" placeholder="Maximum Rate Per Hour" id="maxrate" value="">
            </div>

            <div class="form-group col-md-3  col-xs-12">
                <label>Minimum Salary ($) (optional)</label>
					<input type="" name="minsal" class="form-control" placeholder="Minimum Salary" id="minsal" value="">
            </div>
			</div>
			<div class="row">
			<div class="form-group col-md-3 col-md-offset-3 col-xs-12">
                <label>Maximum Salary ($) (optional)</label>
					<input type="" name="maxsal" class="form-control" id="maxsal" placeholder="Maximum Salary" value="">
            </div>

           <div class="form-group col-md-3  col-xs-12">
                <label>Hours per week (optional)</label>
					<input type="" name="hours" class="form-control" placeholder="Hours Per Week" id="hours" value="">
            </div>
			</div>
			<div class="row">
			<div class="form-group col-md-6 col-md-offset-3">
			<h3 class="dark-grey col-lg-12">Company Details</h3>
			</div>
			</div>
			<div class="row">
			<div class="form-group col-md-3 col-md-offset-3 col-xs-12">
                <label>Company Name</label>
					<input type="" name="compname" class="form-control" placeholder="Company Name" id="compname" value="" ng-model="compname" required>
            <span style="color:red" ng-show="myForm.compname.$dirty && myForm.compname.$invalid">
<span ng-show="myForm.compname.$error.required">Company Name is required.</span>
</span>
			</div>

            <div class="form-group col-md-3  col-xs-12"> <!-- Date input -->
        <label>Date Posted</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
		</div>
			</div>
			<div class="row">
			<div class="form-group col-md-6 col-md-offset-3">
				<label>Description:</label>
				<textarea class="form-control" rows="5" name="description1" placeholder="Description Of Company" id="description1" ng-model="description1" required></textarea>
        <span style="color:red" ng-show="myForm.description1.$dirty && myForm.description1.$invalid">
<span ng-show="myForm.description1.$error.required">Description is required.</span>
</span>
		</div>
		</div>
			<div class="row">
            <div class="form-group col-md-3 col-md-offset-3 col-xs-12">
                <label>Website (optional)</label>
					<input type="" name="website" class="form-control" placeholder="Company Website" id="website" value="">
            </div>
		
			<div class="form-group col-md-3  col-xs-12">
				<label>H1B Visa Sponsor</label>
				<select class="form-control" name = "sponsor" id="sponsor" ng-model="sponsor" required>
				<option value="" disabled="disabled">Select Option</option>
				<option>Yes</option>
				<option>No</option>
				</select>
				<span style = "color:red" ng-show="myForm.sponsor.$error.required">Select an Option</span>
				</div>	
			</div>
			<div class="row">
			<div class="form-group col-md-2 col-md-offset-5 col-xs-12">
			<button type="submit" class="btn btn-primary center-block btn-xl" ng-disabled="myForm.$invalid" ng-click="submit()">Submit</button>
			</div>
			</div>
			</form>
				</div>
				</div>
</section>

<div id="footer">
</div>
</body>
</html>