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
						<td>Nama Kerusakan</td>
						<td>Kode Kerusakan</td>
						<td>Status</td>
						<td>Total Data</td>
						<td>Data terlatih</td>
						<td>Sisa Data</td>
						<td>Aksi</td>
					</tr>
					<?php $number = 1; ?>
					<?php foreach ($data as $item) : ?>
						<tr class="tabel-isi">
							<td><?=$number?></td>
							<td><?=$item['namaKerusakan']?></td>
							<td><?=$item['kodeKerusakan']?></td>
							<td>dikenali</td>
							<td>32</td>
							<td>32</td>
							<td>0</td>
							<td><a class="btn-latih" href="<?=BASE_URL?>pelatihan/latih/<?=$item['kodeKerusakan']?>">latih</a>&nbsp;<a class="btn-hapus" href="">hapus</a>&nbsp;<a class="btn-edit" href="">edit</a></td>
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
		<input class="input" type="text" name="kodeKerusakan">
		<input class="input" type="text" name="kerusakan" placeholder="masukkan kerusakan baru">
		<div class="tombol-container"><button name="submit" type="submit" class="btn-add">Tambah</button>&nbsp;<button name="cancel" type="reset" class="btn-cancel">Batal</button></div>
	</div>
</form>