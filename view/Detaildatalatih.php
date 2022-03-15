<div class="container">
	<div class="null">
	</div>
	<div class="content">
		<div class="halaman">
			<div class="judul-halaman">
				<h3>Detail Data Pelatihan Kerusakan <?= $data['kodeKerusakan'] ?></h3>
			</div>
			<div class="isi-halaman">
				<div class="tambah-latih">
					<?php $nomor = 1 ?>
					<?php foreach ($data['gejala'] as $item) : ?>
						<?php if($data['datapel'][0]['x'.$nomor]==1): ?>
							<div class="container-gejala">
								<input type="hidden" value="-1" name="<?= $item['kodeGejala'] ?>">
								<input id="<?= $item['kodeGejala'] ?>" value=1 class="input-gejala" type="checkbox" name="<?= $item['kodeGejala'] ?>" checked>
								<label for="<?= $item['kodeGejala'] ?>" class="gejala"><b><?= $item['kodeGejala'] ?>  </b><label />
									<label for="<?= $item['kodeGejala'] ?>" class="gejala"><?= $item['namaGejala'] ?><label />
									</div>
								<?php endif ?>
								<?php $nomor++ ?>
							<?php endforeach ?>
							<div class="container-gejala">
								<a href="<?=BASE_URL?>pelatihan/latih/<?= $data['kodeKerusakan'] ?>" class="btn-kembali">kembali</a>&nbsp;<a class="btn-update" href="<?=BASE_URL?>pelatihan/editdatalatih/<?= $data['kodeKerusakan'] ?>+<?=$data['datapel'][0]['id']?>">edit</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>