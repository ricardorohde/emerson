<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Colégio Piaso :: Home</title>
<link rel="stylesheet" href="style/style.css" />
<script language="javascript" type="text/javascript" src="js/script.js"></script>
<?php include "includes/google_font.php"; ?>
</head>

<body>

<div id="navbar_top">
  <span><a href="#">contato</a></span>
  <span><a href="#">onde estamos</a></span>	
</div><!--#navbar_top-->

<?php include "includes/header.php"; ?>

<div id="main_box">
  
  <div id="slider_wrapper">
    <img src="images/slide1.jpg" id="image" />
    <div id="left_hold"><img onClick="photo(-1)" id="left" class="arrow" src="images/arrow_left.png" /></div>
    <div id="right_hold"><img onClick="photo(1)" id="right" class="arrow" src="images/arrow_right.png" /></div>
  </div><!--end #slider_wrapper-->

</div><!--#main_box-->

<div id="box_holder">
  <div id="container_2" class="container">
    <span>Berçario</span>
    <img src="images/fachada.jpg" />
    <a href="#"><input type="button" value="click me" name="button_1" /></a>
  </div><!--#container_2-->

  <div id="container_1" class="container">
    <span>Programa Everyday English</span>
    <img src="images/fachada.jpg" />
    <a href="#"><input type="button" value="click me" name="button_1" /></a>
  </div>
  
  <div id="container_1" class="container">
    <span>Programa Everyday English</span>
    <img src="images/fachada.jpg" />
    <a href="#"><input type="button" value="click me" name="button_1" /></a>
  </div>

</div><!--#box_holder-->

<div id="box_holder">

  <div id="container_1" class="container">
    <span>Programa Everyday English</span>
    <img src="images/fachada.jpg" />
    <a href="#"><input type="button" value="click me" name="button_1" /></a>
  </div>
  
  <div id="container_1" class="container">
    <span>Programa Everyday English</span>
    <img src="images/fachada.jpg" />
    <a href="#"><input type="button" value="click me" name="button_1" /></a>
  </div>
    
  <div id="container_2" class="container">
    <span>Berçario</span>
    <img src="images/fachada.jpg" />
    <a href="#"><input type="button" value="click me" name="button_1" /></a>
  </div><!--#container_2-->
  
</div><!--#box_holder-->
<?php include "includes/footer.php"; ?>
</body>

</html>