<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Upload Resume</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .navset .navbar .navbar-nav {
    display: inline-block;
    float: none;
}

.navbar .navbar-collapse {
    text-align: center;
	font-size: 16px;
}
    .buttonrow {
      padding-top: 10px;
      padding-bottom: 0px;
  }
  body{
background: rgba(238,244,247,1);
background: -moz-linear-gradient(left, rgba(238,244,247,1) 0%, rgba(71,75,77,1) 94%, rgba(71,75,77,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(238,244,247,1)), color-stop(94%, rgba(71,75,77,1)), color-stop(100%, rgba(71,75,77,1)));
background: -webkit-linear-gradient(left, rgba(238,244,247,1) 0%, rgba(71,75,77,1) 94%, rgba(71,75,77,1) 100%);
background: -o-linear-gradient(left, rgba(238,244,247,1) 0%, rgba(71,75,77,1) 94%, rgba(71,75,77,1) 100%);
background: -ms-linear-gradient(left, rgba(238,244,247,1) 0%, rgba(71,75,77,1) 94%, rgba(71,75,77,1) 100%);
background: linear-gradient(to right, rgba(238,244,247,1) 0%, rgba(71,75,77,1) 94%, rgba(71,75,77,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eef4f7', endColorstr='#474b4d', GradientType=1 );
}
  </style>
  
  </head>

<body>



<!--header-->
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>




<div class="container-fluid">
  <form class="form-horizontal" role="form" method="post" action="upload.php" enctype="multipart/form-data">
	  <div class="panel col-sm-offset-4 col-sm-4">
	  	<div class="panel-heading" align="center"><h3><span class="glyphicon glyphicon-send"></span>&nbsp&nbspGeneric Resume Upload</h3></div>
	    	<div class="form-group" >
	    		<div class="buttonrow" align="center">
				<input type="hidden" name="fname" value="">
				<input type="hidden" name="lname" value="">
				<input type="hidden" name="email" value="">
				<input type="hidden" name="job_id" value="">
	      			<label class="btn btn-info btn-file"><span class="glyphicon glyphicon-folder-open"></span>&nbsp&nbspChoose File...<input type="file" name="fileToUpload" id="fileToUpload" style="display: none;"></label>
	          		<label class=" col-sm-offset-2"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-open-file"></span>&nbsp&nbspUpload&nbsp</button></label>
	    		</div>
	    	</div>
	    </div>
  </form>
</div>



<!--footer-->






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