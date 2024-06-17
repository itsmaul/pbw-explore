<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemesan Tiket TDS 3</title>

    <!-- Connect dengan Bootstrap -->
    <link rel="stylesheet" href="style/css/bootstrap.css">

    <!-- Connect dengan CSS Manual -->
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
    <!-- Connect dengan File PHP External -->
    <?php
        include("./file.php");
    ?>

    <!-- Menampilkan Daftar Pembeli Tiket Konser -->
	<header>
		<h2 class="text-center">Daftar Pemesan Tiket Konser</h2>
		<h1 class="text-center">The Dream Show 3: Dream()Scape</h1>
	</header>

	<div class="container-sm">
		<table class="table table-bordered" border="1">
			<thead class="text-center">
				<tr>
					<th>Nama Lengkap</th>
					<th>NIK</th>
					<th>Jenis Kelamin</th>
					<th>Usia</th>
					<th>Pilihan CAT</th>
					<th>Harga Tiket</th>
					<th>Biaya Admin</th>
					<th>Biaya Pajak</th>
					<th>Total Harga Tiket</th>
				</tr>
			</thead>

			<tbody>
				<!-- Perulangan untuk Menampilkan Isi Array Daftar Pemesan Tiket Konser -->
				<?php
                    $query = mysqli_query($database, "SELECT * FROM pemesan_tiket");
					while ($pemesan = mysqli_fetch_array ($query)) {
                        echo "<tr>";
                        echo "<td style='text-align: center;'>".$pemesan["namalengkap"]."</td>";
                        echo "<td style='text-align: center;'>".$pemesan["nik"]."</td>";
                        echo "<td style='text-align: center;'>".$pemesan["jeniskelamin"]."</td>";
                        echo "<td style='text-align: center;'>".$pemesan["usia"]."</td>";
                        echo "<td style='text-align: center;'>".$pemesan["pilihCAT"]."</td>";
                        echo "<td style='text-align: center;'>".$pemesan["harga"]."</td>";
                        echo "<td style='text-align: center;'>".$pemesan["b_admin"]."</td>";
                        echo "<td style='text-align: center;'>".$pemesan["b_pajak"]."</td>";
                        echo "<td style='text-align: center;'>".$pemesan["totalharga"]."</td>";
                        echo "</tr>";
                    }
				?>
			</tbody>
		</table>
	</div>

</body>
</html>