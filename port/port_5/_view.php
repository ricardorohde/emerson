<?php

    function __autoload($class_name) {
        require_once 'classes/' . $class_name .'.php';  
    }

    $tb = $_GET['tb'];
    
    switch ($tb) {
        case 'produtos':
            $tbLabelParams = ['produtos', 'Novo Produto'];
            $colTitles = ['ID Produto', 'Nome Produto', 'Descrição Produto', 'Preço Produto', 'Ações'];
            $colNames = ['Pr_Id', 'Pr_Nome', 'Pr_Desc', 'Pr_Preco'];
            break;
        case 'clientes':
            $tbLabelParams = ['clientes', 'Novo Cliente'];
            $colTitles = ['ID Cliente', 'Nome Cliente', 'E-mail Cliente', 'Telefone Cliente', 'Ações'];
            $colNames = ['C_Id', 'C_Nome', 'C_Email', 'C_Fone'];
            break;
        case 'pedidos':
            $tbLabelParams = ['pedidos', 'Novo Pedido'];
            $colTitles = ['ID Pedido', 'ID Cliente', 'ID Produto'];
            $colNames = ['Pe_Id', 'C_Id', 'Pr_Id'];
            break;
        default:
            $tbLabelParams = ['pedidos', 'Novo Pedido'];
            $colTitles = ['ID Pedido', 'ID Cliente', 'ID Produto'];
            $colNames = ['Pe_Id', 'C_Id', 'Pr_Id'];
            break;
    }

    $view = new GetView();

    // Table Label (with 'create' button)
    $view->getTbLabel($tbLabelParams);
    
    // Table Initial Part
    $view->getTbInit();
	
	// Table Head
	$view->getTbHead($colTitles);
	
	// Table Body
	$view->getTbBody($colNames, $tb);
	
    // Table Ending Part
	$view->getTbEnd();
    
 ?>