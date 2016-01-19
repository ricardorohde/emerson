<!DOCTYPE html>
<html>
<head>
  <title>Pizzaria Dough Piraporinha:: Cardápio</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC|Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
  <script src="js/script.js"></script>
</head>

<body>

  <?php include 'includes/header.php'; ?>

  <div class="cardapio_title">
    <h1>cardápio</h1>
  </div><!--end .cardapio_title-->
      
  <div class="cardapio_wrapper">

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