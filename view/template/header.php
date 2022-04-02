<?php
$profile = explode(" ", $_SESSION['login']['username']);
$panjang_nama = count($profile);
$profile = $panjang_nama > 1 ? str_split($profile[0])[0] . str_split($profile[1])[0] : str_split($profile[0])[0];
$dashboard = $data['menuAktif'] === "Dashboard" ? 'cek' : '';
$diagnosa = $data['menuAktif'] === "Diagnosa" ? 'cek' : '';
$pelatihan = $data['menuAktif'] === "Pelatihan" ? 'cek' : '';
$riwayat = $data['menuAktif'] === "Riwayat" ? 'cek' : '';
$solusi = $data['menuAktif'] === "Solusi" ? 'cek' : '';

$icon = [
	"Dashboard" => "<svg xmlns='http://www.w3.org/2000/svg' width='16' class='icon $dashboard' height='16' viewBox='0 0 16 16'><path fill-rule='evenodd' d='m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z'/>
		<path fill-rule='evenodd' d='M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z'/></svg>",
	"Diagnosa" => "<svg xmlns='http://www.w3.org/2000/svg' width='16' class='icon $diagnosa' height='16' viewBox='0 0 16 16'> <path d='M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z'/><path d='M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z'/></svg>",
	"Pelatihan" => "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pc-display-horizontal' viewBox='0 0 16 16'><path d='M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z'/></svg>",
	"Riwayat" => "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'class='icon $riwayat' viewBox='0 0 16 16'><path d='M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z'/></svg>",
	"Solusi" => "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='icon $solusi' viewBox='0 0 16 16'><path d='M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z'/>
</svg>"

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
	<script src="<?= BASE_URL ?>assets/js/header.js"></script>
	<style>
		.indikator {
			position: absolute;
			width: 122px;
			height: 40px;
			background: white;
			z-index: -1;
			border-bottom-left-radius: 10px;
			border-top-left-radius: 10px;
			transition: transform 0.6s;
			transform: translateY(<?= $data['y'][$_SESSION['login']['hak']] ?>)
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
					<span><a href="<?= BASE_URL ?>login/keluar">Log out</a></span>
				</div>
				<div id="hider" class="hider">

				</div>
			</span>
		</div>
	</div>

	<!-- side bar -->
	<div class="side-bar">
		<?php foreach ($_SESSION['login']['menu'] as $index => $menu) : ?>
			<a class="menu-primer <?= $data['menuAktif'] === $menu ? 'aktif' : '' ?>" href="<?= BASE_URL . explode(" ", strtolower($menu))[0] ?>"><?= $icon[explode(" ", $menu)[0]] ?> <span><?= $menu ?></span></a>
		<?php endforeach ?>
		<div class="indikator"></div>
	</div>