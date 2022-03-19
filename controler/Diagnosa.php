<?php
require_once "model/Gejalamodel.php";
require_once "model/Kerusakanmodel.php";
require_once "model/Bobotmodel.php";
class Diagnosa extends Purbacontroler
{
    public function __construct()
    {
        Ceklogin();
    }
    public function index()
    {
        $gejala = new Gejalamodel();
        $datagej = $gejala->selectgejala();
        $data = [
            "menuAktif" => "Diagnosa",
            "title" => "Halaman Diagnosa",
            "y" => ["admin" => "200%", "user" => "100%"]
        ];
        $this->tampil("template/header", $data);
        $this->tampil("Diagnosa", $datagej);
        $this->tampil("template/footer", "");
    }
    public function prosesdiagnosa()
    {
        $bobot = new Bobotmodel();
        $detail = new Kerusakanmodel();
        $allbobots = $bobot->ambilsemua();
        unset($_POST['submit']);
        $hasil = diagnosa([$allbobots,$_POST]);
        $detailhasil = $detail->ambilkerusakan($hasil);
        var_dump($detailhasil) ;
        die;
    }
}
