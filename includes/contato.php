<form id="contato" action="index.php" method="post">
	<!--<label for="nome">Nome</label>-->
	<input id="nome" class="form-control" type="text" name="nome" placeholder="Nome" required aria-describedby="sizing-addon1" />
	
	<!--<label for="email">E-mail</label>-->
	<input id="email" class="form-control" type="text" name="email" placeholder="E-mail" required />
	
	<!--<label for="empresa">Empresa</label>-->
	<input id="empresa" class="form-control" type="text" name="empresa" placeholder="Empresa" />
	
	<!--<label for="msg">Mensagem</label>-->
	<textarea id="msg" class="form-control" name="msg" placeholder="Mensagem" required></textarea>
	
	<input class="btn btn-default" type="submit" name="enviar" value="Enviar" />
</form>