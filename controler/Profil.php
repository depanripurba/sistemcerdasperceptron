<?php 

class Profil extends Purbacontroler{
	public function __construct()
	{
		Ceklogin();
	}

	public function index(){  
        $data = [
            "menuAktif" => "Dashboard",
            "title" => "Profil",
            "y" => ["admin" => "0%", "user" => "0%"]
        ];
        $this->tampil("template/header", $data);
        $this->tampil("profil", "");
        $this->tampil("template/footer", "");
	}
	public function update(){
		var_dump($_POST);
		echo "this is function update";
		die;
	}
}