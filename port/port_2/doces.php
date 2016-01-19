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
    <h2>pizzas <span>doces</span></h2>
    
    <div class="icons_wrapper">
      <a href="salgadas.php#top">				<img src="pics/icon_cardapio_1.png"></a>
      <a class="clicked" href="cardapio.php">	<img src="pics/icon_cardapio_2.png"></a>
      <a href="porcoes.php#top">				<img src="pics/icon_cardapio_3.png"></a>
      <a href="diversos.php#top">				<img src="pics/icon_cardapio_4.png"></a>
    </div><!--end .icons_wrapper-->
      
    <div class="pizza_wrapper">
        <div class="number">44<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>ABACAXI</h1>
            <span>Chocolate branco, abacaxi e canela em pó</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *44*-->
    
    <div class="pizza_wrapper">
        <div class="number">45<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>BANANA SHOW <i>NOVIDADE</i></h1>
            <span>Chocolate branco, creme de leite, banana e canela em pó</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *45*-->
    
    <div class="pizza_wrapper">
        <div class="number">46<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>BANANA I</h1>
            <span>Banana, leite condensado e canela em pó (mussarela opcional)</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *46*-->
    
    <div class="pizza_wrapper">
        <div class="number">47<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>BANANA II</h1>
            <span>Chocolate cremoso, creme de leite e banana</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *47*-->
    
    <div class="pizza_wrapper">
        <div class="number">48<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>BIS</h1>
            <span>Chocolate cremoso, creme de leite bis picado</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *48*-->
    
    <div class="pizza_wrapper">
        <div class="number">49<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>BIS BRANCO</h1>
            <span>Chocolate branco, creme de leite e bis picado</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *52*-->
    
    <div class="pizza_wrapper">
        <div class="number">50<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>BRIGADEIRO</h1>
            <span>Chocolate cremoso, leite condensado, chocolate granulado e cerejas</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *50*-->
    
    <div class="pizza_wrapper">
        <div class="number">51<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>ROMEU E JULIETA</h1>
            <span>Goiabada e mussarela</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *51*-->
    
    <div class="pizza_wrapper">
        <div class="number">52<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>SENSAÇÃO</h1>
            <span>Chocolate cremoso, morango e creme de leite</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *52*-->
    
    <div class="pizza_wrapper">
        <div class="number">53<br /><br /></div><!--end .number-->
        <div class="pizza">
            <h1>PRESTÍGIO</h1>
            <span>Chocolate cremoso, creme de leite, coco ralado e cerejas</span>
        </div><!--end .pizza-->
    </div><!--end .pizza_wrapper *53*-->
         
    <?php include 'includes/pdf_button.html'; ?>

  </div><!--end .cardapio_wrapper-->

  <?php include 'includes/footer.php'; ?>

</body>
</html>