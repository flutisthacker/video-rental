<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Form</title>
			<link rel="stylesheet"  href="css/login.css"  type="text/css" >
	</head>
	<body onLoad="alert('Please Login')">
		<div class="Simple-Form">
			<form id="Login" action="login_check.php" method="post" name="login_form">
					<a href="../index.php"><img src="https://png.icons8.com/cotton/80/000000/tv-show.png" align="center" width="15%">
        </a>
        <hr>
        <input type="text" name="user_name" id="button" placeholder="Enter you User Name"><br>
				<br>
				<input type="Password" name="pass_word" id="button" placeholder="Enter you Password"><br>
				<br>
				<font color= 'red'><div id='bug'></div></font>
				<input type="submit" value="Login" id="butt" style="color:white;font-size: 18px;"><br><br>
				<input type="Reset" name="Reset" id="butt" value="Reset" style="color:white;font-size: 18px;" />
				<br>
			</form>
		</div>
<script type="text/javascript">
			if((document.login_form.user_name.value=="")&&(document.login_form.pass_word.value=="")){
				document.getElementById('bug').innerHTML="Username / Password field is empty";
				login_form.bug.focus();
				return(false);
				}
</script>
</body>

</html>
