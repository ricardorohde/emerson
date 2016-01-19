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

  <?php
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$msg = $_POST["msg"];
	$erro = 0;
	
	$to = "sac@doughpizza.com.br";
	$cc = "edumessiaslopes@hotmail.com";
	$subject = "Nova Mensagem do Site";
	$message = "NOME: "     . $nome    . "\r\n" . "\r\n" .
			   "E-MAIL: " . $email     . "\r\n" . "\r\n" .
			   "MENSAGEM: " . $msg     . "\r\n" . "\r\n";
	$headers = "From: $email" . "\r\n" . "CC: $cc";
	
	include 'includes/header_2.php';
  ?>
  
  <div class="cardapio_title" id="fale">
    <h1>fale conosco</h1>
  </div><!--end .cardapio_title-->
      
  <div class="cardapio_wrapper">
    
  <?php  	
	if (strlen($nome) > 25 || empty($nome)) {
		echo 	"<label class='display_error'>Nome Inválido <i>(máx 25 caracteres)</i></label>" . "\r\n";
		$erro = 1;
	}
	
	if (strlen($email)<6 || strstr($email, '@')==false || strstr($email, '.')==false) {
		echo 	"<label class='display_error'>E-mail Inválido</label>" . "\r\n";
		$erro = 1;
	}
	
	if (strlen($msg) > 200 ||empty($msg)) {
		echo 	"<label class='display_error'>Mensagem Inválida <i>(máx 200 caracteres)</i></label>" . "\r\n";
		$erro = 1;
	}
	
	if ($erro == 1) {
		echo	"<a style='text-decoration: none;' href='javascript:history.go(-1)'>".
				"<input class='display_button' type='button' value='Voltar' /></a>";		
	} else {
		echo 	"<label class='display_success'>Obrigado Pela Mensagem</label>".
		   	 	"<a style='text-decoration: none;' href='index.php'>".
				"<input class='display_button' type='button' value='Voltar' /></a>";
			
	  mail($to, $subject, $message, $headers);
	}
	?>
    
    </div><!--end .cardapio_wrapper-->
    
	<?php include 'includes/footer_2.php'; ?>

</body>
</html>