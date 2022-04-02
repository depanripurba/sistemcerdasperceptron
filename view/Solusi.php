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
					<span class="solusi-notif-true"><img src="<?= BASE_URL ?>assets/icons/info.svg" alt=""><span>Data Solusi untuk kerusakan <?= $data['kode'] ?> ada, jika ada pengurangan atau penambahan silahkan di edit</span></span>
					<br>
					<form action="<?= BASE_URL ?>solusi/updatesolusi" method="POST" class="form">
						<?php $assoc = 0; ?>
						<input type="hidden" name='kode' value="<?= $data['kode'] ?>">
						<?php foreach ($data['solusi'] as $indeks => $value) : ?>
							<?php if ($value['jenis'] == 1) : ?>
								<div class="spacing"></div>
								<span class="underline"><label for="header">Kalimat Pembuka</label></span>
								<div class="root-header">
									<textarea disabled name="1[]" id="header" cols="50" rows="4"><?= $value['aksi'] ?></textarea>
								</div>
							<?php endif ?>
							<?php if ($value['jenis'] == 2) : ?>
								<div id="root-solusi" class="root-solusi">
								<?php if ($indeks == 1) { ?>
									<div class="spacing"></div>
									<label><span class="underline">Langkah-langkah perbaikan</span></label>
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
								<div class="spacing"></div>
								<label><span class="underline">Catatan</span></label>
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
						<label for="header"><span class="underline">Kalimat Pembuka</span></label>
						<div class="root-header">
							<textarea name="1[]" id="header" cols="50" rows="4" placeholder="kalimat pembuka"></textarea>
						</div>
						<div class="spacing"></div>
						<div id="root-solusi" class="root-solusi">
							<label><span class="underline">langkah-langkah perbaikan</span></label>
							<div class="baris">
								<textarea placeholder="langkah ke 1" name="2[]" id="" cols="50" rows="4"></textarea>
							</div>
						</div>
						<button class="tambah">add</button><button class="remove">remove</button>
						<br>
						<div class="spacing"></div>
						<label><span class="underline">Catatan</span></label>
						<div id="root-note">
							<textarea name="3[]" id="" cols="50" rows="4" placeholder="catatan"></textarea>
						</div>
						<button type="submit" name="kode" value='<?= $data['kode'] ?>'>Simpan Solusi</button>
					</div>

				</form>
			</div>
		</div>

	</div>
</div>
<script src="<?= BASE_URL ?>assets/js/solusi.js"></script>