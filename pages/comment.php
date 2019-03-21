<?php

?>

<!DOCTYPE html>
<html>

<head>
  <title></title>Video rental company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link rel="icon" href="https://png.icons8.com/cotton/80/000000/tv-show.png">

  <link rel="icon" href="tv-show.png" >

</head>

<body id="top">
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left">
             <ul>
        <li><i class="fa fa-phone"></i> +977-014248181</li>
        <li><i class="fa fa-envelope-o"></i> info@videorental.com</li>
      </ul>
      </div>
      <div class="fl_right">
        <ul>
          <li>
            <a href="../index.php">
              <i class="fa fa-lg fa-home"></i>
            </a>
          </li>
          <li>
            <a href="../login/logout.php">Logout</a>
          </li>
          <li>
            <a href="../register/register.php">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/vv.png');">
    <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left">
        <h1><a href="../index.php">Video Rental Company</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../index.php">Home</a></li>
        <li class="active"><a class="drop" href="#">Pages</a>
        <ul>
              <li class="active"><a href="gallery.php">Gallery</a></li>
              <li><a href="../category/rental.php">Rental</a></li>
              <li><a href="../category/category.php">Category</a></li>
               <li><a href="comment.php">Comment</a></li>
            </ul>
          </li>
      </nav>
    </header>
  </div>

    <!-- ################################################################################################ -->
  </div>
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div id="comments">

        <h2>Write A Comment</h2>
        <form action="#" method="post">
          <div class="one_third first">
            <label for="name">Name
              <span>*</span>
            </label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail
              <span>*</span>
            </label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="url" id="url" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form" class="btn btn-danger"> &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>
      <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
  <!-- / main body -->
  <div class="clear"></div>
  </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################
  <div class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/00.png');">
    <footer id="footer" class="hoc clear">
      <h3 class="heading">Video Rental Company</h3>
      <nav>
        <ul class="nospace inline pushright uppercase">
          <li>
            <a href="../index.html">
              <i class="fa fa-lg fa-home"></i>
            </a>
          </li>
          <li>
            <a href="#">About</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
          <li>
            <a href="#">Terms</a>
          </li>
          <li>
            <a href="#">Privacy</a>
          </li>
          <li>
            <a href="#">Cookies</a>
          </li>
          <li>
            <a href="#">Disclaimer</a>
          </li>
        </ul>
      </nav>
      <ul class="faico clear">
        <li>
          <a class="faicon-facebook" href="#">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        <li>
          <a class="faicon-twitter" href="#">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li>
          <a class="faicon-dribble" href="#">
            <i class="fa fa-dribbble"></i>
          </a>
        </li>
        <li>
          <a class="faicon-linkedin" href="#">
            <i class="fa fa-linkedin"></i>
          </a>
        </li>
        <li>
          <a class="faicon-google-plus" href="#">
            <i class="fa fa-google-plus"></i>
          </a>
        </li>
        <li>
          <a class="faicon-vk" href="#">
            <i class="fa fa-vk"></i>
          </a>
        </li>
      </ul>
    </footer>
  </div>
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear">
      <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved -
        <a href="#">Domain Name</a>
      </p>
      <p class="fl_right">Template by
        <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>
      </p>
    </div>
  </div>
  <a id="backtotop" href="#top">
    <i class="fa fa-chevron-up"></i>
  </a-->
  <!-- JAVASCRIPTS -->
  <script src="../layout/scripts/jquery.min.js"></script>
  <script src="../layout/scripts/jquery.backtotop.js"></script>
  <script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>