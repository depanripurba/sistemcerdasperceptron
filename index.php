<?php 

require_once "core/Purbacontroler.php";
require_once "core/Purbamodel.php";
require_once "core/functions.php";


class Depanri{
	public $method = "index";
	public $controler = "home";
	public function __construct(){

		if(file_exists("controler/".$this->ambilurl()[0].".php")){
			$this->controler = $this->ambilurl()[0];
		}

		require_once "controler/".$this->controler.".php";
		$controler = new $this->controler();
		if(isset($this->ambilurl()[1])){
			if(method_exists($controler, $this->ambilurl()[1])){
				$this->method = $this->ambilurl()[1];
			}
		}
		$method = $this->method;
		$controler->$method();
	}

	public function ambilurl(){
		if(isset($_GET["url"])){
			return explode("/", $_GET["url"]);
			die;
		}
	}
}


$depan = new Depanri();


?>

