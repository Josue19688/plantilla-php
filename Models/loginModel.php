<?php
	/**
	 * 
	 */
	class LoginModel extends Mysql{

		private $intIdUsuario;
		private $strEmail;
		private $strPassword;
		private $strToken;

		
		function __construct(){
			parent::__construct();
		}

		
		public function loginUser(string $email, string $password){

			$this->strEmail=$email;
			$this->strPassword=$password;
			$sql ="SELECT id,usuario,cargo, correo,img,id_division,id_departamento,id_sede,estado FROM T01_usuarios WHERE correo='$this->strEmail' AND contrasena='$this->strPassword' AND estado !=0";
			
			$request =$this->select($sql);

			return $request;
		}
	}
?>