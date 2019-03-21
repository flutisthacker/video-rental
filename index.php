<?php
session_start();
if($_SESSION['user_logged_in']){
?>
<!DOCTYPE html>

<html>

<head>
  <title>Video Rental Comany</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link rel="icon" href="https://png.icons8.com/cotton/80/000000/tv-show.png">
  <link rel="icon" href="tv-show.png" >

</head>
<body id="top" onLoad="alert('Welcome')">
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +977-014248181	</li>
        <li><i class="fa fa-envelope-o"></i> info@videorental.com</li>
      </ul>
    </div>

      <div class="fl_right">
        <ul>
          <li>
            <a href="index.php">
              <i class="fa fa-lg fa-home"></i>
            </a>
          </li>
          <li><a href="login/logout.php">Logout</a></li>
          <li><a href="register/register.php">Register</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Top Background Image Wrapper -->
  <div class="bgded overlay" style="background-image:url('images/demo/backgrounds/vv.png');">
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
      <header id="header" class="hoc clear">
        <!-- ################################################################################################ -->
        <div id="logo" class="fl_left">
          <h1>
            <a href="index.php">Video Rental Company
              <i class="fas fa-video"></i>
            </a>
          </h1>
        </div>
        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li class="active">
              <a href="index.php">Home</a>
            </li>
            <li>
              <a class="drop" href="#">Videos</a>
              <ul>
                <li><a href="pages/gallery.php">Gallery</a></li>
                <li><a href="category/rental.php">Rental</a></li>
                 <li><a href="category/category.php">Category</a></li>
                <li><a href="pages/comment.php">comments</a></li>
              </ul>
            </li>

            <li>
              <a href="about/about.php">About </a>
            </li>
            <li>
              <a href="report.php">Report</a>
            </li>
          </ul>
        </nav>
        <!-- ################################################################################################ -->
      </header>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div id="pageintro" class="hoc clear">
      <!-- ################################################################################################ -->
      <div class="flexslider basicslider">
        <ul class="slides">
          <li>
            <article>

              <h3 class="heading"> Welcome to Video Rental Company </h3>
              <p>Watch your favorite movies</p>
              <footer>
                <form class="group" method="post" action="#">
                  <fieldset>
                    <legend>Sign-Up:</legend>
                    <input type="text" value="" placeholder="Search Here&hellip;" class="diabled">
                    <button class="fa fa-sign-in" type="submit" title="Submit" action="document.alert('sorry not available')">
                      <em>Submit</em>
                    </button>
                  </fieldset>
                </form>
              </footer>
            </article>
          </li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
  </div>
  <!-- End Top Background Image Wrapper -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!--############################################################################ -->
  </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <!-- JAVASCRIPTS -->
  <script src="layout/scripts/jquery.min.js"></script>
  <script src="layout/scripts/jquery.backtotop.js"></script>
  <script src="layout/scripts/jquery.mobilemenu.js"></script>
  <script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>

</html>
<?php

}//if close
else{
	//	print "<h4>You are not authorized to view this page.</h4>";
	//print '<br><a href="login/login.php"> Login Here</a>';
header("Location: login/login.php");
}
?>