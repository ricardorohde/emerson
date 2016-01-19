<!DOCTYPE html>
<html>
<head>
  <title>Pizzaria Dough Piraporinha:: Onde Estamos</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC|Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
  <script src="js/script.js"></script>
</head>

<body>

  <?php include 'includes/header.php'; ?>

  <div class="cardapio_title">
    <h1>onde estamos</h1>
  </div><!--end .cardapio_title-->
      
  <div class="cardapio_wrapper">
    
      <div class="pics_wrapper">     
        <img src="pics/pic_1.jpg" />    
        <span>av. piraporinha 1.611 - piraporinha</span>
        <span>diadema - SP</span>     
      </div><!--end .pics_wrapper-->
    
      <div class="pics_wrapper">     
        <img src="pics/pic_2.jpg" />     
      </div><!--end .pics_wrapper-->
           
      <div class="pics_wrapper">
        <img src="pics/pic_3.jpg" />
        <hr />
        
        <p id="map">como chegar:</p>
        
      </div><!--end .pics_wrapper-->
      
      <div id="map_wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.569622759751!2d-46.5879981!3d-23.6913442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce43842e730c23%3A0x941a5f0f8d54de51!2sAv.+Piraporinha%2C+1611+-+Vila+Nogueira%2C+Diadema+-+SP!5e0!3m2!1spt-BR!2sbr!4v1429582683883" frameborder="0">
        </iframe>
      </div><!--end #map_wrapper-->
      
  </div><!--end .cardapio_wrapper-->

  <?php include 'includes/footer.php'; ?>

</body>
</html>