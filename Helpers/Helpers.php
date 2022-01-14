<?php


function base_url(){
	return BASE_URL;
}
function media(){
	return BASE_URL."/Assets";
}

function dep($data){
	$format = print_r('<pre>');
	$format = print_r($data);
	$format = print_r('</pre>');
	return $format;
}

function headerAdmin(){
	$view ="Views/Template/header_admin.php";
	require_once($view);
}
function footerAdmin(){
	$view ="Views/Template/footer_admin.php";
	require_once($view);
}
function headerLogin(){
	$view ="Views/Template/header_login.php";
	require_once($view);
}
function footerLogin(){
	$view ="Views/Template/footer_login.php";
	require_once($view);
}

function strClean($strCadena){
	$string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
	$string = trim($string);
	$string = stripslashes($string);
	$string = str_ireplace("<script>", "", $string);
	$string = str_ireplace("</script>", "", $string);
	$string = str_ireplace("<script src>", "", $string);
	$string = str_ireplace("<script type=>", "", $string);
	$string = str_ireplace("SELECT * FROM", "", $string);
	$string = str_ireplace("DELETE FROM", "", $string);
	$string = str_ireplace("INSERT INTO", "", $string);
	$string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
	$string = str_ireplace("DROP TABLE", "", $string);
	$string = str_ireplace("OR '1'='1'", "", $string);
	$string = str_ireplace('OR "1"="1"', "", $string);
	$string = str_ireplace('OR `1`=`1`', "", $string);
	$string = str_ireplace('OR ´1´=´1´' , "", $string);
	$string = str_ireplace("is NULL; --", "", $string);
	$string = str_ireplace("is null; --", "", $string);
	$string = str_ireplace("LIKE '", "", $string);
	$string = str_ireplace('LIKE "', "", $string);
	$string = str_ireplace("LIKE ´", "", $string);
	$string = str_ireplace("OR 'a'='a'", "", $string);
	$string = str_ireplace('OR "a"="a', "", $string);
	$string = str_ireplace("OR ´a´=´a", "", $string);
	$string = str_ireplace("--", "", $string);
	$string = str_ireplace("^", "", $string);
	$string = str_ireplace("[", "", $string);
	$string = str_ireplace("]", "", $string);
	$string = str_ireplace("==", "", $string);
	return $string;
}

function passGenerator($length=10){
	$pass='';
	$longitud=$length;
	$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	$longitudCadena = strlen($cadena);
	for ($i=1; $i <$longitud; $i++) { 
		$pos=rand(0,$longitudCadena-1);
		$pass .=substr($cadena,$pos,1);
	}
	return $pass;
}

//para cuando pasemos variables por url
function encriptar($string){
	$output = FALSE;
	$key=hash('sha256', SECRET_KEY);
	$iv=substr(hash('sha256', SECRET_IV), 0, 16);
	$output=openssl_encrypt($string, METHOD, $key,0,$iv);
	$output=base64_encode($output);
	return $output;
}

function desencriptar($string){
	$key=hash('sha256', SECRET_KEY);
	$iv=substr(hash('sha256', SECRET_IV), 0,16);
	$output=openssl_decrypt(base64_decode($string), METHOD, $key,0, $iv);
	return $output;
}

function obtenerSiguienteId($tabla){
	$consulta = "SELECT AUTO_INCREMENT FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'digici_full' AND   TABLE_NAME   = '$tabla'";
	$sel = MainModel::consultaSimple($consulta);
	$sigId = $sel->fetch_assoc();
	$sigId = $sigId['AUTO_INCREMENT'];

	return $sigId;
}
//fin encriptar cadenas por url


function token(){
	$r1=bin2hex(random_bytes(10));
	$r2=bin2hex(random_bytes(10));
	$r3=bin2hex(random_bytes(10));
	$r4=bin2hex(random_bytes(10));
	$token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
	return $token;
}

function formatMoney($cantidad){
	$cantidad = number_format($cantidad,2,SPD,SPM);
	return $cantidad;
}


?>