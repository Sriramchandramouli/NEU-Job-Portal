<?php
session_start();
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test1"; // Database name 
$tbl_name="postjob"; // Table name


// Create connection
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Connect to server and select databse.
$dbconn = mysqli_select_db($conn, $db_name) or die(mysql_error());

$jobtitle = $_GET['jobTitle'];


// To protect MySQL injection (more detail about MySQL injection)
$jobtitle = mysqli_real_escape_string($conn, $jobtitle);

$sql="SELECT * FROM $tbl_name WHERE job_title LIKE '%$jobtitle%'";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Job Search Result</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<script type="js/bootstrap.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script> 
$(function(){
  $("#footer").load("styles/footer.html"); 
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
   background-size:cover;
   background-repeat:no-repeat;
   background-position:center center;
   color:#000000;
   text-align:left;
   font-family:Arial, san-serif;
   font-size:normal;
   width:100%;
   max-height:2000px;
   display: table;
   overflow: hidden;
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

.h-divider{
 margin-top:5px;
 margin-bottom:5px;
 height:1px;
 width:100%;
 border-top:1px solid gray;
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
 <br><br><br><br><br>
<section class="content_area">
<div class="banner">
 <div class ="result">
 
  <?php 
  if ($count>=1) {
  while($jobsearch=mysqli_fetch_assoc($result)) {
	  	 
		  echo "<div class='row'>"."<div class='col-md-6 col-md-offset-2 col-xs-12'>"."<h3>".$jobsearch['job_title']."</h3>"."<b>".$jobsearch['company_name']."&nbsp;&nbsp;|&nbsp;&nbsp;".$jobsearch['job_type']."&nbsp;&nbsp;|&nbsp;&nbsp;"."H1B Visa Sponsor - ".$jobsearch['sponsor']."</b>"."<br>".$jobsearch['description']."</div>"."<div class='col-md-3 col-sm-12'>"."<br>"."<br>"."<b>".$jobsearch['location']."</b>"."&nbsp;&nbsp;"."<i>"."posted on ".$jobsearch['date_posted']."</i>"."</div>"."</div>"."<br>"."<div class='row'>"."<div class='col-md-8 col-md-offset-2 col-xs-12'>"."<div class='buttonparm'>"."<button type='submit' class='btn btn-info' style='padding: 5px 30px;'><a href = 'applyJob.php?job_id=".$jobsearch['job_id']."' target='_blank'>Apply"."</a></button>"."</div>"."</div>"."</div>"."</div>"."<div class='row'>"."<div class='col-md-8 col-md-offset-2 col-xs-12'>"."<div class='h-divider'>"."</div>"."</div>"."</div>";

  }
  } else {
	  echo "<div class='row'>"."<div class='col-md-6 col-md-offset-3 col-xs-12'>"."<h3>"."Sorry, no results containing all your search terms were found for your search"."</h3>"."Some suggestions:"."<br>"."Double check the spelling of your terms."."</div>"."</div>";
  }
  ?>
  </div>
  </div>
			</section> <br><br><br><br><br><br>
			<div class="text-center">
<nav class="navbar navbar-inverse navbar-fixed-bottom" style="padding-top: 10px;padding-bottom: 10px">
      <div class="col-lg-12">
          <ul class="nav navbar-nav navbar-center">
              <li><a href="#">© 2016 Northeastern Online Job Portal</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Job_Portal_final_Project/sitemap.html">Sitemap</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Help
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>
                <li><a href="Job_Portal_final_Project/faq.html"><span class="text-middle">FAQ</span></a>
                                </li>

                                <li><a href="Job_Portal_final_Project/terms.html"><span class="text-middle">Terms & Conditions</span></a>
                                </li>

                                <li><a href="Job_Portal_final_Project/privacypolicy.html"><span class="text-middle"></span>Privacy Statement</a>
                                </li>
              </ul>
            </li>
            <li><a href="Job_Portal_final_Project/feedback.html">Rate Us</a></li>
            <li><a href="customer_chat">Chat</a></li>
          </ul>
      </div>
</nav>
</div>
</body>
</html>