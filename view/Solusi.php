<div class="container">
	<div class="null">
	</div>
	<div class="content">
		<div class="halaman">
			<div class="judul-halaman">
				<h3>Halaman Kelola Solusi <?= $data ?></h3>
			</div>
			<div class="isi-halaman">
				<form action="<?=BASE_URL?>solusi/simpansolusi" method="POST">
				<div class="container-solusi hider">
					<label for="header">langkah-langkah awal</label>
					<div class="root-header">
						<textarea name="1[]" id="header" cols="50" rows="4"></textarea>
					</div>
					<div id="root-solusi" class="root-solusi">
						<label> langkah-langkah perbaikan</label>
						<div class="baris">
							<span>1</span>
							<textarea name="2[]" id="" cols="50" rows="4"></textarea>
						</div>
					</div>
					<button class="tambah">add</button><button class="remove">remove</button>
					<br>
					<label> Catatan</label>
					<div id="root-note">
						<textarea name="3[]" id="" cols="50" rows="4"></textarea>
					</div>
				</div>
				<button id="tombol-solusi" class="buat-solusi">Buat Solusi</button>
				<button type="submit" name="kode" value='<?=$data?>'>Simpan Solusi</button>
				</form>
			</div>
		</div>

	</div>
</div>
<script src="<?= BASE_URL ?>assets/js/solusi.js"></script>