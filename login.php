<?php
	session_start();
	if (isset($_SESSION["userName"])&&!empty($_SESSION["userName"])){
		echo "<script type='text/javascript'>window.location.href = 'sellerpage.php';</script>";
	}
?>

<html>
	<head>
		<link type="text/css" rel="stylesheet" href="loginstyle.css"/>
		<meta charset="UTF-8">

	</head>
	
	<body>
	
		<ul>
			<li><a class="active" href="index.html">Home</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="#about">About</a></li>
		</ul>
	
		<form>
			Username: <input type="text" name="username"><br>
			
			Password: <input type="text" name="password">
		</form>
		
		<a href = "#forgot"><sup>forgot password/username?</sup></a>
		<br>
	</body>
	<a href="sellerpage.php"><input type="submit" value="login"></a>
	<a href = "signup.php"><input type="submit" value="signup"></a>
</html>
