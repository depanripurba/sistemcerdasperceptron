<div class="container">
	<div class="null">
	</div>
	<div class="content">
		<div class="halaman">
			<div class="judul-halaman">
				<h3>Edit Data Pelatihan <?= $data['kodeKerusakan'] ?></h3>
			</div>
			<div class="isi-halaman">
				<div class="tambah-latih">
					<h4>Silahkan sesuaikan dengan data yang baru</h4>
					<form action="<?=BASE_URL?>pelatihan/updatedatalatih/<?=$data['datapel'][0]['id']?>" method="POST">
					<input type="hidden" name="kodeKerusakan" value="<?=$data['kodeKerusakan']?>">
					<?php $nomor = 1 ?>
						<?php foreach ($data['gejala'] as $item) : ?>
							<?php $checked = $data['datapel'][0]['x'.$nomor]==1?"checked":""  ?>
							<div class="container-gejala">
								<input type="hidden" value="-1" name="<?= $item['kodeGejala'] ?>">
								<input id="<?= $item['kodeGejala'] ?>" value=1 class="input-gejala" type="checkbox" name="<?= $item['kodeGejala'] ?>" <?=$checked?>>
								<label for="<?= $item['kodeGejala'] ?>" class="gejala"><b><?= $item['kodeGejala'] ?>  </b><label />
								<label for="<?= $item['kodeGejala'] ?>" class="gejala"><?= $item['namaGejala'] ?><label />
							</div>
							<?php $nomor++ ?>
						<?php endforeach ?>
						<div class="container-gejala">
							<label for="target" class="ltarget"><b>Target</b><label />
								<select name="T" id="target" class="target">
									<option value=1>Kerusakan <?= $data['kodeKerusakan'] ?></option>
									<option value=-1>Bukan Kerusakan <?= $data['kodeKerusakan'] ?></option>
								</select>
						</div>
						<div class="container-gejala">
							<button class="btn-tambah" type="submit" name="submit">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>