<?php
if (!isset($_SESSION['hasildiagnosa'])) {
	header('location:' . BASE_URL . 'diagnosa');
}
$data = $_SESSION['hasildiagnosa']['hasil'];
$gejalainput = $_SESSION['hasildiagnosa']['gejalacentang'];

?>
<div class="container">
	<div class="null">
	</div>

	<div class="content">
		<div class="halaman">
			<div class="judul-halaman">
				<h3>Hasil Diagnosa</h3>
			</div>
			<div class="isi-halaman">
				<?php if (count($data) == 0) { ?>
					<div class="root-info">
						<div class="info">
							<img class="img-info" src="<?= BASE_URL ?>assets/icons/info.svg" alt="">
							<span>Tidak ada kerusakan</span>
						</div>
						<a class="diagnosa-ulang" href="<?= BASE_URL ?>/diagnosa/clearhasil""><img src="<?= BASE_URL ?>assets/icons/reload.svg" alt=""> Diagnosa ulang</a>
					</div>
				<?php } else { ?>
					<div class="root-info">
						<div class="info">
							<img class="img-info" src="<?= BASE_URL ?>assets/icons/info.svg" alt="">
							<span>Ditemukan <?php echo count($data) ?> Kerusakan</span>
						</div>
						<a class="diagnosa-ulang" href="<?= BASE_URL ?>/diagnosa/clearhasil""><img src="<?= BASE_URL ?>assets/icons/reload.svg" alt=""> Diagnosa ulang</a>
						<a class="diagnosa-ulang" href=""><img src="<?= BASE_URL ?>assets/icons/print.svg" alt=""> Cetak</a>
					</div>
				<?php } ?>
				<?php $nomor = 1; ?>
				<div class="root-content-hasil">
					<div>
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
											</td>
										</tr>
									</table>
								</div>
							</div>
							<?php $nomor++ ?>
						<?php endforeach ?>
					</div>
					<div class="gejala-centang">
						<h2>Gejala yang diinput</h2>
						<div class="tambah-gejala">
							<?php foreach ($gejalainput as $value) : ?>
								<div class="container-gejala">
									<input checked id="<?=$value['kodeGejala']?>" value=1 class="input-gejala" type="checkbox" >
									<label for="<?=$value['kodeGejala']?>" class="gejala"><?=$value['kodeGejala']?><label />
										<label for="<?=$value['kodeGejala']?>" class="gejala"><?=$value['namaGejala']?><label />
								</div>
							<?php endforeach ?>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>