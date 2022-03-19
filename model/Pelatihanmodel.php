<?php
class Pelatihanmodel extends Purbamodel
{
    public function addtodb($data)
    {
        $indeks = "";
        $values = "";
        foreach($data as $key=>$item){
            $indeks.=",`".$key."`";
            $values.=",'".$item."'";
        }
        $indeks = substr($indeks,1);
        $values = substr($values,1);
       //batas algoritma baru
        $query = "INSERT INTO `datapelatihan`(".$indeks.") VALUES(".$values.")";
            $hasil = $this->konek->query($query);
            var_dump($hasil);
            if ($hasil) {
                header("location:" . BASE_URL . "pelatihan/latih/".$data['kodeKerusakan']);
            } else {
                echo "Kerusakan Gagal untuk ditambahkan";
            }
        }

        public function updatetodb($data,$id)
        {
            $querypart = "";
            foreach($data as $key=>$item){
                $querypart.=",`".$key."`='".$item."'";
            }
            $querypart = substr($querypart,1);
       //batas algoritma baru
            $query = "UPDATE `datapelatihan` SET ".$querypart." WHERE `id`=".$id;
            $hasil = $this->konek->query($query);
            if ($hasil) {
                header("location:" . BASE_URL . "pelatihan/latih/".$data['kodeKerusakan']);
            } else {
                echo "Kerusakan Gagal untuk ditambahkan";
            }
        }

        public function getwhere($params,$all){
            $params = explode(" ",$params);
            $query = "SELECT * FROM datapelatihan WHERE `kodeKerusakan`='".$params[0]."'";
            $data = $this->konek->query($query);   
            $hasil = [];
            while($datadb = mysqli_fetch_assoc($data)){
                $hasil[] = $datadb; 
            }
            if($all===true){
                $query1 = "SELECT * FROM datapelatihan";
                $data1 = $this->konek->query($query1);
                while($datadb = mysqli_fetch_assoc($data1)){
                    if($datadb['kodeKerusakan']!=$params[0]){
                        $hasil[]=$datadb;
                    }
                }
            }
            return $hasil;
        }
        
        public function getwhereid($params){
            $query = "SELECT * FROM datapelatihan WHERE `id`='".$params."'";
            $data = $this->konek->query($query);
            $hasil = [];
            while($datadb = mysqli_fetch_assoc($data)){
                $hasil[] = $datadb; 
            }
            return $hasil;
        }
    }
