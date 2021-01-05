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
		$verse=12;

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

                        तस्य सञ्जनयन्हर्षं कुरुवृद्धः पितामहः ।<br>  
                    सिंहनादं विनद्योच्चैः शङ्खं दध्मौ प्रतापवान् ॥ 12 ॥<br><br>

		        Then Bhisma, the great valiant grandsire of the Kuru dynasty,<br>
		        grandfather of the fighters, blew his conchshell very loudly,<br>
		        making a sound like the roar of a lion, giving Duryodhana joy.<br><br>
			
		</p>

		<p align="center"> <p class="container"> <a href="bgc1v11.php">Prev</a> <a href="bgc1v13.php">Next</a> </p>
	</body>
</html>
