<?php
    function __autoload($class_name) {
        require_once 'classes/' . $class_name .'.php';  
    }
    
    $tb = $_GET['tbl'];
    $idColName = $_GET['id-col-name'];
    $id = $_GET['id'];

    require_once 'inc/DB.php';
    $query = $handler->query('SELECT * FROM ' . $tb . ' WHERE ' . $idColName . '=' . $id);
    $r = $query->fetch(PDO::FETCH_OBJ);    
    
    $create = new GetUpdate();

    switch ($tb) {
        case 'produtos':
            $tbDisplayTitle = 'Editar Produto';
            break;
        case 'clientes':
            $tbDisplayTitle = 'Editar Cliente';
            break;
        case 'pedidos':
            $tbDisplayTitle = 'Editar Pedido';
            break;
    }

    $create->getInit($tbDisplayTitle);
    
    switch ($tb) {
        case 'produtos':
            $create->getInput('text', 'nome', 'nome', 'Nome', $r->Pr_Nome);
            $create->getTxtArea('desc', '3', 'Descrição', '100', $r->Pr_Desc);
            $create->getInput('text', 'preco', 'preco', 'Preço', $r->Pr_Preco);
            break;
        case 'clientes':
            $create->getInput('text', 'nome', 'nome', 'Nome', $r->C_Nome);
            $create->getInput('email', 'email', 'email', 'E-mail', $r->C_Email);
            $create->getInput('text', 'fone', 'fone', 'Telefone', $r->C_Fone);
            break;
        case 'pedidos':
            $create->getInput('text', 'c-id', 'c-id', 'ID Cliente', $r->C_Id);
            $create->getInput('text', 'pr-id', 'pr-id', 'ID Produto', $r->Pr_Id);
            break;
    }

    echo
    '<input type="hidden" name="tb" value="' . $tb . '">
    <input type="hidden" name="id-col-name" value="' . $idColName . '">
    <input type="hidden" name="id" value="' . $id . '">';
    
    $create->getEnd($tb);
    
 ?>