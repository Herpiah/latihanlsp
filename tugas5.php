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
            <h3>Kalkulator Diskon</h3>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label for="totalBelanja" class="form-label">Masukkan Total Belanja (Rp)</label>
                    <input type="number" class="form-control" name="totalBelanja" id="totalBelanja" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Hitung Diskon</button>
            </form>
        </div>
    </div>

    <?php
    // Function untuk menghitung diskon
    function hitungDiskon($totalBelanja) {
        if ($totalBelanja >= 100000) {
            return 0.10; // Diskon 10%
        } elseif ($totalBelanja >= 50000) {
            return 0.05; // Diskon 5%
        } else {
            return 0.00; // Tidak ada diskon
        }
    }

    // Procedure untuk menampilkan hasil
    function tampilkanHasil($totalBelanja) {
        $diskonPersen = hitungDiskon($totalBelanja);
        $jumlahDiskon = $totalBelanja * $diskonPersen;
        $totalBayar = $totalBelanja - $jumlahDiskon;
        
        echo "
        <div class='mt-4'>
            <div class='card border-success'>
                <div class='card-header bg-success text-white text-center'>
                    <h4>Hasil Perhitungan</h4>
                </div>
                <div class='card-body'>
                    <p><strong>Total Belanja:</strong> Rp. " . number_format($totalBelanja, 0, ',', '.') . "</p>
                    <p><strong>Diskon:</strong> " . ($diskonPersen * 100) . "% (Rp. " . number_format($jumlahDiskon, 0, ',', '.') . ")</p>
                    <h4 class='text-success'><strong>Total Bayar: Rp. " . number_format($totalBayar, 0, ',', '.') . "</strong></h4>
                </div>
            </div>
        </div>";
    }

    // Menjalankan proses jika form dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $totalBelanja = $_POST['totalBelanja'];
        tampilkanHasil($totalBelanja);
    }
    ?>
</div>

    
</body>
</html>