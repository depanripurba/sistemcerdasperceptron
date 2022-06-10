<div class="container">
	<div class="null">
	</div>
	<div class="content">
		<div class="halaman">
			<div class="judul-halaman">
				<h3>Halaman Kelola Kerusakan</h3>
			</div>

			<div class="isi-halaman">
				<table cellspacing="0" class="tabel">
					<tr>
						<td>No</td>
						<td>Kode Kerusakan</td>
						<td class="head-nama">Nama Kerusakan</td>
						<td>Status</td>
						<td>Rasio</td>
						<td>Ket.</td>
						<td>Sisa Data</td>
						<td>Aksi</td>
						<td>Solusi</td>
					</tr>
					<?php
					$number = 1;
					$latihulang = [];
					?>
					<?php foreach ($data['datapel']['datapel'] as $item) : ?>
						<!-- //mengenali atau tidak -->
						<?php
						$class = null;
						$isi = "<span class='tidak-dikenali'>tidak dikenali</span>";
						$dataterlatih = 0;
						foreach ($data['recognice'] as $value) {
							if ($item['kodeKerusakan'] == $value['kodeKerusakan']) {
								$isi = "<span class='dikenali'>dikenali</span>";
								$dataterlatih = $value['totaldata'];
							}
						}
						// pengecekan status
						$sisa = $data['datapel']['totaldata'] - $dataterlatih;
						$status = "<span class='siap-uji'>siap uji</span>";
						if ($sisa == $data['datapel']['totaldata']) {
							$class = 'infoo';
							$status = "<span class='wajib-latih'>wajib latih</span>";
						} elseif ($sisa > 0 || $sisa < 0) {
							$class = 'infoo';
							$latihulang[] = $item['kodeKerusakan'];
							$status = "<a href=" . BASE_URL . "pelatihan/prosesdata/" . $item['kodeKerusakan'] . " class='latih-ulang'>latih ulang</span>";
						}
						?>
						<tr class="tabel-isi">
							<td><?= $number ?></td>
							<td><?= $item['kodeKerusakan'] ?></td>
							<td><?= $item['namaKerusakan'] ?></td>
							<td><?= $isi ?></td>
							<td><span class="rasio <?= $class ?>"><?= $data['datapel']['totaldata'] ?>/<?= $dataterlatih ?></span></td>
							<td><?= $status ?></td>
							<td class="rasio <?= $class ?>"><?= $sisa ?></td>
							<td><a class="btn-latih" href="<?= BASE_URL ?>pelatihan/latih/<?= $item['kodeKerusakan'] ?>">latih</a>&nbsp;<button class="btn-hapus" onclick="hapus({code:'<?= $item['kodeKerusakan'] ?>',url:'<?= BASE_URL ?>pelatihan/hapus/<?= $item['kodeKerusakan'] ?>'})">hapus</button>&nbsp;<button class="btn-edit" onclick="cek(['<?= $item['kodeKerusakan'] ?>','<?= $item['namaKerusakan'] ?>'])">edit</button>&nbsp;<a class="solusi" href="<?= BASE_URL ?>solusi/kelolasolusi/<?= $item['kodeKerusakan'] ?>">Kelola Solusi</a></td>
							<?php
							$class = $data['solusi'][$item['kodeKerusakan']] == 0 ? "cek" : "primer";
							$icon = $data['solusi'][$item['kodeKerusakan']] == 0 ? "x.svg" : "chek.svg";
							?>
							  <td class="<?= $class ?>"><img src="<?=BASE_URL?>assets/icons/<?=$icon?>" alt=""></td>

						</tr>
						<?php $number++; ?>
					<?php endforeach ?>
				</table>
				<br>
				<span class="container-tombol">
					<button id="btn-show" class="btn-tambah"><img src="<?= BASE_URL ?>/assets/icons/add_icon.svg" alt=""><span>Tambah</span> </button>
					<form action="<?= BASE_URL ?>pelatihan/latihulangall" method="POST">
						<?php foreach ($latihulang as $latih) : ?>
							<input type="hidden" value="<?= $latih ?>" name="ulanglatih[]">
						<?php endforeach ?>
						<button type="submit" id="btn-show" class="btn-tambah"><img src="<?= BASE_URL ?>/assets/icons/reload.svg" alt=""> <span>latih ulang semua data</span> </button>
					</form>

				</span>
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