<?php
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Video Rental Companay| Category </title>
			<link rel="stylesheet"  href="css/style.css"  type="text/css" href="">

	<script type="text/javascript">
			if((document.video_form.Movie.value=="")&&(document.video_form.Status.value=="")){
				document.getElementById('bug').innerHTML="Username / Password field is empty";
				//login_form.bug.focus();
				return(false);
				}
</script>
	</head>
	<body>

			<div class="Simple-Form">
				<form id="Category" name="video_form">
				<a href="../index.php"><img src="https://png.icons8.com/cotton/80/000000/tv-show.png" align="center" width="15%">
				</a>
				<br>
					<input type="text" label="Movie" name="Movie" id="button" style="text-align: center " placeholder="Movie" ><br>
					<br>

					<input type="text" name="Status" id="button" style="text-align: center " placeholder="status"><br><br>


					<input type="text" name="Cost" id="button" style="text-align: center " placeholder="cost"><br><br>


					<input type="text" name="actor " id="button" style="text-align: center " placeholder="actor"><br><br>


					<input type="text" name="Director " id="button"  style="text-align: center " placeholder="Director"><br><br>


					<input type="text" name="catalog number" id="button"  style="text-align: center " placeholder="Catalog Number"><br><br>
				<br>
					<font color= 'white'><div id='bug'></div></font>
<br>
					<input type="submit" value="Add" id="butt" style="color:white;font-size: 18px;"><br><br>
					<input type="Reset" name="Reset" id="butt" value="Reset" style="color:white;font-size: 18px;" />

				</form>

			</div>
	</body>
</html>


