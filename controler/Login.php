<?php 
require_once "model/Usermodel.php";
class Login extends Purbacontroler{
	public function index(){
		$this->tampil("login","");
		if(isset($_POST['submit'])){
			echo "data dari form berhasil diambil";
		}
	}
	public function ceklogin(){
		if(isset($_POST)){
			$usermodel = new Usermodel();
			$usermodel->validate($_POST);
		}else{
			
		}
		
	}
	public function logout(){
		session_start();
		session_destroy();
		header("location:".BASE_URL,true,301);

	}
}

?>