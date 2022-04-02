<div class="container">
	<div class="null">
	</div>
	<div class="content">
		<div class="halaman">
			<div class="judul-halaman">
				<h3>Halaman Riwayat Diagnosa Kerusakan</h3>
			</div>
			<div class="isi-halaman">
				<table cellspacing="0" class="tabel">
					<tr>
						<td>No</td>
						<td>Tanggal</td>
						<td>email</td>
						<td>Hasil</td>
						<td>Aksi</td>
					</tr>
					<?php $nomor = 1 ?>
					<?php if ($data == null) : ?>
						<tr>
							<td colspan="5">Belum ada riwayat diagnosa</td>
						</tr>

					<?php endif ?>
					<?php foreach ($data as $item) : ?>
						<?php 
							$hasil = $item['kodeKerusakan']!=null? $item['kodeKerusakan']:'-';
						 ?>
						<tr class="tabel-isi">
							<td><?= $nomor ?></td>
							<td class="tanggal"><?= $item['tanggal'] ?></td>
							<td class="tanggal"><?= $item['email'] ?></td>
							<td class="kode"><span class="kode"><?= $hasil ?></span></td>
							<!-- proses pengambilan gejala centang -->
							<?php
							$duplikat = $item;
								unset($duplikat['id'],$duplikat['tanggal'],$duplikat['email'],$duplikat['kodeKerusakan']);
								$centang = "";
								foreach($duplikat as $index=>$value){
									if($value==1){
										$centang.=",".$index;
									}
								}
								$centang = substr($centang,1);
							?>
							<!-- proses pengambilan gejala centang -->

							<td><a class="diagnosa-ulang font-small" href="<?= BASE_URL ?>riwayat/detail/<?= $item['kodeKerusakan'] ?>[]<?=$centang?>">Detail</a>&nbsp;<button class="btn-hapus" onclick="hapus({code:'<?= $item['tanggal'] ?>',url:'<?= BASE_URL ?>riwayat/hapus/<?= $item['id'] ?>'})">hapus</button></td>
						</tr>
						<?php $nomor++ ?>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
</div>