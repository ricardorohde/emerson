<!DOCTYPE html>
<html>
<head>
  <title>Pizzaria Dough Piraporinha :: Bebidas</title>
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
    <h2>bebidas</h2>
    
    <div class="icons_wrapper">
      <a href="salgadas.php#top">				<img src="pics/icon_cardapio_1.png"></a>
      <a href="doces.php#top">					<img src="pics/icon_cardapio_2.png"></a>
      <a href="porcoes.php#top">				<img src="pics/icon_cardapio_3.png"></a>
      <a class="clicked" href="cardapio.php">	<img src="pics/icon_cardapio_4.png"></a>
    </div><!--end .icons_wrapper-->
      
    <div class="pizza_wrapper">
        <div class="pizza">
            <h1>REFRIGERANTES</h1>
            <span>	Coca-cola &sdot;
            		Coca-cola&nbsp;Zero &sdot;
                    Fanta&nbsp;Laranja &sdot;
                    Sprite &sdot;
                    Guraná&nbsp;Zero &sdot;
                    Kuat &sdot;
                    Dolly&nbsp;guaraná</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *refris*-->
    
    <div class="pizza_wrapper">
        <div class="pizza">
            <h1>SUCOS</h1>
            <span>	Natural&nbsp;One:
            		Laranja &sdot;
                    Limão &sdot;
                    Uva</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *sucos*-->
    
    <div class="pizza_wrapper">
        <div class="pizza">
            <h1>CERVEJA</h1>
            <span>Itaipava: Latão</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *cervs*-->
    
    <div class="pizza_wrapper">
        <div class="pizza">
            <h1>VINHO</h1>
            <span>	Vinho&nbsp;Tinto (550 ml)</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *vinho*-->
    
     <div class="pizza_wrapper">
        <div class="pizza">
            <h1>MOUSSE DE CHOCOLATE</h1>
            <span>R$4,99</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper-->
    
    <div class="pizza_wrapper">
        <div class="pizza">
            <h1>MOUSSE DE MARACUJÁ</h1>
            <span>R$4,99</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper-->
    
    <div class="pizza_wrapper">
        <div class="pizza">
            <h1>MOUSSE DE LIMÃO</h1>
            <span>R$4,99</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper-->
    
    <div class="pizza_wrapper">
        <div class="pizza">
            <h1>TORTA HOLANDESA</h1>
            <span>R$4,99</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper-->	<!-- itens do cardapio -->
         
    <?php include 'includes/pdf_button.html'; ?>

  </div><!--end .cardapio_wrapper-->

  <?php include 'includes/footer.php'; ?>

</body>
</html>