<?php
class Bobotmodel extends Purbamodel
{
	public function addbobot($kode, $bobot, $bias,$totaldata)
	{
		$cek = $this->konek->query("SELECT * FROM pembobotan WHERE kodeKerusakan='" . $kode . "'");
		$result = [];
		while ($data = mysqli_fetch_assoc($cek)) {
			$result[] = $data;
		}
		$stringbobot = '';
		$stringbobotup = '';
		foreach ($bobot as $index => $item) {
			$stringbobot .= ',' . $item;
			$stringbobotup .= ',' . $index . '=' . $item;
		}
		$stringbobotup = substr($stringbobotup, 1);
		$update = "UPDATE pembobotan SET " . $stringbobotup . ",bias=" . $bias .",totaldata=".$totaldata. " WHERE kodeKerusakan='" . $kode . "'";
		$insert = "INSERT INTO pembobotan VALUES('" . $kode . "'" . $stringbobot . "," . $bias .",".$totaldata. ")";
		$query = count($result) == 0 ? $insert : $update;
		$hasil = $this->konek->query($query);
		return $hasil;
	}

	public function recod()
	{
		$query = "SELECT kodeKerusakan,totaldata FROM pembobotan";
		$data = $this->konek->query($query);
		$hasil = [];
		while ($datadb = mysqli_fetch_assoc($data)) {
			$hasil[] = $datadb;
		}
		return $hasil;
	}
	public function ambilsemua()
	{
		$query = "SELECT * FROM pembobotan";
		$data = $this->konek->query($query);
		$hasil = [];
		while ($datadb = mysqli_fetch_assoc($data)) {
			$hasil[] = $datadb;
		}
		return $hasil;
	}
}
