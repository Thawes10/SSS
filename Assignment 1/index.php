<?php
	session_start();
	
	if((isset($_SESSION["logined"])))
	{
		header("location:home.php");
		exit();
	}
	if((isset($_POST["user"]))&&(isset($_POST["password"])))
	{
		$user = $_POST["user"];
		$pass = $_POST["password"];
	
		if ($user == "thawes" && $pass == "thawes10")
			{
				
				$_SESSION["logined"] = true ;
				$_SESSION["name"] = "thawes" ;
				header ("location:home.php");
				
			}
		else 
			{
				$message = "incorect username or password";
			}

	}
?>
<html>
	<head>
		<title>LogIN</title>
	</head>
	<body>
		<form method = "post"><br><br><br><br><br>
				<div align = "center">
				username <input type = "text" name = "user" /> <br><br>
				password <input type = "password" name = "password"/> <br><br>
				<input type = "submit" value = "log In" /><br>
				<?php
						if((isset ($message)))
						{
							echo $message;
						}
				?>
				</div>
		</form>
	</body>
</html>