<?php 

class Usermodel extends Purbamodel{

	public function addtodb($data){
		// cek ke db
		$queryuser = "SELECT * FROM user Where email = '".$data['email']."'";
		$queryadmin = "SELECT email FROM admin Where email = '".$data['email']."'";
		$cekadmin = $this->konek->query($queryadmin);
		$dataadmin = mysqli_fetch_assoc($cekadmin);
		if($dataadmin===null){
			$cek = $this->konek->query($queryuser);
			$datadb = mysqli_fetch_assoc($cek);
			if($datadb === null){
				// batas cek password
				if($data['password']===$data['konfirmasi_password']){
					$panjang_password = strlen($data['password']);
					echo $panjang_password;
					if(strlen($data['password'])<10){
						session_start();
						$_SESSION["regis_error"] = [
							"email"=>$data['email'],
							"nama"=>$data['username'],
							"error_pass"=>"Panjang password minimal 10 karakter ",
						];
						header("location:".BASE_URL."registrasi",true,301);	
					}else{
						// memasukkan ke db
						$password = password_hash($data['password'], PASSWORD_DEFAULT);
						$query = "INSERT INTO user VALUES('".$data['email']."','".$data['username']."','".$password."')";
							$add = $this->konek->query($query);
							if($add){
								session_start();
								$_SESSION['succes_regis'] = true;
								header("location:".BASE_URL."login",true,301);
							}else{
								echo "Data gagal ditambahkan";
							}
						// akhir memasukkan ke db
						}

					}else{
						session_start();
						$_SESSION["regis_error"] = [
							"email"=>$data['email'],
							"nama"=>$data['username'],
							"error_pass"=>"password dan konfirmasi password tidak sama ",
						];
						header("location:".BASE_URL."registrasi",true,301);	
					}
				// akhir batas cek password

				}else{
					session_start();
					$_SESSION["regis_error"] = [
						"email"=>$data['email'],
						"nama"=>$data['username'],
						"email_error"=>"Email sudah terdaftar, gunakan email lain",
					];
					header("location:".BASE_URL."registrasi",true,301);					
				}
			}else{
				session_start();
				$_SESSION["regis_error"] = [
					"email"=>$data['email'],
					"nama"=>$data['username'],
					"email_error"=>"Email sudah terdaftar, gunakan email lain",
				];
				header("location:".BASE_URL."registrasi",true,301);	
			}
			

		}

		// validasi login
		public function validate($data){
			$queryadmin = "SELECT * FROM admin Where email = '".$data['email']."'";
			$dataadmin = $this->konek->query($queryadmin);
			$datafetchadmin = mysqli_fetch_assoc($dataadmin);
			if($datafetchadmin===null){
				$query = "SELECT * FROM user Where email = '".$data['email']."'";
				$cek = $this->konek->query($query);
				$datadb = mysqli_fetch_assoc($cek);
				if($datadb===null){
					session_start();
					$_SESSION["login_error"] = ["emaill"=>true,"pesan"=>"Email tidak terdaftar","email"=>$data['email']];	
					header("location:".BASE_URL."login",true,301);		
				}else{
					if(password_verify($data['password'], $datadb['password'])){
						session_start();
						$menu = ["Dashboard","Diagnosa","Riwayat","Solusi"];
						$_SESSION['login'] = ["hak"=>"user","username"=>$datadb['username'],"email"=>$datadb['email'],"menu"=>$menu];
						header("location:".BASE_URL,true,301);
					}else{
						session_start();
						$_SESSION["login_error"] = ["pass"=>true,"pesan"=>"Password Salah","email"=>$data['email']];	
						header("location:".BASE_URL."login",true,301);		
					}
				}
			}else{
				if(password_verify($data['password'], $datafetchadmin['password'])){
					session_start();
					$menu = ["Dashboard","Pelatihan","Diagnosa","Riwayat","Solusi"];
					$_SESSION['login'] = ["hak"=>"admin","username"=>$datafetchadmin['username'],"email"=>$datafetchadmin['email'],"menu"=>$menu];
					header("location:".BASE_URL,true,301);
				}else{
					session_start();
					$_SESSION["login_error"] = ["pass"=>true,"pesan"=>"Password yang anda masukkan salah ","email"=>$data['email']];	
					header("location:".BASE_URL."login",true,301);		
				}
			}
		}


		public function hitung(){
			
			return [
				'pengguna'=>mysqli_fetch_assoc($this->konek->query("SELECT COUNT(*) as total FROM user"))['total'],
				'kerusakan'=>mysqli_fetch_assoc($this->konek->query("SELECT COUNT(*) as total FROM kerusakan"))['total'],
				'pelatihan'=>mysqli_fetch_assoc($this->konek->query("SELECT COUNT(*) as total FROM datapelatihan"))['total'],
				'diagnosa'=>mysqli_fetch_assoc($this->konek->query("SELECT COUNT(*) as total FROM hasildiagnosa"))['total'],
			];
		}



	}

