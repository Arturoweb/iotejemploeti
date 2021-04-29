
		<?php
			include_once("modelo.php");
			$Producto = new Producto();
			
			

			$Producto->Codigo = $_GET['cod'];
			$Producto->Eliminar();	
		?>
