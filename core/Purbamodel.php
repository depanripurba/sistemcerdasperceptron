<?php 
class Purbamodel{
	public $dbserver = "localhost:3307";
	public $dbuser = "root";
	public $dbpass = "";
	public $dbname = "scperceptron";
	public $konek; 
	public function __construct(){
		$this->konek = new Mysqli($this->dbserver,$this->dbuser,$this->dbpass,$this->dbname);
	}

}
?>