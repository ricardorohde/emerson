<!DOCTYPE html>
<html>
<head>
  <title>Pizzaria Dough Piraporinha:: Fale Conosco</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC|Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
  <script src="js/script.js"></script>
</head>

<body>

  <?php include 'includes/header.php'; ?>

  <div class="cardapio_title" id="fale">
    <h1>fale conosco</h1>
  </div><!--end .cardapio_title-->
      
  <div class="cardapio_wrapper">

    <form action="form_end_1.php#fale" method="post" enctype="multipart/form-data">
      <label>nome:</label>
      <input name="nome" type="text" size="25" placeholder="máx 25 carac" />
      
      <label>e-mail:</label>
      <input name="email" type="text" placeholder="nome@exemplo.com" />
      
      <label>mensagem:</label>
      <textarea name="msg" maxlength="200" placeholder="max 200 carac" ></textarea>
      
      <label></label>
      <input type="submit" value="Enviar Mensagem" />
    </form>
          
  </div><!--end .cardapio_wrapper-->

  <?php include 'includes/footer.php'; ?>

</body>
</html>