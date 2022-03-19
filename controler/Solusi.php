<?php

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
		$data = [
			"menuAktif" => "Pelatihan",
			"title" => "Kelola Solusi ".$kode,
			"y" => ["admin" => "100%", "user" => "100%"]
		];
		$this->tampil("template/header", $data);
		$this->tampil("Solusi", $kode);
		$this->tampil("template/footer", "");
	}
}
