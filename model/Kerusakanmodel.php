<?php 
    class Kerusakanmodel extends Purbamodel{
        public function addtodb($data){
            $query = "INSERT INTO kerusakan VALUES('".$data['kodeKerusakan']."','".$data['kerusakan']."')";
            $hasil = $this->konek->query($query);
            var_dump($hasil);
            if($hasil){
                header("location:".BASE_URL."pelatihan");
            }else{
                echo "Kerusakan Gagal untuk ditambahkan";
            }
        }
        public function datapel(){
            $query = "SELECT * FROM kerusakan";
            $data = $this->konek->query($query);
            $hasil = [];
            while($datadb = mysqli_fetch_assoc($data)){
                $hasil[] = $datadb; 
            }
            return $hasil;
        }
    }
?>