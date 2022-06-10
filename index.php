<?php 
require_once "core/Purbacontroler.php";
require_once "core/Purbamodel.php";
require_once "core/functions.php";
class Purba{
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
		$var1 = "";
		$var2 = "";
		if(isset($this->ambilurl()[2])){
			$var1 = $this->ambilurl()[2];
		}
		if(isset($this->ambilurl()[3])){
			$var2 = $this->ambilurl()[3];
		}
		$method = $this->method;
		$controler->$method($var1,$var2);
	}

	public function ambilurl(){
		if(isset($_GET["url"])){
			return explode("/", $_GET["url"]);
		}else{
			return ["null"];
		}
	}
}
$depanri = new Purba();
?>

