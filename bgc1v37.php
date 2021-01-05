<html>
	<head>
		<title> Bhagavad Gita Chapter 1 </title>
	</head>
	<link rel="stylesheet" type="text/css" href="bgc1v1.css">

	<body>
		<?php
		session_start();

		if(!isset($_SESSION['username']))
		{
			?>
			<script>
			alert("Please Login!");
			</script>
			<meta http-equiv="refresh" content="0; url='login.html'">
			<?php 
		}

		$un=$_SESSION['username'];
		$servername='localhost';
		$username='root';
		$password='';
		$dbname='rasikas';
		$chapter=1;
		$verse=37;

		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}

		$sql="SELECT * FROM bg where Username='$un'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		$chap=$row["Chapter"];
		$ver=$row["Verse"];

		if($chapter>$chap)
		{
			$sql1="UPDATE bg set Chapter='$chapter',Verse='$verse' where Username='$un'";
			if($conn->query($sql1)===TRUE)
			{}
		}

		if($chapter==$chap)
		{
			if($verse>$ver)
			{
				$sql2="UPDATE bg set Verse='$verse' where Username='$un'";
				if($conn->query($sql2)===TRUE)
				{}		
			}
		}

		$sql3="SELECT * FROM user where Username='$un'";
		$res=$conn->query($sql3);
		$ro=$res->fetch_assoc();
		$name=$ro['Name'];

		?>
		<h2 align="Right">Namaste <?php echo $name;?>! <br> <a href='logout.php'>Logout </a></h2>
		<p align="left" style="font-size: 150%"> <a href="sanskritsahithya.php"> Home</a> </p><br><br>
		<p align="center"> Chapter <?php echo $chapter ?> Verse <?php echo $verse ?> </p> 
		<p align="center"> <br>
			तस्मान्नार्हा वयं हन्तुं धार्तराष्ट्रान्स्वबान्धवान् |<br>
			स्वजनं हि कथं हत्वा सुखिन: स्याम माधव || 37||<br><br>

			Therefore, it is not appropriate for us to kill these<br> relatives of Dhritraashtra who our also our<br> brothers. How can we gain pleasure by killing our<br>
			own, O Maadhava?<br><br>
		</p>

		<p align="center"> <p class="container"> <a href="bgc1v36.php">Prev</a> <a href="bgc1v38.php">Next</a> </p>
	</body>
</html>
