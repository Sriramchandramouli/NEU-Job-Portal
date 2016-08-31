<?php
session_start();
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test1"; // Database name 
$tbl_name="applyjob"; // Table name
// Create connection
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password") or die(mysql_error());
//echo "Connected to MySQL<br />";
$dbconn = mysqli_select_db($conn, $db_name) or die(mysql_error());
//echo $dbconn;
//echo "Connected to Database<br />";

$sql = "select * from $tbl_name;";
$result = mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
$mobile = "857-256-1234";
if(isset($_GET['jid'])){
	$id = $_GET['jid'];
}
else{
	$id =0;
}


?>
<!DOCTYPE>
<html ng-app="app">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Upload Page</title>
<head>
	<title>Upload Page</title>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" href="css/normalize.css"> -->
  <link rel="stylesheet" href="css/style.css">
	<script type="js/bootstrap.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link rel="stylesheet" href="styles/bg.css">
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
	.list-group-item {
    height:auto;
    min-height:170px;
	}
	.list-group-item.active small {
    color:#fff;
	}
	.buttonparm a {
		color:white;
		text-decoration: none;
	}
	.buttonparm {
		margin-bottom: 5px;
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
<br/>
<br/>
<br/>
<br/>

<!-- body -->
<div class="container">
    <div class="row">
		<div class="well">
        <h1 class="text-center">View Submitted Applications</h1>
        <div class="list-group">
		<?php
		if($count>0){
			while($apply=mysqli_fetch_assoc($result)){
          echo "<div class='list-group-item'>";
                echo "<div class='col-md-6'>";
				echo "<h3 class='list-group-item-heading'>".$apply['fname']."&nbsp".$apply['lname']."</h3>";
					echo "<p class='list-group-item-text'> Job Id: ".$apply['job_id']."</p>";
                    echo "<p class='list-group-item-text'> Email: ".$apply['email']."</p>";
                    echo "<p class='list-group-item-text'> Mobile: ".$mobile."</p>";
					echo "<p class='list-group-item-text'> Application Status: ".$apply['jobstatus']."</p>";
                echo "</div>";
                echo "<div class='col-md-4'></div>";
                echo "<div class=col-md-2 text-center'>";
				
				echo "<div class='buttonparm'>"."<button type='button' class='btn btn-primary btn-block'>"."<a href=".$apply['resumePath'].">"."Download Resume"."</a>"."</button>"."</div>";
				echo "<div class='buttonparm'>"."<button type='button' class='btn btn-primary btn-block'>"."<a href=mailto:".$apply['email'].">"."Mail Applicant"."</a>"."</button>"."</div>";
				echo "<div class='buttonparm'>"."<button type='button' class='btn btn-danger btn-block' id=1 onclick='reject1(".$apply['postjob_id'].")'>Reject</button></div>";
				echo "<div class='buttonparm'>"."<button type='button' class='btn btn-success btn-block' id=2 onclick='accept1(".$apply['postjob_id'].")'>Accept</button></div>";
                echo "</div>";
            echo "</div>";
			}
		}
			?>
        </div>
        </div>
	</div>
</div>
<!---- end of body---->

<!--footer-->


<br/>
<br/><br/>



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
<!-----end of footer --->


</body>



<script type="text/javascript">
	function accept1(id1){
				var b = id1;
		window.location.href="viewResume.php?jid="+b;
		alert("Applicant has been Accepted");
		console.log("Accept---");
		<?php
			$sql2 = "update $tbl_name set jobstatus='Accepted' where postjob_id=$id;";
			$result2 = mysqli_query($conn, $sql2);
			//echo "<script type='text/javascript'>console.log('ACCEPTED!!');</script>";
		?>
		//window.location = 'viewResume.php';
	}
	</script>
	
	
	
	
	
	
	<script type="text/javascript">
	function reject1(id){
		var a = id;
		
		window.location.href="viewResume.php?jid="+a;
		alert("Applicant has been rejected");
		console.log("Reject---");
		<?php
			$sql1 = "update $tbl_name set jobstatus='Rejected' where postjob_id=$id;";
			$result1 = mysqli_query($conn, $sql1);
			//echo "<script type='text/javascript'>console.log('REJECTED!!');</script>";
			
		?>
		//window.location = 'viewResume.php';

	}
		</script>
	
	
	
	
	
	
</html>