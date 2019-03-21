<?php
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registeration Form</title>
			<link rel="stylesheet"  href="css/style.css"  type="text/css" href="">
			<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

	</head>
	<body>

        	<div class="Simple-Form">
				<form id="Registeration" action="register_check.php" method="post" name="registration_form>
				<a href="../index.php"></img src="https://png.icons8.com/cotton/80/000000/tv-show.png" align="center" width="15%">
        </a>
        <hr>

					<input type="text" name="first_name" id="button" placeholder="Enter you First Name"><br>
					<br>
					<input type="text" name="last_name" id="button" placeholder="Enter you Last Name"><br><br>
					<input type="email" name="email" id="button" placeholder="Enter you Email"><br><br>
					<input type="password" name="password" id="button" placeholder="Enter your Password"><br><br>
					<select id="ph"><option>+977</option></select>
					<input type="number" name="num" placeholder="Enter your phone number" id="phone"><br><br>
					<input type="radio" name="gender" id="rd" ><span id="but" style="color: white; font-size:18px;">Male</span>
					<input type="radio" name="gender" id="rd" ><span id="but" style="color: white; font-size:18px;">Female</span><br><br>
					<input type="submit" value="Register" id="butt" style="color:white; font-size: 18px;"><br><br>
 <input type="Reset" name="Reset" id="butt" value="Reset" style="color:white; font-size: 18px;" />

				</form>

			</div>
	</body>
</html>