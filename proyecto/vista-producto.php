<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Ventas</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="css\sTabla01.css">
</head>
<body>
	<header><h1>Lista de Productos</h1><hr>
			<p><a href='frm-producto.php?action=Nuevo'>Crear nuevo Producto</a></p>
	</header>
	<main class="container">
		<table class="t-products">
			<caption></caption>
			<thead>
				<tr>
					<td>Codigo</td>
					<td>Nombre</td>
					<td>Precio</td>
					<td>Stock</td>
					<td>Categoria</td>
					<td>Empresa Proveedora</td>
					<td></td>
					<td></td>

				</tr>
			</thead>
			<tbody>				
				<?php
					$action = "Vista";
					include_once("controlador-producto.php");
					$ctrproducto = new ControladorProducto();
					$ctrproducto->Procesar($action);
				?>
			</tbody>
			<tfoot></tfoot>
		</table>
	</main>
	<footer><hr><p>Derechos Reservado</p></footer>
</body>
</html>