<?php

class Hasildiagnosamodel extends Purbamodel
{
	public function simpanhasil($data, $hasil)
	{
		$query1 = "";
		$query2 = "";
		foreach ($data as $item) {
			$query1 .= "," . $item;
		}
		foreach ($hasil as $item) {
			$query2 .= " " . $item;
		}
		$query2 = substr($query2, 1);
		$query2 = "'" . $query2 . "'";
		$tanggal = date("Y-m-d");
		$query = "INSERT INTO hasildiagnosa VALUES(null,'" . $tanggal . "','" . $_SESSION['login']['email'] . "'" . $query1 . "," . $query2 . ")";
		$hasil = $this->konek->query($query);
	}
	public function ambilriwayat()
	{
		$hak = $_SESSION['login']['hak'];
		if ($hak == 'admin') {
			$query = "SELECT * FROM hasildiagnosa";
		} else {
			$query = "SELECT * FROM hasildiagnosa WHERE email='" . $_SESSION['login']['email']."'";
		}
		$result = $this->konek->query($query);
		$dataarray = [];
		while ($data = mysqli_fetch_assoc($result)) {
			$dataarray[] = $data;
		}
		return $dataarray;
	}

	public function hapus($id)
    {
        $query = "DELETE FROM `hasildiagnosa` WHERE id=" . $id ;
        $berhasil = $this->konek->query($query);
        var_dump($berhasil);
        if ($berhasil) {
            header('location:' . BASE_URL . "riwayat");
        } else {
            echo "data gagal di hapus";
        }
    }
}
