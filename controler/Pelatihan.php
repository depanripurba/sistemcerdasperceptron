<?php
require_once "model/Kerusakanmodel.php";
require_once "model/Gejalamodel.php";
require_once "model/Pelatihanmodel.php";
require_once "model/Bobotmodel.php";
class Pelatihan extends Purbacontroler
{
    public function __construct()
    {
        Ceklogin();
        if ($_SESSION['login']['hak'] != 'admin') {
            header("location:" . BASE_URL . "dashboard");
        }
    }
    public function index()
    {
        $bobot = new Bobotmodel();
        $recognice = $bobot->recod();
        $data = [
            "menuAktif" => "Pelatihan",
            "title" => "Halaman Pelatihan",
            "y" => ["admin" => "100%", "user" => "100%"]
        ];
        $kerusakan = new Kerusakanmodel();
        $datapel = $kerusakan->datapel();
        $databody=[
            "recognice"=>$recognice,
            "datapel"=>$datapel
        ];
        $this->tampil("template/header", $data);
        $this->tampil("Pelatihan", $databody);
        $this->tampil("template/footer", "");
    }
    public function latih($params, $method)
    {
        if ($method != null) {
            $gejala = new Gejalamodel();
            $datagej = $gejala->selectgejala();
            $databody = [
                "kodeKerusakan" => $params,
                "gejala" => $datagej
            ];
            $data = [
                "menuAktif" => "Pelatihan",
                "title" => "Tambah data",
                "y" => ["admin" => "100%", "user" => "100%"]
            ];
            $this->tampil("template/header", $data);
            $this->tampil("tambahdatalatih", $databody);
            $this->tampil("template/footer", "");
        } else {
            $pelatihan = new Pelatihanmodel();
            $kode = explode(" ", $params);
            if (isset($kode[1])) {
                $datapel = $pelatihan->getwhere($params, true);
                $databody = [
                    "kodeKerusakan" => $kode[0],
                    "datapel" => $datapel,
                    "selected" => "all"
                ];
            } else {
                $datapel = $pelatihan->getwhere($params, false);
                $databody = [
                    "kodeKerusakan" => $kode[0],
                    "datapel" => $datapel,
                    "selected" => $kode[0]
                ];
            }
            $data = [
                "menuAktif" => "Pelatihan",
                "title" => "Halaman Pelatihan",
                "y" => ["admin" => "100%", "user" => "100%"]
            ];
            $this->tampil("template/header", $data);
            $this->tampil("latih", $databody);
            $this->tampil("template/footer", "");
        }
    }
    public function detaildatalatih($array)
    {
        $params = explode(" ", $array)[0];
        $id = explode(" ", $array)[1];
        $gejala = new Gejalamodel();
        $datagej = $gejala->selectgejala();
        $data = [
            "menuAktif" => "Pelatihan",
            "title" => "Detail data latih",
            "y" => ["admin" => "100%", "user" => "100%"]
        ];
        $pelatihan = new Pelatihanmodel();
        $datapel = $pelatihan->getwhereid($id);
        $databody = [
            "kodeKerusakan" => $params,
            "gejala" => $datagej,
            "datapel" => $datapel
        ];
        $this->tampil("template/header", $data);
        $this->tampil("Detaildatalatih", $databody);
        $this->tampil("template/footer", "");
    }

    public function Editdatalatih($array)
    {
        $params = explode(" ", $array)[0];
        $id = explode(" ", $array)[1];
        $gejala = new Gejalamodel();
        $datagej = $gejala->selectgejala();
        $data = [
            "menuAktif" => "Pelatihan",
            "title" => "Edit data latih",
            "y" => ["admin" => "100%", "user" => "100%"]
        ];
        $pelatihan = new Pelatihanmodel();
        $datapel = $pelatihan->getwhereid($id);
        $databody = [
            "kodeKerusakan" => $params,
            "gejala" => $datagej,
            "datapel" => $datapel
        ];
        $this->tampil("template/header", $data);
        $this->tampil("Editdatalatih", $databody);
        $this->tampil("template/footer", "");
    }
    public function prosesdata($kodeker)
    {
        $bobot = new Bobotmodel();
        $pelatihan = new Pelatihanmodel();
        $datapel = $pelatihan->getwhere($kodeker, true);
        prosesLatih($kodeker, $datapel, $bobot);
    }

    public function addlatihtodb()
    {
        $pelatihan = new Pelatihanmodel();
        unset($_POST['submit']);
        $pelatihan->addtodb($_POST);
    }
    public function updatedatalatih($params)
    {
        $pelatihan = new Pelatihanmodel();
        unset($_POST['submit']);
        $pelatihan->updatetodb($_POST, $params);
    }

    public function hapus($id)
    {
        $kerusakan = new Kerusakanmodel();
        $kerusakan->hapus($id);
    }
    public function edit()
    {
        $kerusakan = new Kerusakanmodel();
        $kerusakan->update($_POST);
    }
    public function addlatih()
    {
        $kerusakan = new Kerusakanmodel();
        $kerusakan->addtodb($_POST);
    }
}
