<?php
session_start();
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test1"; // Database name 
$tbl_name="registration"; // Table name


// Create connection
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password") or die(mysql_error());
//echo "Connected to MySQL<br />";
$dbconn = mysqli_select_db($conn, $db_name) or die(mysql_error());


$username=$_POST['uname']; 
$password=$_POST['pwd'];


// To protect MySQL injection (more detail about MySQL injection)
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$sql="SELECT member_type FROM $tbl_name WHERE (user_name='$username' OR email_id='$username') and password_1='$password'";
$result=mysqli_query($conn, $sql);
$membertype = mysqli_fetch_assoc($result);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count>=1) {
    $_SESSION['username']=$username;
	if($membertype['member_type'] == "Employer") {
	   header("Location: employer.php"); 
	} else if ($membertype['member_type'] == "Jobseeker") {
	header("Location: jobSeeker.php");
}
} else {
    $_SESSION['errMsg'] = "Please enter a valid UserName/Password";
	header("Location: login.php");
}

ob_end_flush();
?>