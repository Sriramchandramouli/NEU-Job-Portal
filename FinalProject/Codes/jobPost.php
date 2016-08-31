<?php
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
echo "Connected successfully";
// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password") or die(mysql_error());
//echo "Connected to MySQL<br />";
$dbconn = mysqli_select_db($conn, $db_name) or die(mysql_error());
echo $dbconn;
echo "Connected to Database<br />";
// Check $username and $password 
/*
if(empty($_POST['username']))
{
    echo "UserName/Password is empty!";
    return false;
}
if(empty($_POST['password']))
{
    echo "Password is empty!";
    return false;
}
*/

// Define $username and $password 
$emailid=$_POST['email']; 
$jobtitle=$_POST['job'];
$location=$_POST['location'];
$jobtype=$_POST['jobtype'];
$category=$_POST['category'];
$jobtags=$_POST['jobtags']; 
$description=$_POST['description'];
$applicationmail=$_POST['appemail'];
$minimumrate=$_POST['minrate'];
$maximumrate=$_POST['maxrate'];
$minimumsal=$_POST['minsal'];
$maximumsal=$_POST['maxsal']; 
$hours=$_POST['hours'];
$companyname=$_POST['compname'];
$date_posted=$_POST['date'];
$description1=$_POST['description1'];
$website=$_POST['website']; 
$sponsorship=$_POST['sponsor'];

// To protect MySQL injection (more detail about MySQL injection)
//$username = stripslashes($username);
//$password = stripslashes($password);
$emailid = mysqli_real_escape_string($conn, $emailid);
$jobtitle = mysqli_real_escape_string($conn, $jobtitle);
$location = mysqli_real_escape_string($conn, $location);
$jobtype = mysqli_real_escape_string($conn, $jobtype);
$category = mysqli_real_escape_string($conn, $category);
$jobtags = mysqli_real_escape_string($conn, $jobtags);
$description = mysqli_real_escape_string($conn, $description);
$applicationmail = mysqli_real_escape_string($conn, $applicationmail);
$minimumrate = mysqli_real_escape_string($conn, $minimumrate);
$maximumrate = mysqli_real_escape_string($conn, $maximumrate);
$minimumsal = mysqli_real_escape_string($conn, $minimumsal);
$maximumsal = mysqli_real_escape_string($conn, $maximumsal);
$hours = mysqli_real_escape_string($conn, $hours);
$companyname = mysqli_real_escape_string($conn, $companyname);
$date_posted = mysqli_real_escape_string($conn, $date_posted);
$description1 = mysqli_real_escape_string($conn, $description1);
$website = mysqli_real_escape_string($conn, $website);
$sponsorship = mysqli_real_escape_string($conn, $sponsorship);

$sql="INSERT INTO postjob (email_id, job_title, location, job_type, job_category,job_tags,description,email_url,min_rate,max_rate,min_sal,max_sal,hours_pw,company_name,date_posted,description1,website,sponsor)
VALUES ('$emailid', '$jobtitle', '$location', '$jobtype', '$category', '$jobtags', '$description', '$applicationmail', '$minimumrate', '$maximumrate', '$minimumsal', '$maximumsal', '$hours', '$companyname', '$date_posted', '$description1', '$website', '$sponsorship');";
$result=mysqli_query($conn, $sql);

$sql1="SELECT * FROM jobtitle WHERE job_title = '%$jobtitle%'";
$result1=mysqli_query($conn, $sql1);
$count=mysqli_num_rows($result1);

if ($count==0) {
	$sql2="INSERT INTO jobtitle (job_title)
VALUES ('$jobtitle');";
$result2=mysqli_query($conn, $sql2);
}
header("Location: employer.php"); 

$conn->close();
?>