<?php
require_once "model/Kerusakanmodel.php";
class Pelatihan extends Purbacontroler{
    public function __construct()
    {
        Ceklogin();
        if($_SESSION['login']['hak']!='admin'){
            header("location:".BASE_URL."dashboard");
        }
    }
    public function index(){
        $data = [
            "menuAktif"=>"PELATIHAN",
            "title"=>"Halaman Pelatihan",
            "y"=>["admin"=>"100%","user"=>"100%"]
        ];
        $kerusakan = new Kerusakanmodel();
        $datapel = $kerusakan->datapel();
        $this->tampil("template/header",$data);
        $this->tampil("Pelatihan",$datapel);
        $this->tampil("template/footer","");
    }
    public function latih(){
        $data = [
            "menuAktif"=>"PELATIHAN",
            "title"=>"Halaman Pelatihan",
            "y"=>["admin"=>"100%","user"=>"100%"]
        ];
        $this->tampil("template/header",$data);
        $this->tampil("latih","");        
        $this->tampil("template/footer","");
    }
    public function addlatih(){
            $kerusakan = new Kerusakanmodel();
            $kerusakan->addtodb($_POST);
    }
}