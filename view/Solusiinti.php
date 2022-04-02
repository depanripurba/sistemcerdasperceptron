<div class="container">
	<div class="null">
	</div>
	<div class="content">
		<div class="halaman">
			<div class="judul-halaman">
				<h3>Kerusakan dan solusi</h3>
				<div class="content-search">
					<input class="input" id="ajaxinput" type="text" placeholder="cari ('kode')">
					<input id="url" type="hidden" value="<?= BASE_URL ?>solusi/ajax">
					<img id="loading" class="loading" src="<?= BASE_URL ?>assets/icons/loading.gif" alt="">
				</div>

				<div class="spacing"></div>
			</div>
			<div class="isi-halaman" id="isi-halaman">
				<?php $nomor = 1; ?>
				<?php foreach ($data as $item) : ?>
					<div class="content-hasil">
						<div class="index"><?= $nomor ?></div>
						<div>
							<table class="tabel-hasil" cellpadding="3" cellspacing="0">
								<tr>
									<td width="140">Kode Kerusakan</td>
									<td>:</td>
									<td class="alert"><b><?= $item['kode'] ?></b></td>
								</tr>
								<tr>
									<td>Nama Kerusakan</td>
									<td>:</td>
									<td width="350" class="alert"><b><?= $item['namakerusakan']['namaKerusakan'] ?></b></td>
								</tr>
								<tr>
									<td class="tabel-pengantar"><i>Solusi</i></td>
									<td class="tabel-pengantar">:</td>
									<td class="solusi-tabel">
										<?php if ($item['solusi'] == null) { ?>
											<span>Solusi belum ada</span>
										<?php } else { ?>
											<table class="tabel-solusi">
												<?php foreach ($item['solusi'] as $values) : ?>
													<tr>
														<?php if ($values['jenis'] == 1) : ?>
															<td colspan="2"><?= $values['aksi'] ?></td>
														<?php endif ?>
														<?php if ($values['jenis'] == 2) : ?>
															<td><b>- </b><?= $values['aksi'] ?></td>
														<?php endif ?>
														<?php if ($values['jenis'] == 3) : ?>
															<td><b><i>note : </i></b><?= $values['aksi'] ?></td>
														<?php endif ?>
													</tr>
												<?php endforeach ?>
											</table>
										<?php } ?>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<?php $nomor++ ?>
				<?php endforeach ?>
			</div>
		</div>

	</div>
</div>

<script src="<?= BASE_URL ?>assets/js/ajaxnative.js"></script>