<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Login</title>
	<link rel="stylesheet" href="<?=BASE_URL?>assets/css/login.css">
</head>
<body>
	<?php 
	session_start();
	$email = isset($_SESSION["login_error"])?$_SESSION["login_error"]["email"]:null;
	$classemail = isset($_SESSION["login_error"]["emaill"])?"input-error":"input";
	$classpas = isset($_SESSION["login_error"]["pass"])?"input-error":"input";
	if(isset($_SESSION['succes_regis'])){
		?>
		<div class="pesan">
			Anda berhasil melakukan registrasi, Silahkan login untuk melanjutkan
		</div>
	<?php } ?>
	<form action="<?=BASE_URL?>login/ceklogin" method="post">
		<div>
			<img src="<?=BASE_URL?>assets/" alt="">
		</div>
		<div class="login">
			<div>Silahkan log in</div>
			<div>
				<input class="<?=$classemail ?>" name="email" type="text" placeholder="input your email" value="<?=$email ?>">
				<?php if(isset($_SESSION['login_error']['emaill'])){?>
					<p class="error"><?= $_SESSION['login_error']['pesan'] ?></p>
				<?php  }?>
			</div>
			<div>
				<input class="<?=$classpas ?>" name="password" type="password" placeholder="input your password">
				<?php if(isset($_SESSION['login_error']['pass'])){?>
					<p class="error"><?= $_SESSION['login_error']['pesan'] ?></p>
				<?php  }?>
			</div>
			<div>
				<button class="btn_login" name="submit">Log in</button>
			</div>
			<div>
				<hr class="garis">
			</div>
			<div>
				<a href="<?=BASE_URL?>registrasi" class="btn_create">Buat akun baru</a>
			</div>
		</div>
	</form>
	
</body>
</html>
<?php 
unset($_SESSION['succes_regis']);
unset($_SESSION['login_error']);
?>