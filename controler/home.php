<?php 
	class Home extends Purbacontroler{
		
		public function __construct(){
			Ceklogin();
		}
		public function index(){
			$data = [
				"menuAktif"=>"Dashboard",
				"title"=>"Halaman Dashboard",
				"y"=>["admin"=>"0%","user"=>"0%"]
			];
			$this->tampil("template/header",$data);
			$this->tampil("home","");
			$this->tampil("template/footer","");
		}

		public function cek(){
			echo "this is home page with cek method";
		}
	}
 ?>