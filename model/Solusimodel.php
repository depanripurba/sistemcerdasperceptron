<?php

class Solusimodel extends Purbamodel
{
	public function simpansolusi($data, $kode)
	{
		$query = "DELETE FROM solusi WHERE kodeKerusakan='" . $kode . "'";
		$result = $this->konek->query($query);
		$pindah = true;
		if ($result) {
			foreach ($data as $index => $value) {
				foreach ($value as $cek) {
					$query1 = "INSERT INTO solusi(kodeKerusakan,jenis,aksi) VALUES(" . "'" . $kode . "','" . $index . "','" . $cek . "')";
					$this->konek->query($query1);					
				}
			}
		}
		return $pindah;
	}

	public function ambilsolusi($kode)
	{
		$query = "SELECT * FROM solusi WHERE kodeKerusakan='" . $kode . "'";
		$hasil = $this->konek->query($query);
		$result = [];
		while ($data = mysqli_fetch_assoc($hasil)) {
			$result[] = $data;
		}
		return $result;
	}
}
