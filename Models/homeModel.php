<?php
	/**
	 * 
	 */
	class homeModel extends Mysql{
		
		function __construct(){
			parent::__construct();
		}

		protected function setUser(string $nombre, int $edad){
			$query_insert ="INSERT INTO T01_usuarios(nombre, edad) VALUES(?,?)";
			$arrData =array($nombre,$edad);
			$request_insert = $this->insert($query_insert,$arrData);
			return $request_insert;
		}

		protected function getUsuario($id){
			$sql = "SELECT * FROM T01_usuarios WHERE id=$id";
			$request = $this->select($sql);
			return $request;
		}

		protected function updateUser(int $id, string $nombre,int $edad){
			$sql ="UPDATE T01_usuarios SET nombre=? ,edad=? WHERE id=$id";
			$arrData = array($nombre,$edad);
			$request =$this->update($sql,$arrData);
			return $request;

		}

		protected function getUsers(){
			$sql = "SELECT * FROM T01_usuarios";
			$request = $this->select_all($sql);
			return $request;
		}

		protected function deleteUser($id){
			$sql ="DELETE  FROM T01_usuarios WHERE id=$id";
			$request = $this->delete($sql);
			return $request;
		}

	}
?>