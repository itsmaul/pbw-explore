<!DOCTYPE html>
<html>
	<head>
		<title>The Dream Show 3: Dream()Scape</title>

		<!-- Connect dengan Bootstrap -->
		<link rel="stylesheet" href="style/css/bootstrap.css">

		<!-- Connect dengan CSS Manual -->
		<link rel="stylesheet" href="style/style.css">
	</head>

	<body>
		<!-- Connect dengan File PHP External -->
        <?php
            include("file.php");
        ?>

		<header>
			<h2 class="text-center">Pembelian Tiket Konser</h2>
			<h1 class="text-center">The Dream Show 3: Dream()Scape</h1>
		</header>
		
		<br>

		<!-- Form Pembelian Tiket -->
		<div class="container-sm">
			<form action="" method="post">

				<div class="row mb-3">
					<label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
					<div class="col-sm-10">
						<input type="text" name="namalengkap" class="form-control" placeholder="Masukkan Nama Lengkap" required="">
					</div>
				</div>

				<div class="row mb-3">
					<label for="nik" class="col-sm-2 col-form-label">NIK</label>
					<div class="col-sm-10">
						<input type="number" name="nik" class="form-control" placeholder="Masukkan NIK" required="">
					</div>
				</div>

				<fieldset class="row mb-3" >
					<legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
					<div class="col-sm-10">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="jeniskelamin" value="Laki-laki" checked>
							<label class="form-check-label" for="jeniskelamin">Laki-laki</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="radio" name="jeniskelamin" value="Perempuan" checked>
							<label class="form-check-label" for="jeniskelamin">Perempuan</label>
						</div>
					</div>
				</fieldset>

				<div class="row mb-3">
					<label for="usia" class="col-sm-2 col-form-label">Usia</label>
					<div class="col-sm-10">
						<input type="number" name="usia" class="form-control" placeholder="Masukkan Usia" required="">
					</div>
				</div>

				<div class="row mb-3">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Pilihan CAT</label>
					<div class="col-sm-10">
						<select class="form-control" name="pilihCAT">

						<!-- Perulangan untuk Menampilkan Jenis CAT -->
						<?php
							foreach ($jenisCAT as $jc) {
								echo "<option value='".$jc."'>".$jc."</option>";
							}
						?>

						</select>
					</div>
				</div>

				<div class="row mb-3">
					<label for="harga" class="col-sm-2 col-form-label">Harga Tiket</label>
					<div class="col-sm-10">
						<input type="number" name="harga" class="form-control" placeholder="Masukkan Nominal" required="">
					</div>
				</div>

				<div class="row mb-3">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Biaya Admin</label>
					<div class="col-sm-10">
						<select class="form-control" name="b_admin">

						<!-- Perulangan untuk Menampilkan Biaya Admin -->
						<?php
							foreach($biayaAdmin as $ba) {
								echo "<option value='".$ba."'>".$ba."</option>";
							}
						?>

						</select>
					</div>
				</div>

				<div class="row mb-3">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Biaya Pajak</label>
					<div class="col-sm-10">
						<select class="form-control" name="b_pajak">

						<!-- Perulangan untuk Menampilkan Biaya Pajak -->
						<?php
							foreach($pajakHiburan as $ph) {
								echo "<option value='".$ph."'>".$ph."</option>";
							}
						?>

						</select>
					</div>
				</div>

				<div class="text-center">
					<button type="submit" name="submit" class="btn btn-success">Beli Tiket</button>
				</div>

			</form>
		</div>

		<br>

		<footer>
        	<h6>COPYRIGHT &copy; 2210631170100 RISMA AULIYA SALSABILLA</h6>
    	</footer>

	</body>
</html>