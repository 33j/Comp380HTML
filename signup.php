<DOCTYPE! html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="signupstyle.css"/>
		<meta charset="UTF-8">

	</head>
	
	<body>
	
		<ul>
			<li class="menu"><a class="active" href="index.html">Home</a></li>
			<li class="menu"><a href="contact.html">Contact</a></li>
			<li class="menu"><a href="#about">About</a></li>
		</ul>
		
		<ol type = "1" style="list-style-type:none">
			<form action="$_SERVER['PHP_SELF']">
			
				<div>
					<div class="left"><li>UserName:</li></div>
					<div class="right"><input class="text" type="text" name="username"></div>
				</div>
				
				<div>
					<div class="left"><li>First Name:</li></div>
					<div class="right"><input class="text" type="text" name="firstname"></div>
				</div>
				
				<div>
					<div class="left"><li>Last Name:</li></div>
					<div class="right"><input class="text" type="text" name="lastname"></div>
				</div>
				
			</form>
			
			
			
			<form>
				<div>
					<div class="left"><li>Address:</li></div>
					<div class="right"><input class="text" type="text" name="address"></div>
				</div>
				
				<div>				
					<div class="left"><li>City:</li></div>
					<div class="right"><input class="text" type="text" name="city"></div>
				</div>
					
				<div>	
					<div class="left"><li>State:</li></div>
					<div class="right"><input class="text" type="text" name="state"></div>
				</div>
			</form>

			<form>
		
				<div>
					<div class="left"><li>e-mail:</li></div>
					<div class="right"><input class="text" type="text" name="email"></div>
				</div>
				
				<div>
					<div class="left"><li>Conact number:</li></div>
					<div class="right"><input class="text" type="text" name="phone"></div>
				</div>
				
			</form>

			<form>
				<div>
					<div class="left"><li>Password:</li></div>
					<div class="right"><input class="text" type="text" name="password"></div>
				</div>
				
				<div>
					<div class="left"><li>Confirm Password:</li></div>
					<div class="right"><input class="text" type="text" name="confpass"></div>
				</div>
				
			</form>
			</ol>

		<div>
			<div class="left"><input class="finish" type="submit" value="Finish" style="text-align:center;"></div>
			<div class="right"><a href="login.html"><input type="submit" value="Cancel"></a></div>
		</div>

	</body>

</html>
