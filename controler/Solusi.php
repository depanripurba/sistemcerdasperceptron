<?php
require_once "model/Solusimodel.php";
require_once "model/Kerusakanmodel.php";
class Solusi extends Purbacontroler
{
	public function __construct()
	{
		Ceklogin();
	}
	public function index(){
		$kerusakan = new Kerusakanmodel();
		$kode = $kerusakan->getKodeker();
		$detailhasil = $kerusakan->ambilkerusakan($kode);
		$data = [
			"menuAktif" => "Solusi",
			"title" => "Halaman Solusi Kerusakan ",
			"y" => ["admin" => "400%", "user" => "300%"]
		];
		$this->tampil("template/header", $data);
		$this->tampil("Solusiinti", $detailhasil);
		$this->tampil("template/footer", "");
	}
	public function kelolasolusi($kode)
	{
		if ($_SESSION['login']['hak'] != 'admin') {
			header("location:" . BASE_URL . "dashboard");
		}
		$solusi = new Solusimodel();
		$solusiker = $solusi->ambilsolusi($kode);
		$databody = [
			"kode" => $kode,
			"solusi" => $solusiker
		];
		$data = [
			"menuAktif" => "Pelatihan",
			"title" => "Kelola Solusi " . $kode,
			"y" => ["admin" => "100%", "user" => "100%"]
		];
		$this->tampil("template/header", $data);
		$this->tampil("Solusi", $databody);
		$this->tampil("template/footer", "");
	}
	public function simpansolusi()
	{
		$solusi = new Solusimodel();
		$kode = $_POST['kode'];
		unset($_POST['kode']);
		$berhasil = $solusi->simpansolusi($_POST, $kode);
		if ($berhasil) {
			header("location:" . BASE_URL . "solusi/kelolasolusi/" . $kode);
		} else {
			echo "Gagal ditambahkan";
		}
	}
	public function updatesolusi()
	{
		$kode = $_POST['kode'];
		unset($_POST['kode']);
		$solusi = new Solusimodel();
		$berhasil = $solusi->simpansolusi($_POST, $kode);
		if ($berhasil) {
			header("location:" . BASE_URL . "solusi/kelolasolusi/" . $kode);
		} else {
			echo "Gagal ditambahkan";
		}
	}
	public function ajax($ode){
		$kerusakan = new Kerusakanmodel();
		$kode = $kerusakan->getKodekerlike($ode);
		$detailhasil = $kerusakan->ambilkerusakan($kode);
		echo json_encode($detailhasil);
	}
}
