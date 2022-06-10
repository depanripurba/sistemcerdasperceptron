<div class="container">
	<div class="null">
	</div>
	<div class="content">
		<div class="halaman">
			<div class="judul-halaman">
				<h3>Tambah Data Pelatihan Kerusakan <?= $data['kodeKerusakan'] ?></h3>
			</div>
			<div class="isi-halaman">
				<div class="tambah-latih">
					<h4>Silahkan centang gejala sesuai dengan kerusakan</h4>
					<form action="<?=BASE_URL?>pelatihan/addlatihtodb" method="POST">
					<input type="hidden" name="kodeKerusakan" value="<?=$data['kodeKerusakan']?>">
						<?php foreach ($data['gejala'] as $item) : ?>
							<div class="container-gejala">
								<input id="<?= $item['kodeGejala'] ?>" value=1 class="input-gejala" type="checkbox" name="<?= $item['kodeGejala'] ?>">
								<label for="<?= $item['kodeGejala'] ?>" class="gejala"><b><?= $item['kodeGejala'] ?></b><label />
								<label for="<?= $item['kodeGejala'] ?>" class="gejala"><?= $item['namaGejala'] ?><label />
							</div>
						<?php endforeach ?>
						<div class="container-gejala">
							<button class="btn-tambah" type="submit" name="submit">Tambahkan</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>