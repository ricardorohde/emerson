<?php
    
    echo '<script src="assets/js/script.js"></script>';
    
    require_once '../inc/DB.php';

    $tb = $_GET['tb'];
    $idColName = $_GET['id-col-name'];
    $id = $_GET['id'];

    $query = $handler->prepare('DELETE FROM ' . $tb . ' WHERE ' . $idColName . ' = :id');
    $query->bindParam(':id', $id);
    $query->execute();

    echo
    '<div class="alert alert-success" role="alert">
        <p>' . $query->rowCount() . ' registro excluído: ID ' . $id . '</p>
    </div>'.
            
    '<a href="'. $tb .'" class="btn btn-default btn-see-all action-cancel" role="button">Ver todos</a>';

?>