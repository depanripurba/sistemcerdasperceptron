<?php
// kumpulan variabel
$url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$url .= "://" . $_SERVER['HTTP_HOST'];
$url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

define('BASE_URL', $url);

// kumpulan fungsi
function Ceklogin()
{
	session_start();
	if (isset($_SESSION['login'])) {
	} else {
		echo "login tidak terdeteksi";
		header("location:" . BASE_URL . "login");
	}
}

//function inti di dalam perceptron
function prosesLatih($kode, $data, $model)
{
	//merubah target menjadi 1 atau -1
	$databaru = [];
	$banyakdata = 0;
	foreach ($data as $item) {
		$t = $item['kodeKerusakan'] == $kode ? 1 : -1;
		$item['T'] = $t;
		$databaru[] = $item;
		$banyakdata++;
	}
	$bias = 0;
	$treshold = 0;
	$learningrate = 1;
	$youtaray = [];
	$targetarray = [];
	$perulangancount = 0;
	//deklarasi bobot awal
	for ($i = 1; $i <= 32; $i++) {
		$bobot['w' . $i] = 0;
	}
	$berhenti = false;

	while ($berhenti == false) {
		$index = 0;
		foreach ($databaru as $data) {
			$yOut = 0;
			$y = $bias;
			for ($i = 1; $i <= 32; $i++) {
				$xw = $data['x' . $i] * $bobot['w' . $i];
				$y += $xw;
			}
			if ($y > $treshold) {
				$yOut = 1;
			} elseif ($y == 0) {
				$yOut = 0;
			} else {
				$yOut = -1;
			}
			$targetarray[$index] = $data['T'];
			$youtaray[$index] = $yOut;
			if ($yOut != $data['T']) {
				//maka terjadi perubahan bobot dan bias
				$kalibias = $learningrate * $data['T'];
				$bias = $bias + $kalibias;
				for ($i = 1; $i <= 32; $i++) {
					$perkalian = $learningrate * $data['T'] * $data['x' . $i];
					$bobot['w' . $i] = $bobot['w' . $i] + $perkalian;
				}
			}
			$index++;
		}
		//pengecekan kecocokan
		$kecocokan = 0;
		// $panjangaray = count()
		for ($i = 0; $i < count($youtaray); $i++) {
			if ($youtaray[$i] == $targetarray[$i]) {
				$kecocokan++;
			}
		}
		
		if ($kecocokan == count($youtaray)) {
			$berhenti = true;
		}
		$perulangancount++;
	}
	//akhir dari perulangan while;
	$model->addbobot($kode, $bobot, $bias,$banyakdata);
}
//fungsi diagnosa
function diagnosa($data)
{
	$kerusakan = [];
	$treshold = 0;
	foreach ($data[0] as $item) {
		$sigma = $item['bias'];
		$index = 1;
		foreach ($data[1] as $value) {
			$xw = $value * $item['w' . $index];
			$sigma += $xw;
			$index++;
		}
		if ($sigma > $treshold) {
			$kerusakan[] = $item['kodeKerusakan'];
		}
	}
	return $kerusakan;
}
//akhir fungsi dari sistem perceptron
