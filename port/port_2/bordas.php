<!DOCTYPE html>
<html>
<head>
  <title>Pizzaria Dough Piraporinha :: Pizzas pizzas</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC|Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
  <script src="js/script.js"></script>
</head>

<body>

  <?php include 'includes/header.php'; ?>

  <div class="cardapio_title" id="top">
    <h1>cardápio</h1>
  </div><!--end .cardapio_title-->
              
  <div class="cardapio_wrapper">
    <h2>Bordas Recheadas</h2>
      
    <div class="pizza_wrapper">
        <div class="pizza">
            <span> &#10004; CATUPIRY <i>GRÁTIS</i><br />
            &#10004; FRANGO<br />
            &#10004; FRANGO COM CATUPIRY<br />
            &#10004; CALABRESA<br />
            &#10004; CALABRESA COM CATUPIRY<br />
            &#10004; CALABRESA COM CHEDDAR<br />
            &#10004; CHEDDAR <i>GRÁTIS</i><br />
            &#10004; MUSSARELA<br />
            &#10004; ALHO<br />
            &#10004; CHOCOLATE<br />
            &#10004; GOIABADA<br />
            &#10004; DOCE DE LEITE</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *sucos*-->
    
    <div class="icons_wrapper">
      <a href="salgadas.php#top">		<img src="pics/icon_cardapio_1.png"></a>
      <a href="doces.php#top">			<img src="pics/icon_cardapio_2.png"></a>
      <a href="porcoes.php#top">		<img src="pics/icon_cardapio_3.png"></a>
      <a href="diversos.php#top">		<img src="pics/icon_cardapio_4.png"></a>
    </div><!--end .icons_wrapper-->
         
    <?php include 'includes/pdf_button.html'; ?>

  </div><!--end .cardapio_wrapper-->

  <?php include 'includes/footer.php'; ?>

</body>
</html>