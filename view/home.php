<script src="<?= BASE_URL ?>assets/js/chart.min.js"></script>
<div class="container">
	<div class="null">
	</div>
	<div class="content">
		<div class="halaman">
			<div class="judul-halaman">
				<h3>Home</h3>
			</div>
			<div class="isi-halaman">
				<div class="content-dashboard">
					<div class="jlh-user">
						<div class="section-info">
							<?php $databar = "{$data['pengguna']} {$data['kerusakan']} {$data['pelatihan']} {$data['diagnosa']}" ?>
							<span class="content-angka"><?= $data['pengguna'] ?></span>
							<span class="head-content">Pengguna</span>
							<span class="link"><a href="">reload</a></span>
						</div>
						<input id="hidden" type="hidden" value="<?= $databar ?>">
						<input id="hidden2" type="hidden" value="<?= $data['chartline'][0] ?>">
						<input id="hidden3" type="hidden" value="<?= $data['chartline'][1] ?>">
						<div class="bg-gambar"></div>
					</div>
					<div class="ttl-ker">
						<div class="section-info">
							<span class="content-angka"><?= $data['kerusakan'] ?></span>
							<span class="head-content">Kerusakan</span>
							<span class="link"><a href="">reload</a></span>
						</div>
						<div class="bg-gambar1"></div>
					</div>
					<div class="ttl-data">
						<div class="section-info">
							<span class="content-angka"><?= $data['pelatihan'] ?></span>
							<span class="head-content">Data Pelatihan</span>
							<span class="link"><a href="">reload</a></span>
						</div>
						<div class="bg-gambar2"></div>
					</div>
					<div class="ttl-diagnosa">
						<div class="section-info">
							<span class="content-angka"><?= $data['diagnosa'] ?></span>
							<span class="head-content">Diagnosa</span>
							<span class="link"><a href="">reload</a></span>
						</div>
						<div class="bg-gambar3"></div>
					</div>
				</div>
				<div class="bagian-canvas">
					<div class="bar">
						<canvas id="mycanvas"></canvas>
					</div>
					<div class="spacing"></div>
					<div class="bar2">
						<canvas id="mycanvas2"></canvas>
					</div>
					<div class="spacing"></div>
					<div class="bar3">
						<canvas id="mycanvas3"></canvas>
					</div>
					<div class="spacing"></div>
				</div>
			</div>
		</div>

	</div>
</div>
<script src="<?= BASE_URL ?>assets/js/canvas.js"></script>