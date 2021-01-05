<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
session_start();

$un=$_SESSION['username'];
if($un=="")
{
	?> <meta http-equiv="refresh" content="0;url='login.html'">
	<?php
}
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];
$q11=$_POST['q11'];
$q12=$_POST['q12'];
$q13=$_POST['q13'];
$q14=$_POST['q14'];
$q15=$_POST['q15'];
$q16=$_POST['q16'];
$q17=$_POST['q17'];
$q18=$_POST['q18'];
$q19=$_POST['q19'];
$q20=$_POST['q20'];
$un=$_SESSION['username'];
$servername='localhost';
$username='root';
$password='';
$dbname='rasikas';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  	die("Connection failed: " . $conn->connect_error);
}

$score=0;
$increment=1;
$pass=14;

if($q1=='b')
	$score=$score+$increment;
if($q2=='a')
	$score=$score+$increment;
if($q3=='b')
	$score=$score+$increment;
if($q4=='c')
	$score=$score+$increment;
if($q5=='b')
	$score=$score+$increment;
if($q6=='a')
	$score=$score+$increment;
if($q7=='c')
	$score=$score+$increment;
if($q8=='c')
	$score=$score+$increment;
if($q9=='d')
	$score=$score+$increment;
if($q10=='b')
	$score=$score+$increment;
if($q11=='d')
	$score=$score+$increment;
if($q12=='c')
	$score=$score+$increment;
if($q13=='b')
	$score=$score+$increment;
if($q14=='a')
	$score=$score+$increment;
if($q15=='d')
	$score=$score+$increment;
if($q16=='c')
	$score=$score+$increment;
if($q17=='a')
	$score=$score+$increment;
if($q18=='b')
	$score=$score+$increment;
if($q19=='a')
	$score=$score+$increment;
if($q20=='c')
	$score=$score+$increment;

if($score>=$pass)
{
	?>
	<script type="text/javascript">
		alert("Congratulations! You Passed the Quiz. Your Score is <?php echo $score ?>");
	</script>
	<meta http-equiv="refresh" content="0; url='bgc2v1.php'" /> <?php
}
else
{
	?>
	<script type="text/javascript">
		alert("Your Score did not pass the expected score. Redirecting you to the Beginning of this Chapter");
	</script>
	<?php
	$sql2="UPDATE bg set Verse='1' where Username='$un'";
	if($conn->query($sql2)===TRUE)
	{}
	?> <meta http-equiv="refresh" content="0; url='bgc1v1.php'" /> <?php 
}
?>
</body>
</html>
