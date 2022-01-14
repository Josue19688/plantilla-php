<?php
/**
 * 
 */
class Conexion{
	
	private $host='';
	private $user='';
	private $password='';
	private $db ='armeria';
	private $conect;
	function __construct(){
		$connectionString ='mysql:host='.$this->host.';dbname='.$this->db.';charset=utf8';
		try{
			$this->conect =new PDO($connectionString,$this->user,$this->password);
			$this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			$this->conect='Error de conexión';
			echo 'ERROR :'.$e->getMessage();
		}
	}

	public function conect(){
		return $this->conect;
	}
}
?>