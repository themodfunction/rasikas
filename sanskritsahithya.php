<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>sanskritasahithya.com</title>
	<link rel="stylesheet" href="sanskritsahithya.css">
</head>
<body>
  <?php 
  session_start();
  $un=$_SESSION['username'];
  $servername='localhost';
  $username='root';
  $password='';
  $dbname='rasikas';
  $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
  }

  $sql3="SELECT * FROM user where Username='$un'";
  $res=$conn->query($sql3);
  $ro=$res->fetch_assoc();
  $name=$ro['Name'];

  $sql="SELECT * FROM bg where Username='$un'";
  $result=$conn->query($sql);
  $row=$result->fetch_assoc();
  $chap=$row["Chapter"];
  $ver=$row["Verse"];

  $link="bgc".$chap."v".$ver.".php";
  ?>
  <br>
	<h2 align="right">Namaste <?php echo $name ?><br> <a href='logout.php'>Logout </a></h2>
  <br><br><br>
	<h2>Bhagavad Gita</h2>
		<a href="<?php echo $link; ?>"> <img src="bhagavad gita.jpg" style="width: 25%"> </a>
	<h2>Upcoming...</h2>
		<div class="row">
  <div class="column">
    <figure><img src="ramayan.jpg" alt="Ramayan" style="width:35%"><figcaption><h4>Ramayan</h4></figcaption>
    </figure>
  </div>
  <div class="column">
    <figure><img src="mahabharat.jpg" alt="Mahabharat" style="width:55%"><figcaption><h4>Mahabharat</h4></figcaption></figure>
  </div>
  </div>

</body>
</html>