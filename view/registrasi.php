<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Registrasi User</title>
	<link rel="stylesheet" href="<?=BASE_URL?>assets/css/registrasi.css">
</head>
<body>
	<!-- php code -->
	<?php 
	session_start();
	$email = isset($_SESSION['regis_error']['email'])?$_SESSION['regis_error']['email']:null;
	$nama = isset($_SESSION['regis_error']['nama'])?$_SESSION['regis_error']['nama']:null;
	$classemail = isset($_SESSION['regis_error']['email_error'])?'input-error':'input';
	$classpassword = isset($_SESSION['regis_error']['error_pass'])?'input-error':'input';
	$icon = isset($_SESSION['regis_error']['email_error'])?'warning':'check';
	$iconpass = isset($_SESSION['regis_error']['error_pass'])?'warning':'check';
	$statusEmail=true;
	$_SESSION['nama'] = true;
	?>
	<!-- php code -->
	<form action="<?=BASE_URL?>registrasi/regis" method="post">
		<div class="registrasi">
			<div>Daftarkan diri anda sebagai user</div>
			<div class="second-box">
				<div>
					<input class="<?=$classemail?>" name="email" value="<?=$email ?>" type="text" placeholder="input your email"><?php if(isset($_SESSION['regis_error'])){ ?><img class="true-check" src="<?=BASE_URL?>/assets/icons/<?=$icon?>.svg" alt=""> <?php } ?>
					<?php if(isset($_SESSION['regis_error']['email_error'])){?>
						<p class="error"><?= $_SESSION['regis_error']['email_error'] ?></p>
					<?php  }?>
				</div>
				<div>
					<input class="input" name="username" value="<?=$nama ?>" type="text" placeholder="input your name"><?php if(isset($_SESSION['regis_error'])){ ?><img class="true-check" src="<?=BASE_URL?>/assets/icons/<?=$icon?>.svg" alt=""> <?php } ?>
				</div>

				<div>
					<input class="<?=$classpassword ?>" name="password" type="password" placeholder="input your password"><?php if(isset($_SESSION['regis_error']['error_pass'])){ ?><img class="true-check" src="<?=BASE_URL?>/assets/icons/<?=$iconpass?>.svg" alt=""> <?php } ?>
				</div>
				<div>
					<input class="<?=$classpassword?>" name="konfirmasi_password" type="password" placeholder="konfirmasi password"><?php if(isset($_SESSION['regis_error']['error_pass'])){ ?><img class="true-check" src="<?=BASE_URL?>/assets/icons/<?=$iconpass?>.svg" alt=""> <?php } ?>
					<?php if(isset($_SESSION['regis_error']['error_pass'])){?>
						<p class="error"><?= $_SESSION['regis_error']['error_pass'] ?></p>
					<?php  }?>
				</div>
				<div>
					<button class="btn-regis" name="submit">Registrasi</button>
				</div>
			</div>
			
		</div>
	</form>
	
</body>
</html>
<?php 
$_SESSION['regis_error'] = null;
?>