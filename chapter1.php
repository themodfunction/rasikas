<?php

session_start();
$un=$_SESSION['username'];

$servername='localhost';
$username='root';
$password='';
$dbname='rasikas';
$chapter=1;

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  	die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM bg where Username='$un'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$chap=$row["Chapter"];

if($chap>$chapter)
{
	?>
	<meta http-equiv="refresh" content="0; url='bgc2v1.php'" />
	<?php
}
else
{
	?>
	<script type="text/javascript">
		alert("Please Complete the Quiz before moving to the next Chapter");
	</script>
	<meta http-equiv="refresh" content="0; url='quiz.html'">
	<?php
}
?>