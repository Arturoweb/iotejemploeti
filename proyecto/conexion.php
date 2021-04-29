<?php
	

	class Conexion{
		private $Datos;
		private $User;
		private $Pass;

		public function __construct($datos, $user, $pass){
			$this->Datos = $datos;
			$this->User = $user;
			$this->Pass = $pass;
				
     	}

     	public function Conectar(){
     		try
			{
				$cn = new PDO('mysql:host=localhost; dbname=' .$this->Datos, $this->User, $this->Pass);
				return $cn;
			}catch(PDOException $e){
				echo 'Error de conexion: '.$e->getMessage();
			}
     	}
		
     }
?>
