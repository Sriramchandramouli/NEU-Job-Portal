<?php
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

$sql = "select job_title as title, jobstatus from $tbl_name aj left join postjob pj on pj.job_id=aj.job_id ;";
$result = mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
?>
<!DOCTYPE>
<html ng-app="app">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Application Status</title>
<head>
	<title>Application Status</title>
	
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
  $("#header").load("styles/jobseekerHeader.html"); 
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
<div id="header">
</div>

<br/>
<br/>
<br/>
<br/>

<!-- body -->

<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">View Application Status</h1>
	</div>
	<br>
	<ul class="list-group col-sm-6 col-md-offset-3" >
			
			<li class="list-group-item disabled">
			<span class="pull-right"><strong>
				Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span>
			<strong>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job Title</strong>
			</li>
			
	<?php
		if($count>0){
			while($apply=mysqli_fetch_assoc($result)){
				echo "<li class='list-group-item'><span class='pull-right'>";
				echo $apply['jobstatus'];
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo $apply['title'];
				//echo $apply['job_id'];
				//echo "Software Developer";
				echo "</li>";
			}
		}
	?>
	</ul>
</div>

<!---- end of body---->

<!--footer-->

<br/>
<br/><br/>

<div id="footer">
</div>
<!-----end of footer --->
</body>	
</html>