<?php

	/**
	 * 
	 */
	class Login extends Controllers{
		
		function __construct()
		{
			session_start();
			parent::__construct();
		}

		public function login(){
			$data['page_id']=1;
			$data['tag_page']='Home';
			$data['page_title']='Pagina pricipal';
			$data['page_name']='home';
			$data['page_content']='Lorem ipsum dolor sit ametm consectetur adipisicing elit';
			$this->views->getView($this,'Login',$data);
		}
		
		public function loginUser(){

			if ($_POST) {
				if (empty($_POST['txtEmail']) || empty($_POST['txtPassword'])) {
					$arrResponde = array('status'=>false, 'msg'=>'Error al insertar los datos..');
				}else{
					$strEmail = strtolower(strClean($_POST['txtEmail']));
					$strPassword = hash("SHA256",$_POST['txtPassword']);
					$requestUser = $this->model->loginUser($strEmail,$strPassword);

					if (empty($requestUser)) {
						$arrResponde = array('status'=>false, 'msg'=>'El usuario o contraseña son incorrectos..');
					}else{
						$arrData = $requestUser;
						if ($arrData['estado']==1) {
							$_SESSION['idUsuario'] = $arrData['id'];
							$_SESSION['nombreUsuario'] = $arrData['usuario'];
							$_SESSION['puestoUsuario'] = $arrData['cargo'];
							$_SESSION['correoUsuario'] = $arrData['correo'];
							$_SESSION['fotoUsuario'] = $arrData['img'];
							$_SESSION['divisionUsuario'] = $arrData['id_division'];
							$_SESSION['departamentoUsuario'] = $arrData['id_departamento'];
							$_SESSION['Sede'] = $arrData['id_sede'];
							$_SESSION['estadoUsuario'] = $arrData['estado'];
							$arrResponde = array('status'=>true, 'msg'=>'Bienvenido al sistema!!');
						}else{
							$arrResponde = array('status'=>false, 'msg'=>'El usuario esta inactivo..');
						}
					}
					
				}
				echo json_encode($arrResponde,JSON_UNESCAPED_UNICODE);
			}
			
			die();
		}

		

	}


?>