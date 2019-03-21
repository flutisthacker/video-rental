<?php
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Video Rental Company</title>
			<link rel="stylesheet"  href="css/style.css"  type="text/css" href="">
  <link rel="icon" href="https://png.icons8.com/cotton/80/000000/tv-show.png">

	<script type="text/javascript">
			if((document.video_form.Movie.value=="")&&(document.video_form.Status.value=="")){
				document.getElementById('bug').innerHTML="Username / Password field is empty";
				//login_form.bug.focus();
				return(false);
				}
</script>
	</head>
	<body>
			<div class="Simple-Form-rental">
				<form id="Category" name="video_form">
				<a href="../index.php"><img src="https://png.icons8.com/cotton/80/000000/tv-show.png" align="center" width="15%">
				</a>
				<br>
					<input type="number" label="Movie" name="Rental Number" id="button" style="text-align: center " placeholder="Rental Number" ><br><hr>

					<input type="text" name="Full name" id="button" style="text-align: center " placeholder="Full Name"><hr>

					<input type="number" name="DVD Number" id="button" style="text-align: center " placeholder="DVD Number"><hr>

					<input type="text" name="Title" id="button" style="text-align: center " placeholder="Title"><hr>

					<input type="text" name="Daily Rental" id="button"  style="text-align: center " placeholder="Daily Rental"><hr>

					<input type="Date" name="catalog number" id="button"  style="text-align: center " placeholder="Rented Date" data-toggle="tooltip" title="Rented Date"><hr>
					<input type="Date" name="catalog number" id="button"  style="text-align: center " placeholder="Due Date" data-toggle="tooltip" title="Due Date"><hr>

					<input type="submit" value="Add" id="butt" style="color:white;font-size: 18px ;" class="btn"><hr>
					<input type="Reset" name="Reset" id="butt" value="Reset" style="color:white;font-size: 18px;" />

				</form>

			</div>
	</body>
</html>


