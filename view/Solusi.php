<div class="container">
	<div class="null">
	</div>
	<div class="content">
		<div class="halaman">
			<div class="judul-halaman">
				<h3>Halaman Kelola Solusi <?= $data['kode'] ?></h3>
			</div>
			<div class="isi-halaman">
				<?php if ($data['solusi'] == null) : ?>
					<p class="solusi-notif">Data Solusi untuk kerusakan <?= $data['kode'] ?> masih kosong </p>
					<button id="tombol-solusi" class="buat-solusi">Buat Solusi</button>
				<?php endif ?>
				<?php if ($data['solusi'] != null) : ?>
					<p class="solusi-notif-true">Data Solusi untuk kerusakan <?= $data['kode'] ?> ada, jika ada pengurangan atau penambahan silahkan di edit </p>
					<form action="<?= BASE_URL ?>solusi/updatesolusi" method="POST" class="form">
						<?php $assoc = 0; ?>
						<input type="hidden" name='kode' value="<?= $data['kode'] ?>">
						<?php foreach ($data['solusi'] as $indeks => $value) : ?>
							<?php if ($value['jenis'] == 1) : ?>
								<label for="header">Kalimat Pembuka</label>
								<div class="root-header">
									<textarea disabled name="1[]" id="header" cols="50" rows="4"><?= $value['aksi'] ?></textarea>
								</div>
							<?php endif ?>
							<?php if ($value['jenis'] == 2) : ?>
								<div id="root-solusi" class="root-solusi">
								<?php if ($indeks == 1) { ?>
									<label>Langkah-langkah perbaikan</label>
									<div class="root-header">
										<textarea name="2[]" disabled="true" id="header" cols="50" rows="4"><?= $value['aksi'] ?></textarea>
									</div>
								<?php } else { ?>
									<div class="root-header">
										<textarea name="2[]" disabled="true" id="header" cols="50" rows="4"><?= $value['aksi'] ?></textarea>
									</div>
								<?php } ?>
								</div>
								<?php if ($assoc == count($data['solusi']) - 2) : ?>
									<div>
										<button class="tambahedit hide">add</button><button class="removeedit hide">remove</button>
									</div>

								<?php endif ?>


							<?php endif ?>

							<?php if ($value['jenis'] == 3) : ?>
								<label>Catatan</label>
								<div class="root-header">
									<textarea name="3[]" disabled id="header" cols="50" rows="4"><?= $value['aksi'] ?></textarea>
								</div>
							<?php endif ?>
							<?php $assoc++; ?>
						<?php endforeach ?>
						<button title="<?= BASE_URL ?>solusi/updatesolusi" class="edit">Edit</button>
					</form>
				<?php endif ?>
				<form action="<?= BASE_URL ?>solusi/simpansolusi" method="POST">
					<div class="container-solusi hider">
						<label for="header">Kalimat Pembuka</label>
						<div class="root-header">
							<textarea name="1[]" id="header" cols="50" rows="4"></textarea>
						</div>
						<div id="root-solusi" class="root-solusi">
							<label> langkah-langkah perbaikan</label>
							<div class="baris">
								<textarea placeholder="langkah ke 1" name="2[]" id="" cols="50" rows="4"></textarea>
							</div>
						</div>
						<button class="tambah">add</button><button class="remove">remove</button>
						<br>
						<label> Catatan</label>
						<div id="root-note">
							<textarea name="3[]" id="" cols="50" rows="4"></textarea>
						</div>
						<button type="submit" name="kode" value='<?= $data['kode'] ?>'>Simpan Solusi</button>
					</div>

				</form>
			</div>
		</div>

	</div>
</div>
<script src="<?= BASE_URL ?>assets/js/solusi.js"></script>