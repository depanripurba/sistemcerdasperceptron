<?php 

class Riwayat extends Purbacontroler{
    public function __construct()
    {
        Ceklogin();
    }
    public function index(){
        $data = [
            "menuAktif"=>"RIWAYAT DIAGNOSA",
            "title"=>"Riwayat Diagnosa",
            "y"=>["admin"=>"300%","user"=>"200%"]
        ];
        $this->tampil("template/header",$data);
        $this->tampil("Riwayat","");
        $this->tampil("template/footer","");
    }
}