<!DOCTYPE html>
<html>
<head>
	<title>Crear nuevo Producto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css\sForm.css">
</head>
<body>
	<header><h2>Registro de nuevo Producto</h2></header>

	<?php

		include_once("controlador-producto.php");
		$ctrProducto =new ControladorProducto();
		$action = $_GET['action'];
		if ($action =="Buscar") {
			$datos = $ctrProducto->Procesar($action);
			$action="Editar";
			$cod = $datos->Codigo;
			$nom = $datos->Nombre;
			$cat = $datos->Categoria;
			$prv = $datos->Proveedor;
			$pre = $datos->Precio;
			$stk = $datos->Stock;
			
		}elseif ($action=="Nuevo") {
			$action="Crear";
			$cod = "";
			$nom = "";
			$cat = "";
			$prv = "";
			$pre = "";
			$stk = "";
		}


	?>

	<main>

		<form method="POST" action="procesos.php">
			<input type="text" name="txtAction" value=<?php echo $action; ?>>
			<input type="text" name="txtCod" value=<?php echo $cod; ?>>
			<p>
				<label>Nombre del Producto:</label>
				<input type="text" name="txtNom" placeholder="Nombre del Producto" value=<?php echo $nom; ?>>
			</p>
			<p>
				<label>Categoria:</label>
				<input type="text" name="txtCat" placeholder="Categoria del Producto" value=<?php echo $cat; ?>>
				
			</p>
			<p>
				<label>Proveedor:</label>
				<input type="text" name="txtPrv" placeholder="Proveedor del Producto" value=<?php echo $prv; ?>>
			</p> 
			<p>
				<label>Precio Unitario:</label>
				<input type="number" step="any" name="txtPre" min="0" placeholder="Precio" value=<?php echo $pre; ?>>
			</p>
			<p>
				<label>Stock:</label>
				<input type="number" name="txtStk" min="0" placeholder="Unidades en Stock" value=<?php echo $stk; ?>>
			</p>
			<input type="submit" name="" value="Guardar">
			
		</form>

	</main>
	<footer></footer>
</body>
</html>