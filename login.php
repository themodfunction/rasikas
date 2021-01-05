<!DOCTYPE html>
<html>

<?php
$servername='localhost';
$username='root';
$password='';
$dbname='rasikas';
$flag=0;

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$un=$_POST['username'];
$pw=$_POST['password'];

$sql="SELECT * FROM login";
$result=$conn->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc()){
		if(($row["Username"]==$un)&&($row["Password"]==$pw))
			$flag=1;
	}
}

if($flag==0)
{
	?>
	<head>
		<meta http-equiv="refresh" content="0; url='login.html'" />
	</head>
	<?php
}
else
{
	session_start();
	$_SESSION['username']=$un;
	?>
	<head>
		<meta http-equiv="refresh" content="0; url='sanskritsahithya.php'" />
	</head>
	<?php
}
?>
</html>

