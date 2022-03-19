<div class="container">
	<div class="null">
	</div>
	<div class="content">
		<div class="halaman">
			<div class="judul-halaman">
				<h3>Halaman Diagnosa Kerusakan Mesin Fotocopy</h3>
			</div>
			<div class="isi-halaman">
				<div class="tambah-latih">
					<h4>Silahkan centang gejala yang ditemukan </h4>
					<form action="<?=BASE_URL?>diagnosa/prosesdiagnosa" method="POST">
						<?php foreach ($data as $item) : ?>
							<div class="container-gejala">
								<input type="hidden" value="-1" name="<?= $item['kodeGejala'] ?>">
								<input id="<?= $item['kodeGejala'] ?>" value=1 class="input-gejala" type="checkbox" name="<?= $item['kodeGejala'] ?>">
								<label for="<?= $item['kodeGejala'] ?>" class="gejala"><b><?= $item['kodeGejala'] ?></b><label />
								<label for="<?= $item['kodeGejala'] ?>" class="gejala"><?= $item['namaGejala'] ?><label />
							</div>
						<?php endforeach ?>
						<div class="container-gejala">
							<button class="btn-tambah" type="submit" name="submit">Diagnosa</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>