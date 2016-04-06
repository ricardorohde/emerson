<?php

	echo '<script src="assets/js/script.js"></script>';

	require_once '../inc/DB.php';

	$tb = $_POST['tb'];

	switch ($tb) {
		case 'produtos':
			$query = $handler->prepare('INSERT INTO ' . $tb . ' (Pr_Nome, Pr_Desc, Pr_Preco) VALUES (:nome, :desc, :preco)');
		    $query->execute(array(
		        ':nome' => $_POST['nome'],
		        ':desc' => $_POST['desc'],
		        ':preco' => $_POST['preco'] 
		    ));
			break;
		case 'clientes':
			$query = $handler->prepare('INSERT INTO ' . $tb . ' (C_Nome, C_Email, C_Fone) VALUES (:nome, :email, :fone)');
		    $query->execute(array(
		        ':nome' => $_POST['nome'],
		        ':email' => $_POST['email'],
		        ':fone' => $_POST['fone'] 
		    ));
			break;
		case 'pedidos':
			$query = $handler->prepare('INSERT INTO ' . $tb . ' (C_Id, Pr_Id) VALUES (:cid, :prid)');
		    $query->execute(array(
		        ':cid' => $_POST['c-id'],
		        ':prid' => $_POST['pr-id']
		    ));
			break;
	}

	$count = $query->rowCount();

	echo    '<div class="alert alert-success" role="alert">
                ' . $count . ' novo registro adicionado para: ' . $tb .'
            </div>
            
            <a class="btn btn-default btn-see-all action-cancel" href="'. $tb .'" role="button">Ver todos</a>';

?>