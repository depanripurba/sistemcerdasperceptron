<?php 
	class About extends Purbacontroler{
		public function __construct(){
			session_start();
			require_once "model/Datamodel.php";
			$model = new Datamodel();
			$this->data = $model->data();
			if(isset($_SESSION['name'])){
				echo "nama sudah diset";
			}
		
			echo "<br/>";
		}
		public $data = "Default";
		public function index(){
			echo "this is about page with index method";
		}
		public function add(){
			$this->tampil("about","DEPANRI PURBA");
			var_dump($this->data);

		}
	}
 ?>