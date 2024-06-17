<?php
	// Array Daftar CAT yang Tersedia
	$jenisCAT = array ("Pilih", "CAT 1 (Rp3.500.000,-)", "CAT 2 (Rp3.300.000,-)", "CAT 3 (Rp2.400.000,-)", "CAT 4 (Rp2.400.000,-)", "CAT 5 (Rp1.700.000,-)", "CAT 6 (Rp800.000,-)", "CAT 7 (Rp800.000,-)");

	// Array Biaya Admin dari CAT yang Tersedia
	$biayaAdmin = array ("Pilih Sesuai Urutan CAT", "CAT 1 (Rp3.500.000,-)"=>50000, "CAT 2 (Rp3.300.000,-)"=>50000, "CAT 3 (Rp2.400.000,-)"=>50000, "CAT 4 (Rp2.400.000,-)"=>50000, "CAT 5 (Rp1.700.000,-)"=>40000, "CAT 6 (Rp800.000,-)"=>25000, "CAT 7 (Rp800.000,-)"=>25000);

	// Array Pajak Hiburan
	$pajakHiburan = array ("Pilih Sesuai Urutan CAT", "CAT 1 (Rp3.500.000,-)"=>525000, "CAT 2 (Rp3.300.000,-)"=>495000, "CAT 3 (Rp2.400.000,-)"=>360000, "CAT 4 (Rp2.400.000,-)"=>360000, "CAT 5 (Rp1.700.000,-)"=>255000, "CAT 6 (Rp800.000,-)"=>120000, "CAT 7 (Rp800.000,-)"=>120000);

    // Connect PHP dengan MySQL
    include_once("./connect.php");

    // Menampung Seluruh Hasil Inputan User
    if (isset($_POST['submit'])) {
        $namaPembeli = $_POST['namalengkap'];
        $NIKpembeli = $_POST['nik'];
        $jenisKelamin = $_POST['jeniskelamin'];
        $usiaPembeli = $_POST['usia'];
        $pilihanCAT = $_POST['pilihCAT'];
        $hargaTiketKonser = $_POST['harga'];
        $admin = $_POST['b_admin'];
        $pajak = $_POST['b_pajak'];

        $admin_pajak = $_POST['b_admin'] + $_POST['b_pajak'];
        $totalHargaAll = totalHarga($hargaTiketKonser, $admin_pajak);
        
        // Menampung Inputan User pada Database
        $query = mysqli_query ($database, "INSERT INTO pemesan_tiket VALUES (
            NULL,
            '$namaPembeli',
            $NIKpembeli,
            '$jenisKelamin',
            $usiaPembeli,
            '$pilihanCAT',
            $hargaTiketKonser,
            $admin,
            $pajak,
            $totalHargaAll
            )"
        );
    }

	// Fungsi Menghitung Biaya Admin dan Pajak yang Harus Dibayar
	
	// Fungsi ini berguna untuk menghitung total biaya admin dan pajak yang harus dibayarkan.
	function totalAdminPajak($admin, $pajak) {
		global $biayaAdmin, $pajakHiburan;

		// Mengambil Biaya Admin
		foreach($biayaAdmin as $adm => $adm_value) {
			if($admin == $adm) {
				$nilaiAdmin = $adm_value;
			}
		}

		// Mengambil Biaya Pajak
		foreach($pajakHiburan as $pjk => $pjk_value) {
			if($pajak == $pjk) {
				$nilaiPajak = $pjk_value;
			}
		}

		return $nilaiAdmin + $nilaiPajak;
	}

	// Fungsi ini berguna untuk menghitung total keseluruhan harga tiket konser.
	function totalHarga($admin_pajak, $hargaTiketKonser) {
		return $admin_pajak + $hargaTiketKonser;
	}
    
?>