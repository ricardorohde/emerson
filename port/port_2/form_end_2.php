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
	$fone = $_POST["fone"];
	$end = $_POST["end"];
	$cargo = $_POST["cargo"];
	$msg =	$_POST["msg"];
	$erro = 0;
		
	$to = "sac@doughpizza.com.br";
	$cc = "edumessiaslopes@hotmail.com";
	$subject = "Nova Mensagem de Trabalho Site";
	$message = "NOME: "   	. $nome	. "\r\n" . "\r\n" .
			   "E-MAIL: " 	. $email. "\r\n" . "\r\n" .
			   "TELEFONE: " . $fone	. "\r\n" . "\r\n" .
			   "ENDEREÇO: " . $end	. "\r\n" . "\r\n" .
			   "CARGO: " 	. $cargo. "\r\n" . "\r\n" .
			   "MENSAGEM: "	. $msg. "\r\n" . "\r\n";
	$headers = "From: $email" . "\r\n" . "CC: $cc";
	
	include 'includes/header_2.php';
  ?>
  
  <div class="cardapio_title" id="fale">
    <h1>trabalhe conosco</h1>
  </div><!--end .cardapio_title-->
      
  <div class="cardapio_wrapper">
    
  <?php
	/*	if ($_FILES["file"]["error"] > 0) {
		echo	"<label class='display_error'>Nenhum arquivo selecionado ou arquivo inválido<i>(doc, docx, pdf)</i></label>".
				"\r\n" .
				"<label class='display_error'>Error code: </label>" . $_FILES["file"]["error"].
				"\r\n";
				$erro = 1;
	}*/
	
	if (strlen($nome) > 50 || empty($nome)) {
		echo 	"<label class='display_error'>Nome Inválido <i>(máx 50 caracteres)</i></label>" . "\r\n";
		$erro = 1;
	}
	
	if (strlen($email)<6 || strstr($email, '@')==false || strstr($email, '.')==false) {
		echo 	"<label class='display_error'>E-mail Inválido</label>" . "\r\n";
		$erro = 1;
	}
	
	if (strlen($fone)>15 || empty($fone)) {
		echo 	"<label class='display_error'>Telefone Inválido</label>" . "\r\n";
		$erro = 1;
	}
	
	if (strlen($end)>50 || empty($end)) {
		echo 	"<label class='display_error'>Endereço Inválido<i>(máx 50 caracteres)</i></label>" . "\r\n";
		$erro = 1;
	}
	
	if (strlen($msg) > 400 || empty($msg)) {
		echo 	"<label class='display_error'>Mensagem Inválida <i>(máx 400 caracteres)</i></label>" . "\r\n";
		$erro = 1;
	}
	
	if ($erro == 1) {
		echo 	"<a href='javascript:history.go(-1)'><input class='display_button' type='button' value='Voltar' /></a>";		
	} else {
		echo 	"<label class='display_success'>Obrigado Pela Mensagem</label>".
		   	 	"<a href='index.php'><input class='display_button' type='button' value='Voltar' /></a>".

				/*	"Upload: " . $_FILES["file"]["name"] . "<br />" .
				"Type: " . $_FILES["title"]["type"] . "<br />" .
				"Size: " . $_FILES["file"]["size"] / 1024 . "Kb<br />" .
				"Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
				
	  move_uploaded_file($_FILES["file"]["temp_name"],
	  "../upload/" . $_FILES["file"]["name"]);*/
					
	  mail($to, $subject, $message, $headers);
	}
  ?>
    
    </div><!--end .cardapio_wrapper-->
    
	<?php include 'includes/footer_2.php'; ?>

</body>
</html>