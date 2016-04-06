<?php
    function __autoload($class_name) {
        require_once 'classes/' . $class_name .'.php';  
    }
    
    $tb = $_GET['tb'];
    
    $create = new GetCreate();

    switch ($tb) {
        case 'produtos':
            $tbDisplayTitle = 'Criar Novo Produto';
            break;
        case 'clientes':
            $tbDisplayTitle = 'Criar Novo Cliente';
            break;
        case 'pedidos':
            $tbDisplayTitle = 'Criar Novo Pedido';
            break;
    }

    $create->getInit($tbDisplayTitle);
    
    switch ($tb) {
        case 'produtos':
            $create->getInput('text', 'nome', 'nome', 'Nome');
            $create->getTxtArea('desc', '3', 'Descrição', '100');
            $create->getInput('text', 'preco', 'preco', 'Preço');
            break;
        case 'clientes':
            $create->getInput('text', 'nome', 'nome', 'Nome');
            $create->getInput('email', 'email', 'email', 'E-mail');
            $create->getInput('text', 'fone', 'fone', 'Telefone');
            break;
        case 'pedidos':
            $create->getInput('text', 'c-id', 'c-id', 'ID Cliente');
            $create->getInput('text', 'pr-id', 'pr-id', 'ID Produto');
            break;
    }

    echo
    '<input type="hidden" name="tb" value="' . $tb . '">';
    
    $create->getEnd($tb);
    
 ?>