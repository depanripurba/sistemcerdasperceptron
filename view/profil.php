<script src="<?= BASE_URL ?>assets/js/chart.min.js"></script>
<div class="container">
	<div class="null">
	</div>
	<div class="content">
		<div class="halaman">
			<div class="judul-halaman">
				<h3>Ganti Profile</h3>
			</div>
			<div class="isi-halaman">
				<form action="<?= BASE_URL ?>profil/update" method="POST">
					<table cellspacing="7"l>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input class="input" name="username" type="text" value="<?= $_SESSION['login']['username'] ?>"></td>
						</tr>
						<tr>
							<td>Photo</td>
							<td>:</td>
							<td><input name="file" type="file"></td>
						</tr>
						<tr>
							<td colspan="3"><button type="submit" class="btn-detail">Update profil</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>

	</div>
</div>