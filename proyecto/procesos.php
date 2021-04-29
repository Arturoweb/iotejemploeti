<?php 
	include_once("controlador-producto.php");
	$ctrProducto =new ControladorProducto();
	if ($_GET) {
		$action=$_GET['action'];
	}else{
		$action = $_POST['txtAction'];
	}
	$ctrProducto->Procesar($action);
 ?>