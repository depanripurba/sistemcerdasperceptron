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
						<td>Total Data</td>
						<td>Data terlatih</td>
						<td>Sisa Data</td>
						<td>Aksi</td>
					</tr>
					<?php $number = 1; ?>
					<?php foreach ($data['datapel'] as $item) : ?>
						<tr class="tabel-isi">
							<td><?=$number?></td>
							<td><?=$item['kodeKerusakan']?></td>
							<td><?=$item['namaKerusakan']?></td>
							<td>dikenali</td>
							<td>32</td>
							<td>32</td>
							<td>0</td>
							<td><a class="btn-latih" href="<?=BASE_URL?>pelatihan/latih/<?=$item['kodeKerusakan']?>">latih</a>&nbsp;<button class="btn-hapus" onclick="hapus({code:'<?=$item['kodeKerusakan']?>',url:'<?=BASE_URL?>pelatihan/hapus/<?=$item['kodeKerusakan']?>'})" >hapus</button>&nbsp;<button class="btn-edit" onclick="cek(['<?=$item['kodeKerusakan']?>','<?=$item['namaKerusakan']?>'])">edit</button></td>
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
		<input class="input" type="text" name="kodeKerusakan" value="<?=$data['autokodeker']?>" disabled>
		<input type="hidden" name="kodeKerusakan" value="<?=$data['autokodeker']?>">
		<input class="input" required type="text" name="kerusakan" placeholder="masukkan nama kerusakan baru">
		<div class="tombol-container"><button name="submit" type="submit" class="btn-add">Tambah</button>&nbsp;<button name="cancel" type="reset" class="btn-cancel">Batal</button></div>
	</div>
</form>

<form action="<?= BASE_URL ?>pelatihan/edit" method="POST">
	<div id="form-edit" class="content-alert-content">
		<img id="closebutton" class="close" src="<?= BASE_URL ?>assets/icons/close.svg" alt="">
		<h4 class="title-form">Form edit  kerusakan</h4>
		<input id="kodekerusakan" class="input" type="text" name="kodeKerusakan" value=""  disabled>
		<input id="hidekodekerusakan" type="hidden" name="kodeKerusakan">
		<input id="namekerusakan" class="input" required type="text" name="kerusakan" placeholder="masukkan nama kerusakan baru">
		<div class="tombol-container"><button name="submit" type="submit" class="btn-add">edit</button></div>
	</div>
</form>
