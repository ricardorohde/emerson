<?php
	class GetRowCount {
		function getCountPr() {
			require 'inc/DB.php';

			$query = $handler->query('SELECT * FROM produtos');
			$query->execute();
			$count = $query->rowCount();
			echo $count;
		}

		function getCountC() {
			require 'inc/DB.php';

			$query = $handler->query('SELECT * FROM clientes');
			$query->execute();
			$count = $query->rowCount();
			echo $count;
		}

		function getCountPe() {
			require 'inc/DB.php';

			$query = $handler->query('SELECT * FROM pedidos');
			$query->execute();
			$count = $query->rowCount();
			echo $count;
		}
	}
?>