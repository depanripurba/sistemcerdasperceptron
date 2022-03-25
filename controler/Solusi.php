<?php
require_once "model/Solusimodel.php";
class Solusi extends Purbacontroler
{
	public function __construct()
	{
		Ceklogin();
		if ($_SESSION['login']['hak'] != 'admin') {
			header("location:" . BASE_URL . "dashboard");
		}
	}
	public function index($kode)
	{
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
			header("location:" . BASE_URL . "solusi/index/" . $kode);
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
			header("location:" . BASE_URL . "solusi/index/" . $kode);
		} else {
			echo "Gagal ditambahkan";
		}
	}
}
