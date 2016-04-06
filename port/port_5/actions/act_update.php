<?php

	$tb = $_POST['tb'];
	$idColName = $_POST['id-col-name'];
	$id = $_POST['id'];

	echo '<script src="assets/js/script.js"></script>';

	require_once '../inc/DB.php';

	switch ($tb) {
		case 'produtos':
			$query = $handler->prepare('UPDATE ' . $tb . ' SET Pr_Nome=:nome, Pr_Desc=:desc, Pr_Preco=:preco WHERE ' . $idColName . '=' . $id);
		    $query->execute(array(
		        ':nome' => $_POST['nome'],
		        ':desc' => $_POST['desc'],
		        ':preco' => $_POST['preco'] 
		    ));
			break;
		case 'clientes':
			$query = $handler->prepare('UPDATE ' . $tb . ' SET C_Nome=:nome, C_Email=:email, C_Fone=:fone WHERE ' . $idColName . '=' . $id);
		    $query->execute(array(
		        ':nome' => $_POST['nome'],
		        ':email' => $_POST['email'],
		        ':fone' => $_POST['fone'] 
		    ));
			break;
		case 'pedidos':
			$query = $handler->prepare('UPDATE ' . $tb . ' SET C_Id=:cid, Pr_Id=:prid WHERE ' . $idColName . '=' . $id);
		    $query->execute(array(
		        ':cid' => $_POST['c-id'],
		        ':prid' => $_POST['pr-id']
		    ));
			break;
	}

	$count = $query->rowCount();

	echo    '<div class="alert alert-success" role="alert">
                ' . $count . ' registro alterado com sucesso em: ' . $tb .'
            </div>
            
            <a class="btn btn-default btn-see-all action-cancel" href="'. $tb .'" role="button">Ver todos</a>';

?>