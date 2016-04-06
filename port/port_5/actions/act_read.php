  <?php

    $tb = $_GET['tbl'];
    $idColName = $_GET['id-col-name'];
    $id = $_GET['id'];

    require_once '../inc/DB.php';
    $query = $handler->query('SELECT * FROM ' . $tb . ' WHERE ' . $idColName . '=' . $id);
    $r = $query->fetch(PDO::FETCH_OBJ);

    echo '<script src="assets/js/script.js"></script>';

    switch ($tb) {
        case 'produtos':
            echo
            '<div class="panel-wrapper-read">
                <div class="panel panel-default panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title"><strong class="title-read">Produto: </strong>' . $r->Pr_Nome . '</h3>
                  </div>
                  <div class="panel-body">
                      <p><strong>ID: </strong>' . $r->Pr_Id . '</p>
                      <p><strong>Nome: </strong>' . $r->Pr_Nome . '</p>
                      <p><strong>Desc: </strong>' . $r->Pr_Desc . '</p>
                      <p><strong>Preço: </strong>' . $r->Pr_Preco . '</p>
                  </div>
                </div>
                <a class="btn btn-default btn-see-all-read action-cancel" href="produtos" role="button">Ver Todos</a>
            </div>';
            break;
        case 'clientes':
            echo
            '<div class="panel-wrapper-read">
                <div class="panel panel-default panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title"><strong class="title-read">Cliente: </strong>' . $r->C_Nome . '</h3>
                  </div>
                  <div class="panel-body">
                      <p><strong>ID: </strong>' . $r->C_Id . '</p>
                      <p><strong>Nome: </strong>' . $r->C_Nome . '</p>
                      <p><strong>E-mail: </strong>' . $r->C_Email . '</p>
                      <p><strong>Telefone: </strong>' . $r->C_Fone . '</p>
                  </div>
                </div>
                <a class="btn btn-default btn-see-all-read action-cancel" href="clientes" role="button">Ver Todos</a>
            </div>';
            break;
        case 'pedidos':
            echo
            '<div class="panel-wrapper-read">
                <div class="panel panel-default panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title"><strong class="title-read">Pedido: </strong>' . $r->Pe_Id . '</h3>
                  </div>
                  <div class="panel-body">
                      <p><strong>ID: </strong>' . $r->Pe_Id . '</p>
                      <p><strong>Nome: </strong>' . $r->C_Id . '</p>
                      <p><strong>E-mail: </strong>' . $r->Pr_Id . '</p>
                  </div>
                </div>
                <a class="btn btn-default btn-see-all-read action-cancel" href="pedidos" role="button">Ver Todos</a>
            </div>';
            break;
    }

?>