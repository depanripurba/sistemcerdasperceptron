<?php 

class Diagnosa extends Purbacontroler{
    public function __construct()
    {
        Ceklogin();
    }
    public function index(){
        $data = [
            "menuAktif"=>"Diagnosa",
            "title"=>"Halaman Diagnosa",
            "y"=>["admin"=>"200%","user"=>"100%"]
        ];
        $this->tampil("template/header",$data);
        $this->tampil("Diagnosa","");
        $this->tampil("template/footer","");
    }
    public function tes(){
        echo "hai this is tes component";
        die;
    }
}