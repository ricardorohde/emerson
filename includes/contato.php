<?php
    error_reporting(0);
    ini_set('display_errors', 0);
    
    $msg = 'NOME: $nome <br />, E-MAIL: $email <br />, EMPRESA: $empresa <br /> <br /> Mensagem: <br />';
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];
    $msg .= $_POST['msg'];
?>

<form id="contato" action="index.php#panel-3" method="post">
	<!--<label for="nome">Nome</label>-->
	<input id="nome" class="form-control" type="text" name="nome" placeholder="Nome" required aria-describedby="sizing-addon1" />
	
	<!--<label for="email">E-mail</label>-->
	<input id="email" class="form-control" type="text" name="email" placeholder="E-mail" required />
	
	<!--<label for="empresa">Empresa</label>-->
	<input id="empresa" class="form-control" type="text" name="empresa" placeholder="Empresa" />
	
	<!--<label for="msg">Mensagem</label>-->
	<textarea id="msg" class="form-control" name="msg" placeholder="Mensagem" maxlength="1000" required></textarea>
	
	<input class="btn btn-default" type="submit" name="enviar" value="Enviar" />
    
    <style>
        div#success-msg {
            text-align: center;
        }
        span.glyphicon-ok {
            color: green;
            display: inline-block;
        }         
        p#msg {
            color: green;
            display: inline-block;
        }
    </style>
    
    <?php
        if(!empty($nome)){
            $to = 'emerson.mdca@gmail.com';
            $subj = 'Nova Mensagem do Site emersonmendonca.com';
            //$msg= wordwrap($msg, 70);
            
            mail($to, $subj, $msg);
           
            echo    '<div id="success-msg">
                    <span class="glyphicon glyphicon-ok"></span>
                    <p id="msg" >Mensagem enviada com sucesso ;)</p>
                    </div>';
        }
        
    ?>
</form>