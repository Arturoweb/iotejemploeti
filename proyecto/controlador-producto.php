<?php 

	// Productos

	/**
	 * 
	 */
	include_once("modelo.php");

	class ControladorProducto
	{
		
		function __construct()
		{
			
		}

		public function Procesar($action){

			$Producto = new Producto();
				if ($action=="Buscar") {
					$Producto->Codigo=$_GET['cod'];
					$Producto->Buscar();

					return $Producto;
				}elseif ($action == "Eliminar") {
					$Producto->Codigo=$_GET['cod'];
					$Producto->Eliminar();
				}elseif ($action == "Crear") {
					$Producto->Nombre = $_POST['txtNom'];
					$Producto->Categoria = $_POST['txtCat'];
					$Producto->Proveedor = $_POST['txtPrv'];
					$Producto->Precio = $_POST['txtPre'];
					$Producto->Stock = $_POST['txtStk'];
					$Producto->Guardar();
				}elseif ($action == "Editar") {
					$Producto->Codigo=$_POST['txtCod'];
					$Producto->Nombre = $_POST['txtNom'];
					$Producto->Categoria = $_POST['txtCat'];
					$Producto->Proveedor = $_POST['txtPrv'];
					$Producto->Precio = $_POST['txtPre'];
					$Producto->Stock = $_POST['txtStk'];
					$Producto->Actualizar();

				}elseif ($action=="Vista") {
					echo $Producto->Vista();
				}



		}
	}
?>