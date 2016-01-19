<!DOCTYPE html>
<html>
<head>
  <title>Pizzaria Dough Piraporinha:: Trabalhe Conosco</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC|Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
  <script src="js/script.js"></script>
</head>

<body>

  <?php include 'includes/header.php'; ?>

  <div class="cardapio_title" id="trab">
    <h1>trabalhe conosco</h1>
  </div><!--end .cardapio_title-->
      
  <div class="cardapio_wrapper">

    <form action="form_end_2.php" method="post" enctype="multipart/form-data">
      <label>nome:</label>
      <input name="nome" type="text" size="50" placeholder="máx 50 carac" />
      
      <label>e-mail:</label>
      <input name="email" type="text" placeholder="nome@exemplo.com" />
      
      <label>telefone:</label>
      <input name="fone" type="text" size="15" placeholder="11 0 0000-0000" />
      
      <label>endereço:</label>
      <input name="end" type="text" size="50" placeholder="bairro, cidade, estado" />
      
      <label>cargo:</label>
      <select name="cargo">
        <option value="pizzaiolo">pizzaiolo (a)</option>
        <option value="atendente">atendente</option>
        <option value="outro">outro</option>
      </select>
      
<!--      <label>Currículo:</label>
      <input name="file" type="file" size="100" />-->
      
      <label>mensagem:</label>
      <textarea name="msg" maxlength="400" placeholder="máx 400 carac" ></textarea>
      
      <label></label>
      <input type="submit" value="Enviar Mensagem" />

    </form>
          
  </div><!--end .cardapio_wrapper-->

  <?php include 'includes/footer.php'; ?>

</body>
</html>