<?php 
class Purbamodel{
	public $dbserver = "localhost";
	public $dbuser = "root";
	public $dbpass = "root";
	public $dbname = "scperceptron";
	public $konek; 
	public function __construct(){
		$this->konek = new Mysqli($this->dbserver,$this->dbuser,$this->dbpass,$this->dbname);
	}

}
