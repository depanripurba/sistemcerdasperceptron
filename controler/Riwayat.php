<?php
require_once "model/Hasildiagnosamodel.php";
require_once "model/Kerusakanmodel.php";
require_once "model/Gejalamodel.php";

class Riwayat extends Purbacontroler
{
    public function __construct()
    {
        Ceklogin();
    }
    public function index()
    {
        $databody = new Hasildiagnosamodel();
        $databody = $databody->ambilriwayat();

        $data = [
            "menuAktif" => "Riwayat",
            "title" => "Riwayat Diagnosa",
            "y" => ["admin" => "300%", "user" => "200%"]
        ];
        $this->tampil("template/header", $data);
        $this->tampil("Riwayat", $databody);
        $this->tampil("template/footer", "");
    }
    public function detail($data)
    {
        $dataaray = explode("[]", $data);
        $hasil = explode(" ", $dataaray[0]);
        $centang = explode(",", $dataaray[1]);
        $detail = new Kerusakanmodel();
        $ambilgejala = new Gejalamodel();
        $gejalacentang = $ambilgejala->centang($centang);
        $detailhasil = $detail->ambilkerusakan($hasil);
        $hasildiagnosa = [
            "hasil" => $detailhasil,
            "gejalacentang" => $gejalacentang,
            "url"=>$data,
        ];
        if($hasil[0]==null){
           $hasildiagnosa['hasil'] = []; 
        }
        
        $data = [
            "menuAktif" => "Riwayat",
            "title" => "Detail Riwayat",
            "y" => ["admin" => "300%", "user" => "200%"]
        ];
        $this->tampil("template/header", $data);
        $this->tampil("Detailriwayat", $hasildiagnosa);
        $this->tampil("template/footer", "");
    }
    public function hapus($id)
    {
        $riwayat = new Hasildiagnosamodel();
        $riwayat->hapus($id);
    }
}
