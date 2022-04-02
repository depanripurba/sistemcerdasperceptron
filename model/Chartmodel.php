<?php 
class Chartmodel extends Purbamodel{
	public function getdatapel(){
		$cek = $this->konek->query("SELECT kodeKerusakan FROM kerusakan");
		$ar ="";
		$ar2 = null;
		while($data = mysqli_fetch_assoc($cek)){
			$ar .= "+".$data['kodeKerusakan'];
			$querytotal = mysqli_fetch_assoc($this->konek->query("SELECT count(kodeKerusakan) as total FROM datapelatihan WHERE kodeKerusakan='".$data['kodeKerusakan']."'"));
			$ar2.="+".$querytotal['total'];
		}
		$ar = substr($ar, 1);
		$ar2 = substr($ar2, 1);

		return [$ar,$ar2];
	}
}