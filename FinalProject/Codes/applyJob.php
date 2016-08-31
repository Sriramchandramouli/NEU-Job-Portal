<?php session_start(); 
$job_id = $_GET['job_id'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Job Search Result</title>
<script type='text/javascript'
  src='http://code.jquery.com/jquery-git2.js'></script>
<script type='text/javascript'
  src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.1.0/bootstrap.min.js"></script>
<script type='text/javascript'
  src="http://eternicode.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<script type="js/bootstrap.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js" data-require="angular.js@1.0.x" data-semver="1.0.8"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="app.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link rel="stylesheet" href="styles/bg.css">
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
<style type='text/css'>
@import url('http://getbootstrap.com/dist/css/bootstrap.css');
</style>
<script>
function CopyMe(oFileInput, sTargetID) {
    var arrTemp = oFileInput.value.split('\\');
    document.getElementById(sTargetID).value = arrTemp[arrTemp.length - 1];
}
</script>
<style>
	#header{
		background-color: #000000;
	}
	.navset .navbar .navbar-nav {
    display: inline-block;
    float: none;
}
}

.navbar .navbar-collapse {
    text-align: center;
	font-size: 16px;
}
	</style>
</head>
<body>
<div id="header">
</div>
 <br><br><br><br><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title" align="center">Your Contact Information</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" action="upload.php" method="post" enctype="multipart/form-data" ng-app="myApp" ng-controller="loginController" name="myForm" novalidate>
              <div class="form-group">
                <label for="fname" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                   <input type="first name" class="form-control" id="fname" name="fname" placeholder="Enter first name" ng-model="fname" required ng-pattern="/^[a-zA-Z\s]+$/">
                <span style="color:red" ng-show="myForm.fname.$dirty && myForm.fname.$invalid">
<span ng-show="myForm.fname.$error.required">First Name is required.</span>
</span> 
<span style = "color:red" ng-show = "myForm.fname.$invalid">
					 <span ng-show="myForm.fname.$error.pattern">First Name pattern is incorrect</span>
						</span>
				</div>
              </div>
              <div class="form-group">
                <label for="lname" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                  <input type="last name" class="form-control" id="lname" name="lname" placeholder="Enter last name" ng-model="lname" required ng-pattern="/^[a-zA-Z\s]+$/">
					<span style="color:red" ng-show="myForm.lname.$dirty && myForm.lname.$invalid">
<span ng-show="myForm.lname.$error.required">Last Name is required.</span>
</span> 
<span style = "color:red" ng-show = "myForm.lname.$invalid">
					 <span ng-show="myForm.lname.$error.pattern">Last Name pattern is incorrect</span>
						</span>
				</div>
              </div>
              <div class="form-group">
                <label for="lname" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" ng-model="email" required ng-pattern="/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/">
                <span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
<span ng-show="myForm.email.$error.required">Email is required.</span>
</span> 
<span style = "color:red" ng-show = "myForm.email.$invalid">
					 <span ng-show="myForm.email.$error.pattern">Email pattern is incorrect</span>
						</span>
				</div>
              </div><br>
              <div class="form-group">
                <label for="lname" class="col-sm-3 control-label">Your Resume</label>
				<input type="hidden" name="job_id" id="job_id" value='<?php echo $job_id ?>'>
                <div class="col-sm-9">
                  <label class="btn btn-info btn-file">
					Upload Resume<input type="file" ng-model="resume" name="fileToUpload" id="fileToUpload" style="display: none;" onchange="CopyMe(this, 'txtFileName');">
					</label> 
                </div>
              </div>
			  
			  <div class="form-group">
                <label for="filepath" class="col-sm-3 control-label">File Name</label>
                <div class="col-sm-9">
                  <input type="File Name" class="form-control" id="txtFileName" name="txtFileName" readonly="readonly" ng-model="txtFileName">
					<span style="color:red" ng-show="myForm.txtFileName.$dirty && myForm.txtFileName.$invalid">
<span ng-show="myForm.txtFileName.$error.required">Choose a File to Upload</span>
</span>
				</div>
              </div>
			  
			  
			  
			  <div>
				
				</div>
			  
			  <br>
              <div class="form-group" align="center">
				<div class="col-sm-10 control-label">
                <div class="col-sm-9">
                  <button type="submit" class="btn btn-success" name="submit" value="Send Application" ng-disabled="myForm.$invalid" ng-click="submit()">Send Application</button>
                </div>
				</div>
              </div>
			  </form>
			  </div>
                </div>
              </div>
			  </div>
			  </div>
			  
			  <div id="footer">
			</div>
			 </body>
			 </html>