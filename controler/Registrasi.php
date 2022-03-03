<?php 
require_once "model/Usermodel.php";

class Registrasi extends Purbacontroler{
	public function index(){
		$this->tampil("registrasi","");
	}
	public function regis(){
		$usermodel = new Usermodel();
		$usermodel->addtodb($_POST);
	}
}

?>