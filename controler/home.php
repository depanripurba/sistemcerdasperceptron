<?php
require_once "model/Usermodel.php";
require_once "model/Chartmodel.php";
class Home extends Purbacontroler
{

	public function __construct()
	{
		Ceklogin();
	}
	public function index()
	{
		$datapel = new Chartmodel();
		$chartline = $datapel->getdatapel();
		$pengguna = new Usermodel();
		$char = $pengguna->hitung();
		$databody = [
			"pengguna"=>$char['pengguna'],
			"kerusakan"=>$char['kerusakan'],
			"pelatihan"=>$char['pelatihan'],
			"diagnosa"=>$char['diagnosa'],
			"chartline"=>$chartline
		];

		$data = [
			"menuAktif" => "Dashboard",
			"title" => "Halaman Dashboard",
			"y" => ["admin" => "0%", "user" => "0%"]
		];
		if ($_SESSION['login']['hak'] == 'admin') {
			$this->tampil("template/header", $data);
			$this->tampil("home", $databody);
			$this->tampil("template/footer", "");
		} else {
			$this->tampil("template/header", $data);
			$this->tampil("user", "");
			$this->tampil("template/footer", "");
		}
	}

	public function cek()
	{
		echo "this is home page with cek method";
	}
}
