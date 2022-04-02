<?php
require_once "model/Gejalamodel.php";
require_once "model/Kerusakanmodel.php";
require_once "model/Bobotmodel.php";
require_once "model/Solusimodel.php";
require_once "model/Hasildiagnosamodel.php";
class Diagnosa extends Purbacontroler
{
    public function __construct()
    {
        Ceklogin();
    }
    public function index()
    {
        if (isset($_SESSION['hasildiagnosa'])) {
            header('location:' . BASE_URL . "diagnosa/prosesdiagnosa");
        } else {
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
    }
    public function prosesdiagnosa()
    {
        $data = [
            "menuAktif" => "Diagnosa",
            "title" => "Hasil Diagnosa",
            "y" => ["admin" => "200%", "user" => "100%"]
        ];
        if (isset($_SESSION['hasildiagnosa'])) {
            $this->tampil("template/header", $data);
            $this->tampil("hasildiagnosa", "");
            $this->tampil("template/footer", "");
        } else {
            $bobot = new Bobotmodel();
            $detail = new Kerusakanmodel();
            $hasildiag = new Hasildiagnosamodel();
            $allbobots = $bobot->ambilsemua();
            unset($_POST['submit']);
            $gejalacentang = [];
            foreach ($_POST as $index => $item) {
                if ($item == 1) {
                    $gejalacentang[] = $index;
                }
            }
            $ambilgejala = new Gejalamodel();
            $gejalacentang = $ambilgejala->centang($gejalacentang);
            $hasil = diagnosa([$allbobots, $_POST]);
            $detailhasil = $detail->ambilkerusakan($hasil);
            $hasildiag->simpanhasil($_POST,$hasil);
            $hasildiagnosa = [
                "hasil" => $detailhasil,
                "gejalacentang" => $gejalacentang
            ];
            $_SESSION['hasildiagnosa'] = $hasildiagnosa;
            $this->tampil("template/header", $data);
            $this->tampil("hasildiagnosa", "");
            $this->tampil("template/footer", "");
        }
    }
    public function clearhasil()
    {
        unset($_SESSION['hasildiagnosa']);
        if (!isset($_SESSION['hasildiagnosa'])) {
            header('location:' . BASE_URL . "diagnosa");
        }
    }
}
