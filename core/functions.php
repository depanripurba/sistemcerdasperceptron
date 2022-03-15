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

//function inti di dalam perceptron
	function prosesLatih($kode,$data){
		//merubah target menjadi 1 atau -1
		$databaru = [];
		foreach($data as $item){
			$t = $item['kodeKerusakan']==$kode?1:-1;
			$item['T'] = $t;
			$databaru[]=$item;
		}
		echo "ini adalah proses pelatihan data";
		echo "<br/>";
		$xw = [];
		$bias =0;
		
		//deklarasi bobot awal
		for($i = 1;$i<=32;$i++){
			$bobot['w'.$i] = 0;
		}
		for($i=1;$i<=32;$i++){
			echo "Ini adalah bobot X$i ".$bobot['w'.$i];
			echo "<br/>";
		}

		
	}

//akhir fungsi dari sistem perceptron
