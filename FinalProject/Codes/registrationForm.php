<?php
session_start();
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test1"; // Database name 
$tbl_name="registration"; // Table name

if(isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
		
		var_dump($_POST);
		$secret = "6Lf63icTAAAAAAcn2bjVTMDxa4FUnzjBso6nC5lZ";
		$ip = $_SERVER['REMOTE_ADDR'];
		$captcha = $_POST['g-recaptcha-response'];
		$rsp = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&captcha=$captcha&remoteip$ip";
		var_dump($rsp);
		//$arr = json_decode($rsp,TRUE);
		
	}

// Create connection
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password") or die(mysql_error());
$dbconn = mysqli_select_db($conn, $db_name) or die(mysql_error());

// Define $username and $password 
$username=$_POST['uname']; 
$emailid=$_POST['email'];
$password1=$_POST['pwd'];
$password2=$_POST['password1'];
$phonenum=$_POST['phone'];
$member_type=$_POST['memberType'];

// To protect MySQL injection (more detail about MySQL injection)
$username = mysqli_real_escape_string($conn, $username);
$emailid = mysqli_real_escape_string($conn, $emailid);
$password1 = mysqli_real_escape_string($conn, $password1);
$password2 = mysqli_real_escape_string($conn, $password2);
$phonenum = mysqli_real_escape_string($conn, $phonenum);
$member_type = mysqli_real_escape_string($conn, $member_type);

$checksql1="SELECT * FROM $tbl_name WHERE user_name='$username'";
$result1=mysqli_query($conn, $checksql1);

$checksql2="SELECT * FROM $tbl_name WHERE email_id='$emailid'";
$result2=mysqli_query($conn, $checksql2);

$checksql3="SELECT * FROM $tbl_name WHERE phone_number='$phonenum'";
$result3=mysqli_query($conn, $checksql3);

$count1=mysqli_num_rows($result1);
$count2=mysqli_num_rows($result2);
$count3=mysqli_num_rows($result3);


if ($count1>=1) {
    $_SESSION['userMsg'] = "UserName already exists";
	header("Location: signupForm.php");
} else if ($count2>=1) {
    $_SESSION['emailMsg'] = "Email ID already exists";
	header("Location: signupForm.php");
} else if ($count3>=1) {
    $_SESSION['phoneMsg'] = "Phone Number already exists";
	header("Location: signupForm.php");
} else {

$sql="INSERT INTO registration (user_name, email_id, password_1, password_2, phone_number, member_type)
VALUES ('$username', '$emailid', '$password1', '$password2', '$phonenum', '$member_type');";
$result=mysqli_query($conn, $sql);

$_SESSION['username']=$username;

if ($member_type == "Employer") {
header("Location: employer.php"); 
} else if ($member_type == "Jobseeker") {
	header("Location: jobSeeker.php");
}
}
$conn->close();
?>