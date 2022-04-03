<?php
require_once "model/Usermodel.php";
class Profil extends Purbacontroler
{
	public function __construct()
	{
		Ceklogin();
	}

	public function index()
	{
		$data = [
			"menuAktif" => "Dashboard",
			"title" => "Profil",
			"y" => ["admin" => "0%", "user" => "0%"]
		];
		$this->tampil("template/header", $data);
		$this->tampil("profil", "");
		$this->tampil("template/footer", "");
	}
	public function update()
	{
		$statusMsg = '';
		$namafile = explode(".", $_POST['email']);
		//file upload path
		$targetDir = "assets/profil/";
		$fileName = basename($_FILES["file"]["name"]);
		$fileName = explode(".", $fileName);
		$fileName = $namafile[0] . "." . $fileName[1];
		$targetFilePath = $targetDir . $fileName;
		$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
		$files = glob("assets/profil/*");

		// foreach($files as $item){
		// 	if($item=='assets/profil/depanripurba@gmail\.jpg');
		// }

		if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
			//allow certain file formats
			$allowTypes = array('jpg');
			if (in_array($fileType, $allowTypes)) {
				//hapus file sebelumnya
				if (count($files) == 0) {
					echo "Data Kosong";
				} else {
					foreach ($files as $item) {
						if ($item == 'assets/profil/depanripurba@gmail.jpg')
						 unlink($item);
					}
				}
				//pindahkan file ke folder asset profil
				if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
					$statusMsg = "The file " . $fileName . " has been uploaded.";
				} else {
					$statusMsg = "Sorry, there was an error uploading your file.";
				}
			} else {
				$statusMsg = 'Mohon maaf ekstensi hanya jpg';
			}
		}

		//display status message
		if ($_POST['username'] != "") {
			$upnama = new Usermodel();
			if ($upnama->upnama($_POST['username'])) {
				$_SESSION['login']['username'] = $_POST['username'];
				header("location:" . BASE_URL);
			}
		}
		echo $statusMsg;
	}
}
