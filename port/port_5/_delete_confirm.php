<?php
    
    echo '<script src="assets/js/script.js"></script>';
    
    $tb = $_GET['tb'];
    $idColName = $_GET['id-col-name'];
    $id = $_GET['id'];

    echo
    '<ul class="list-group confirm-dialog">
        <li class="list-group-item"><strong>Deletar Item</strong></li>
        <li class="list-group-item confirm-msg">
            <p>Tem certeza que deseja excluir esse registro?</p>
        </li>
        <li class="list-group-item confirm-btns">

            <a href="#" data-tbl="'. $tb .'" data-id-col-name="'. $idColName .'" data-id="'. $id .'"  class="btn btn-danger process-delete">Excluir</a>
            <a href="'. $tb .'" class="btn btn-default action-cancel">Cancelar</a>

        </li>
    </ul>';

?>