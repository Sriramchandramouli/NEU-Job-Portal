<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employer Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link rel="stylesheet" href="styles/bg.css">
<script> 
$(function(){
  $("#footer").load("styles/footer.html"); 
});
</script>
  <style>
body{
background-image: url("images/employerhome.jpg");
background-repeat: no-repeat;
background-size:100%;
font-family: Tahoma, Geneva, sans-serif;
}
.navset .navbar .navbar-nav {
    display: inline-block;
    float: none;
}

.navbar .navbar-collapse {
    text-align: center;
	font-size: 16px;
}
.buttonparm a {
		color:white;
		text-decoration:none;
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
</div>
</div>

<div class="item">
  
  <div class="container">
   <div class="carousel-caption">
   <p></p>
  <h1>Build Your Future!</h1> 
  <p>We have 420 job vacancies right now!</p> 
  <form class="form-inline">
  <div class = "buttonparm">
    <button type="button" class="btn btn-primary"><a href="postJob.php">Post Job</a></button>
    <button type="button" class="btn btn-success"><a href="viewResume.php">View Resume</a></button>
  </div>
  </form>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
  </div>
</div>

<div id="footer">
</div>

</body>

</html>
