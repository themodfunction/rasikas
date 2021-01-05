<?php
$servername='localhost';
$username='root';
$password='';
$dbname='rasikas';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$un=$_POST['username'];
$pw=$_POST['password'];
$name=$_POST['name'];
$mail=$_POST['email'];
$phone=$_POST['phone'];
$chapter=1;
$verse=1;

$sql= "INSERT INTO login (Username,Password) VALUES ('$un','$pw')";
if($conn->query($sql)=== TRUE)
{}
$sql1= "INSERT INTO user (Username,Name,Phone,Mail) VALUES ('$un','$name','$phone','$mail')";
if($conn->query($sql1)===TRUE)
{}
$sql2= "INSERT INTO bg (Username,Chapter,Verse) VALUES ('$un','$chapter','$verse')";
if($conn->query($sql2)=== TRUE)
{}
$conn->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="0; url='login.html'" />
	</head>
	<body>
	</body>
</html>