<?php
class Gejalamodel extends Purbamodel
{
    public function selectgejala()
    {
        $query = "SELECT * FROM gejala";
        $data = $this->konek->query($query);
        $hasil = [];
        $x = 1;
        while ($datadb = mysqli_fetch_assoc($data)) {
            $hasil[] = $datadb;
        }
        $hasilbaru = [];
        foreach ($hasil as $item) {
            foreach ($hasil as $item) {
                if ($item['kodeGejala'] === "x" . $x) {
                    $hasilbaru[] = $item;
                }
            }
            $x++;
        }
        return $hasilbaru;
    }
    public function centang($data)
    {
        $query = "SELECT * FROM gejala";
        $result = $this->konek->query($query);
        $hasil = [];
        while ($datadb = mysqli_fetch_assoc($result)) {
            $hasil[] = $datadb;
        }
        $hasilbaru = [];
        foreach ($data as $item) {
            foreach ($hasil as $value) {
                if ($item == $value['kodeGejala']) {
                    $hasilbaru[] = $value;
                }
            }
        }
        return $hasilbaru;
    }
}
