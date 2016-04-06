<?php

    class GetView {
        function getTbLabel($tbLabelParams) {
            $tb = $tbLabelParams[0];
            $btnInner = $tbLabelParams[1];

            echo
            '<script src="assets/js/script.js"></script>'.
			'<div class="tb-label-holder">
				<h4 class="tb-label"><strong>'. $tb .'</strong></h4>
				<a href="'. $tb .'" class="btn btn-primary action-create">'. $btnInner .'</a>
			</div>';
        }
		
		function getTbInit() {
			echo
			'<div class="table-responsive">
				<table class="table table-striped">
					<caption class="tb-caption-view"><strong>Pedidos</strong></caption>';
		}
		
		function getTbHead($colTitles){
			$count = count($colTitles);

			echo
			'<thead>
				<tr>';

			for ($i=0; $i < $count; $i++) {
				echo '<th>' . $colTitles[$i] . '</th>'; 
			}

			echo
				'</tr>
			</thead>';
		}
				
		function getTbBody($colNames, $tb) {
			$count = count($colNames);

			require_once 'inc/DB.php';
			$query = $handler->query('SELECT * FROM ' . $tb);

			echo
			'<tbody>';
			
			while ($r = $query->fetch(PDO::FETCH_OBJ)) {				
				echo
				'<tr>';
				
				// Get all columns
				for ($i=0; $i < $count; $i++) {
					echo '<td>' . $r->$colNames[$i] . '</td>';
				}
				
				// Get ID Column Name & ID
				$idColName = $colNames[0];
				$id = ($r->$idColName);

				// Get Action-Buttons column
				echo    
				'<td style="width: 250px">
					<a href="#" data-tbl="'. $tb .'" data-id-col-name="'. $idColName .'" data-id="'. $id .'" class="btn btn-success btn-xs btn-action action-read">Visualizar</a>

					<a href="#" data-tbl="'. $tb .'" data-id-col-name="'. $idColName .'" data-id="'. $id .'"  class="btn btn-warning btn-xs btn-action action-update">Editar</a>

					<a href="#" data-tbl="'. $tb .'" data-id-col-name="'. $idColName .'" data-id="'. $id .'" class="btn btn-danger btn-xs btn-action action-delete">Excluir</a>
				</td>';
				
				echo
				'</tr>';
			}
			
			echo
			'</tbody>';
		}
		
		function getTbEnd() {
			echo
				'</table>
    		</div><!-- /.table-responsive -->';
		}
	}
	
?>