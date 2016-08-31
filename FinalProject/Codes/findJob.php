<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Find a Job</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI_DaubDzVzYzVoVJ83Pc_KJAMd0HeNlQ&libraries=geometry,places">
</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAI_DaubDzVzYzVoVJ83Pc_KJAMd0HeNlQ&callback=initMap"
type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<script type="js/bootstrap.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script> 
$(function(){
  $("#footer").load("styles/footer.html"); 
});
</script>
<script>
var app = angular.module('myApp', []);
app.controller('findJobController', function($scope) {
   
});
</script>
<script>
            function initMap() {
                var input = document.getElementById('location');
                var autocomplete = new google.maps.places.Autocomplete(input);
            }
  
            google.maps.event.addDomListener(window, 'load', init);
        </script>
<script>
$(document).ready(function(){  
      $('#keywords').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#keywordsList').fadeIn();  
                          $('#keywordsList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#keywords').val($(this).text());  
           $('#keywordsList').fadeOut();  
      });  
 });  
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

.navbar {
    margin-bottom: 0;
}
.banner
  {
   margin-top: 0;
   background-image:url('../images/findjob.jpg');
   background-size:cover;
   background-repeat:no-repeat;
   background-position:center center;
   color:#ffffff;
   text-align:left;
   font-family:Arial, san-serif;
   font-size:32px;
   font-weight:bold;
   width:100%;
   height:400px;
   display: table;
   overflow: hidden;
  }
  .banner p {
    left: 300px;
    top: 80px;
    position: relative;
}
banner ul{  
                background-color:#eee;  
                cursor:pointer;  
           }  
           banner li{  
                padding:12px;  
           }  
.subtext {
    left: 300px;
    top: 80px;
	font-size:24px;
	font-weight:normal;
    position: relative;
}

	.form-group {
	left: 280px;
    top: 100px;
    position: relative;
	}
	.category
  {
   
   font-family:Arial, san-serif;
   font-size:25px;
   font-weight:normal;
   max-width:1200px;
   margin:0 auto;
   height:400px;
   display: table;
   overflow: hidden;
  }
  .category p {
    padding-top: 20px;
	padding-bottom: 10px;
    position: relative;
}
  table, td, th {
    border: 1px solid #ddd;
    text-align: left;
	text-decoration: none;
}

table {
    border-collapse: collapse;
    width: 750px;
	table-layout:fixed;
}

th, td {
	font-size:15px;
   font-weight:normal;
    padding: 30px;
	text-decoration: none;
}
table a{
	text-decoration: none;
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
      <a class="navbar-brand" href="jobSeeker.php">Job Seeker Home Page</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-center">
      <li><a href="findJob.php">Find a Job</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Resume Services
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li>
          <li><a href="uploadResume.php"><span class="text-middle">Upload Resume</span></a>
                          </li>
        </ul>
      </li>
	  </li>
	   <li><a href="applicationStatus.php">View Application</a></li>
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
</div>
</div>
<br>
<section class="content_area">
				<div class="banner">
				<form action="searchJob.php" method="POST" ng-app="myApp" ng-controller="findJobController" name="myForm" novalidate>
				<p>Find a Job</p>
				<div class="subtext">
				Your Career Starts here
				</div>
				<div class="form-group col-lg-3">
					<input type="" name="keywords" class="form-control" id="keywords" value="" placeholder="Job Title or Keywords" onkeydown="searchFunction();" ng-model="keywords" required>
				<span style="color:red;font-size:15px;" ng-show="myForm.keywords.$dirty && myForm.keywords.$invalid">
					<span ng-show="myForm.keywords.$error.required">Keywords is required.</span>
				</span>
				<div id="keywordsList" style="font-size:15px;">
				</div>  
				</div>
				<div class="form-group col-lg-3">
					<input type="" name="location" class="form-control" id="location" value="">
				</div>
				<div class="form-group col-lg-5">
				<button type="submit" class="btn btn-info" ng-disabled="myForm.$invalid" ng-click="submit()>
      <span class="glyphicon glyphicon-search"></span> Search
    </button>
	</div>
			</form>
				</div>
				
				<div class="category">
				<p>Popular Categories</p>
				<table class="SectionTable">
  <tr>
    <td><center><a href='searchResult.php?jobTitle=Software Engineer'><span> <i class="material-icons">computer</i></span></center></a><center>Software</center></td>
    <td><center><a href='searchResult.php?jobTitle=Electrical Engineer'><span class="glyphicon glyphicon-lamp" style="font-size:24px"></span></center></a><center>Electrical</center></td>
    <td><center><a href='searchResult.php?jobTitle=Mechanical Engineer'><span class="glyphicon glyphicon-wrench" style="font-size:24px"></span></center></a><center>Mechanical</center></td>
	<td><center><a href='searchResult.php?jobTitle=Engineering Management'><span class="glyphicon glyphicon-briefcase" style="font-size:24px"></span></center></a><center>Management</center></td>
  </tr>
  <tr>
    <td><center><a href='searchResult.php?jobTitle=Data Analyst'><span class="glyphicon glyphicon-save-file" style="font-size:24px"></span></center></a><center>DataEngineer</center></td>
    <td><center><a href='searchResult.php?jobTitle=Business Analyst'><span> <i class="fa fa-users" style="font-size:24px"></i></span></center></a><center>Business</center></td>
    <td><center><a href='searchResult.php?jobTitle=Telecommunication Engineer'><span> <i class="material-icons" style="font-size:24px">rss_feed</i></span></center></a><center>Telecommunication</center></td>
	<td><center><a href='searchResult.php?jobTitle=Testing Engineer'><span> <i class="material-icons" style="font-size:24px">keyboard_hide</i></span></center></a><center>Testing</center></td>
  </tr>
</table>
				</div>
			</section>
			<div id="footer">
</div>
</body>
</html>