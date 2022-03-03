<?php 
// kumpulan variabel
$url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$url .= "://" . $_SERVER['HTTP_HOST'];
$url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

define('BASE_URL', $url);

// kumpulan fungsi
function Ceklogin(){
	session_start();
	if (isset($_SESSION['login'])) {
		
	}else{
		echo "login tidak terdeteksi";
		header("location:".BASE_URL."login");
	}
}




?>