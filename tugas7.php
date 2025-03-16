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
            <h3>Form Input Data</h3>
        </div>
        <div class="card-body">
            <form method="POST">
                <!-- Nomor -->
                <div class="mb-3">
                    <label class="form-label">No</label>
                    <input type="text" class="form-control" name="no" required>
                </div>

                <!-- Nama Merek -->
                <div class="mb-3">
                    <label class="form-label">Nama Merek</label>
                    <input type="text" class="form-control" name="nama_merek" required>
                </div>

                <!-- Warna -->
                <div class="mb-3">
                    <label class="form-label">Warna</label>
                    <input type="text" class="form-control" name="warna" required>
                </div>

                <!-- Jumlah -->
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" min="1" required>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-between">
                    <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn btn-warning">Ulangi</button>
                    <a href="index.php" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['simpan'])) {
        $no = $_POST['no'];
        $nama_merek = $_POST['nama_merek'];
        $warna = $_POST['warna'];
        $jumlah = $_POST['jumlah'];

        echo "
        <div class='mt-4'>
            <div class='card border-success'>
                <div class='card-header bg-success text-white text-center'>
                    <h4>Data yang Dimasukkan</h4>
                </div>
                <div class='card-body'>
                    <p><strong>Nomor:</strong> $no</p>
                    <p><strong>Nama Merek:</strong> $nama_merek</p>
                    <p><strong>Warna:</strong> $warna</p>
                    <p><strong>Jumlah:</strong> $jumlah</p>
                </div>
            </div>
        </div>";
    }
    ?>
</div>


</body>
</html>