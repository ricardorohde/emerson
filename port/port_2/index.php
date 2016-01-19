<!DOCTYPE html>
<html>
<head>
  <title>Pizzaria Dough Piraporinha:: Home</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC|Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
  <script src="js/script.js"></script>
</head>

<body onLoad="photoA(); preloadImages();">

  <?php include 'includes/header.php'; ?>

  <div id="slider_wrapper">
    <img src="pics/slide1.jpg" id="image" />
    <div id="left_hold"><img onClick="photo(-1)" id="left" class="arrow" src="pics/arrow_left.png" /></div>
    <div id="right_hold"><img onClick="photo(1)" id="right" class="arrow" src="pics/arrow_right.png" /></div>
  </div><!--end #slider_wrapper-->

  <div id="circles_wrapper">
  
    <a href="promos.php">
      <div id="circle_1" class="circle">
        <span>Promoções</span>
        <p>Confira Nossas Promoções</p>
      </div><!--end .circle_holder-->
    </a>
    
    <a href="bordas.php">
      <div id="circle_2" class="circle">
        <span>Bordas Recheadas</span>
        <p>Catupiry e Cheddar GRÁTIS</p>
      </div><!--end .circle_holder-->
    </a>
    
    <a href="cardapio.php">
      <div id="circle_3" class="circle">
        <span>Pizza Integral</span>
        <p>Experimente Nossa Pizza Integral!</p>
      </div><!--end .circle_holder-->
    </a>
  </div><!--end #circles_wrapper-->

  <?php include 'includes/footer.php'; ?>

</body>
</html>