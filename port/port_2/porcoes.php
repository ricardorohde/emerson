<!DOCTYPE html>
<html>
<head>
  <title>Pizzaria Dough Piraporinha :: Porções</title>
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
    <h2>porções</h2>
    
    <div class="icons_wrapper">
      <a href="salgadas.php#top">				<img src="pics/icon_cardapio_1.png"></a>
      <a href="doces.php#top">					<img src="pics/icon_cardapio_2.png"></a>
      <a class="clicked" href="cardapio.php">	<img src="pics/icon_cardapio_3.png"></a>
      <a href="diversos.php#top">				<img src="pics/icon_cardapio_4.png"></a>
    </div><!--end .icons_wrapper-->
      
    <div class="pizza_wrapper">
        <div class="number">54<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>BATATA FRITA COM MUSSARELA E BACON</h1>
            <span>R$15,99</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *54*-->
    
    <div class="pizza_wrapper">
        <div class="number">55<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>BATATA FRITA COM CHEDDAR E BACON</h1>
            <span>R$16,99</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *55*-->
    
    <div class="pizza_wrapper">
        <div class="number">56<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>BATATA SMILE</h1>
            <span>R$15,99</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *56*-->
    
    <div class="pizza_wrapper">
        <div class="number">57<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>CALABRESA COM CEBOLA</h1>
            <span>R$15,99</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *63*-->
    
    <div class="pizza_wrapper">
        <div class="number">58<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>COSTELINHA COM BARBECUE</h1>
            <span>R$28,99</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *58*-->
    
    <div class="pizza_wrapper">
        <div class="number">59<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>FRANGO A PASSARINHO COM POLENTA</h1>
            <span>R$24,99</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *59*-->
    
    <div class="pizza_wrapper">
        <div class="number">60<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>WINGS BARBECUE OU HOT (Coxa ou asa de frango)</h1>
            <span>R$21,99</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *60*-->	<!-- itens do cardapio -->
    
    <?php include 'includes/pdf_button.html'; ?>

  </div><!--end .cardapio_wrapper-->

  <?php include 'includes/footer.php'; ?>

</body>
</html>