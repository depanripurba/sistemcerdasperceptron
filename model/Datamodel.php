<?php 
	class Datamodel extends Purbamodel{
		public $tablename = "data";

		public function data(){
			$data = $this->konekdb();
			$array = ["satu","dua","tiga"];
			return $data;
		}


	} 

 ?>