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
		$verse=26;

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
			तत्रापश्यत्स्थितान् पार्थ: पितृ नथ पितामहान् |<br>
			आचार्यान्मातुलान्भ्रातृ न्पुत्रान्पौत्रान्सखींस्तथा |<br>
			श्वशुरान्सुहृदश्चैव सेनयोरुभयोरपि || 26||<br><br>

			There, Arjun could see stationed in both armies, his <br>fathers, grandfathers, teachers, maternal uncles,<br> brothers, cousins, sons, nephews, grand-nephews, <br>friends, fathers-in-law, and well-wishers.<br><br>

		</p>

		<p align="center"> <p class="container"> <a href="bgc1v25.php">Prev</a> <a href="bgc1v27.php">Next</a> </p>
	</body>
</html>
