<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap5/js/bootstrap.js">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h3>Form Pemesanan Makanan</h3>
        </div>
        <div class="card-body">
            <form method="POST">
                <!-- Nama Pelanggan -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>

                <!-- Input Menu dan Jumlah -->
                <div class="mb-3">
                    <label class="form-label">Pesanan</label>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nasiGoreng">Nasi Goreng (Rp.10.000)</label>
                            <input type="number" class="form-control" name="nasiGoreng" id="nasiGoreng" min="0" value="0">
                        </div>
                        <div class="col-md-6">
                            <label for="ayamGoreng">Ayam Goreng (Rp.12.000)</label>
                            <input type="number" class="form-control" name="ayamGoreng" id="ayamGoreng" min="0" value="0">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="esTeh">Es Teh (Rp.2.000)</label>
                            <input type="number" class="form-control" name="esTeh" id="esTeh" min="0" value="0">
                        </div>
                        <div class="col-md-6">
                            <label for="kopi">Kopi (Rp.3.000)</label>
                            <input type="number" class="form-control" name="kopi" id="kopi" min="0" value="0">
                        </div>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-success w-100 mt-3">Hitung Total</button>
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nasiGoreng = $_POST['nasiGoreng'];
        $ayamGoreng = $_POST['ayamGoreng'];
        $esTeh = $_POST['esTeh'];
        $kopi = $_POST['kopi'];

        // Harga Menu
        $hargaNasiGoreng = 10000;
        $hargaAyamGoreng = 12000;
        $hargaEsTeh = 2000;
        $hargaKopi = 3000;

        // Total Harga
        $totalHarga = ($nasiGoreng * $hargaNasiGoreng) + 
                      ($ayamGoreng * $hargaAyamGoreng) + 
                      ($esTeh * $hargaEsTeh) + 
                      ($kopi * $hargaKopi);

        echo "
        <div class='mt-4'>
            <div class='card border-success'>
                <div class='card-header bg-success text-white text-center'>
                    <h4>Detail Pesanan</h4>
                </div>
                <div class='card-body'>
                    <p><strong>Nama Pelanggan:</strong> $nama</p>
                    <p><strong>Nasi Goreng:</strong> $nasiGoreng x Rp.10.000</p>
                    <p><strong>Ayam Goreng:</strong> $ayamGoreng x Rp.12.000</p>
                    <p><strong>Es Teh:</strong> $esTeh x Rp.2.000</p>
                    <p><strong>Kopi:</strong> $kopi x Rp.3.000</p>
                    <h4 class='text-success'><strong>Total Bayar: Rp. " . number_format($totalHarga, 0, ',', '.') . "</strong></h4>
                </div>
            </div>
        </div>";
    }
    ?>
</div>



</body>
</html>