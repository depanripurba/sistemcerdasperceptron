<?php
require_once "model/Usermodel.php";
class Login extends Purbacontroler
{
	public function __construct()
	{
		session_start();
	}
	public function index()
	{
		if (isset($_SESSION['login'])) {
			header('location:' . BASE_URL);
		} else {
			$this->tampil("login", "");
		}
	}
	public function ceklogin()
	{
		if (isset($_POST)) {
			$usermodel = new Usermodel();
			$usermodel->validate($_POST);
		} else {
		}
	}

	public function keluar()
	{
		session_destroy();
		header('location:' . BASE_URL);
	}
}
