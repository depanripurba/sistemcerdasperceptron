<?php
class Kerusakanmodel extends Purbamodel
{
    public function addtodb($data)
    {
        $query = "INSERT INTO kerusakan VALUES('" . $data['kodeKerusakan'] . "','" . $data['kerusakan'] . "')";
        $hasil = $this->konek->query($query);
        var_dump($hasil);
        if ($hasil) {
            header("location:" . BASE_URL . "pelatihan");
        } else {
            echo "Kerusakan Gagal untuk ditambahkan";
        }
    }
    public function datapel()
    {
        $query = "SELECT * FROM kerusakan";
        $data = $this->konek->query($query);
        $hasil = [];
        while ($datadb = mysqli_fetch_assoc($data)) {
            $hasil[] = $datadb;
        }
        $bigkode = 0;
        if($hasil!=null){
            $hasillength = count($hasil);
            $bigkode = $hasil[$hasillength - 1]['kodeKerusakan'];
            $bigkode = substr($bigkode, 1) * 1;
        }
        $ceking = 1;
        $partend = "";
        $partone = "K00";
        foreach ($hasil as $value) {
            $substrak = substr($value['kodeKerusakan'], 1) * 1;
            if ($substrak === $ceking) {
            } else {
                $partend = $ceking;
                continue;
            }
            $ceking++;
        }
        if ($partend === "") {
            $partend = $bigkode + 1;
        }
        $KODEKER = $partone . $partend;
        $PANJANGKODE = strlen($KODEKER);
        if ($PANJANGKODE > 5) {
            $KODEKER = "K" . $partend;
        } elseif ($PANJANGKODE > 4) {
            $KODEKER = "K0" . $partend;
        }
        $databody = [
            "autokodeker" => $KODEKER,
            "datapel" => $hasil
        ];
        return $databody;
    }
    public function hapus($id)
    {
        $query = "DELETE FROM `kerusakan` WHERE kodeKerusakan='" . $id . "'";
        $berhasil = $this->konek->query($query);
        var_dump($berhasil);
        if ($berhasil) {
            header('location:' . BASE_URL . "/pelatihan");
        } else {
            echo "data gagal di hapus";
        }
    }
    public function update($data)
    {
        $query = "UPDATE `kerusakan` SET `namaKerusakan`='" . $data['kerusakan'] . "' WHERE `kodeKerusakan`='" . $data['kodeKerusakan'] . "'";
        $berhasil = $this->konek->query($query);
        var_dump($berhasil);
        if ($berhasil) {
            header('location:' . BASE_URL . "/pelatihan");
        } else {
            echo "data gagal di edit";
        }
    }
}
