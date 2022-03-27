<div class="container">
	<div class="null">
	</div>
	<div class="content">
		<div class="halaman">
			<div class="judul-halaman">
				<h3>Halaman Pelatihan Kerusakan</h3>
			</div>
			<div class="isi-halaman">
				<table cellspacing="0" class="tabel">
					<tr>
						<td>No</td>
						<td>Kode Kerusakan</td>
						<td class="head-nama">Nama Kerusakan</td>
						<td>Status</td>
						<td>Rasio</td>
						<td>Status</td>
						<td>Sisa Data</td>
						<td>Aksi</td>
					</tr>
					<?php $number = 1; ?>
					<?php foreach ($data['datapel']['datapel'] as $item) : ?>
						<!-- //mengenali atau tidak -->
						<?php
						$isi = "<span class='tidak-dikenali'>tidak dikenali</span>";
						$dataterlatih = 0;
						foreach ($data['recognice'] as $value) {
							if ($item['kodeKerusakan'] == $value['kodeKerusakan']) {
								$isi = "<span class='dikenali'>dikenali</span>";
								$dataterlatih = $value['totaldata'];
							}
						}
						// pengecekan status
						$sisa = $data['datapel']['totaldata']-$dataterlatih;
						$status = "<span class='siap-uji'>siap uji</span>";
						if($sisa == $data['datapel']['totaldata']){
							$status = "<span class='wajib-latih'>wajib latih</span>";
						}elseif($sisa>0&&$sisa<$data['datapel']['totaldata']){
							$status = "<span class='latih-ulang'>latih ulang</span>";
						}
						?>
						<tr class="tabel-isi">
							<td><?= $number ?></td>
							<td><?= $item['kodeKerusakan'] ?></td>
							<td><?= $item['namaKerusakan'] ?></td>
							<td><?= $isi ?></td>
							<td><?=$data['datapel']['totaldata'] ?>/<?=$dataterlatih ?></td>
							<td><?= $status ?></td>
							<td><?=$sisa?></td>
							<td><a class="btn-latih" href="<?= BASE_URL ?>pelatihan/latih/<?= $item['kodeKerusakan'] ?>">latih</a>&nbsp;<button class="btn-hapus" onclick="hapus({code:'<?= $item['kodeKerusakan'] ?>',url:'<?= BASE_URL ?>pelatihan/hapus/<?= $item['kodeKerusakan'] ?>'})">hapus</button>&nbsp;<button class="btn-edit" onclick="cek(['<?= $item['kodeKerusakan'] ?>','<?= $item['namaKerusakan'] ?>'])">edit</button>&nbsp;<a class="solusi" href="<?= BASE_URL ?>solusi/index/<?= $item['kodeKerusakan'] ?>">Kelola Solusi</a></td>
						</tr>
						<?php $number++; ?>
					<?php endforeach ?>
				</table>
				<br>
				<button id="btn-show" class="btn-tambah"><img src="<?= BASE_URL ?>/assets/icons/add_icon.svg" alt=""><span>Tambah</span> </button>
			</div>
		</div>

	</div>
</div>
<div id="content-alert" class="content-alert">
</div>
<form action="<?= BASE_URL ?>pelatihan/addlatih" method="POST">
	<div id="child-content" class="content-alert-content">
		<img id="close" class="close" src="<?= BASE_URL ?>assets/icons/close.svg" alt="">
		<h4 class="title-form">Form tambah kerusakan</h4>
		<input class="input" type="text" name="kodeKerusakan" value="<?= $data['datapel']['autokodeker'] ?>" disabled>
		<input type="hidden" name="kodeKerusakan" value="<?= $data['datapel']['autokodeker'] ?>">
		<input class="input" required type="text" name="kerusakan" placeholder="masukkan nama kerusakan baru">
		<div class="tombol-container"><button name="submit" type="submit" class="btn-add">Tambah</button>&nbsp;<button name="cancel" type="reset" class="btn-cancel">Batal</button></div>
	</div>
</form>

<form action="<?= BASE_URL ?>pelatihan/edit" method="POST">
	<div id="form-edit" class="content-alert-content">
		<img id="closebutton" class="close" src="<?= BASE_URL ?>assets/icons/close.svg" alt="">
		<h4 class="title-form">Form edit kerusakan</h4>
		<input id="kodekerusakan" class="input" type="text" name="kodeKerusakan" value="" disabled>
		<input id="hidekodekerusakan" type="hidden" name="kodeKerusakan">
		<input id="namekerusakan" class="input" required type="text" name="kerusakan" placeholder="masukkan nama kerusakan baru">
		<div class="tombol-container"><button name="submit" type="submit" class="btn-add">edit</button></div>
	</div>
</form>