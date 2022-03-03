<?php
$profile = explode(" ", $_SESSION['login']['username']);
$panjang_nama = count($profile);
$profile = $panjang_nama > 1 ? str_split($profile[0])[0] . str_split($profile[1])[0] : str_split($profile[0])[0];
$dashboard = $data['menuAktif']==="DASHBOARD"?'cek':'';
$diagnosa = $data['menuAktif']==="DIAGNOSA"?'cek':'';
$pelatihan = $data['menuAktif']==="PELATIHAN"?'cek':'';
$riwayat = $data['menuAktif']==="RIWAYAT DIAGNOSA"?'cek':'';

$icon = [
	"DASHBOARD"=>"<svg xmlns='http://www.w3.org/2000/svg' width='16' class='icon $dashboard' height='16' viewBox='0 0 16 16'><path fill-rule='evenodd' d='m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z'/>
	<path fill-rule='evenodd' d='M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z'/></svg>",
	"DIAGNOSA"=>"<svg xmlns='http://www.w3.org/2000/svg' width='16' class='icon $diagnosa' height='16' viewBox='0 0 16 16'> <path d='M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z'/><path d='M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z'/></svg>",
	"PELATIHAN"=>"<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'class='icon $pelatihan' viewBox='0 0 16 16'><path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z'/></svg>",
	"RIWAYAT"=>"<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'class='icon $riwayat' viewBox='0 0 16 16'><path d='M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z'/></svg>"

];
$title = isset($data['title']) ? $data['title'] : "Sistem Cerdas Perceptron";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/index.css">
	<style>
		.indikator {
			position: absolute;
			width: 210px;
			height: 40px;
			background: white;
			z-index: -1;
			border-bottom-left-radius: 10px;
			border-top-left-radius: 10px;
			transition: transform 0.6s;
			transform: translateY(<?=$data['y'][$_SESSION['login']['hak']]?>)
		}
	</style>
</head>

<body>
	<!-- head title -->
	<div class="head">
		<div class="title">
			Sistem Cerdas Mendiagnosa Kerusakan Mesin Fotocopy Canon IR 6020
		</div>
		<div class="person">
			<span class="name" title="<?= $_SESSION['login']['hak'] ?>"><?= $_SESSION['login']['username'] ?></span>
			<span class="img-circle"><?= $profile ?></span>
			<span class="person-navigate">
				<img id="arrow" src="<?= BASE_URL ?>assets/icons/arrow.svg" alt="">
				<div id="menu-logout" class="menu-logout">
					<span><a href="">Profil</a></span>
					<span><a href="<?= BASE_URL ?>login/logout">Log out</a></span>
				</div>
				<div id="hider" class="hider">

				</div>
			</span>
		</div>
	</div>

	<!-- side bar -->
	<div class="side-bar">
		<?php foreach ($_SESSION['login']['menu'] as $index => $menu) : ?>
			<a class="menu-primer <?=$data['menuAktif']===$menu?'aktif':''?>" href="<?= BASE_URL . explode(" ",strtolower($menu))[0] ?>"><?= $icon[explode(" ",$menu)[0]] ?> <span><?= $menu ?></span></a>
		<?php endforeach ?>
		<div class="indikator" ></div>
	</div>