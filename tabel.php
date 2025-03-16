<?php
session_start();
$mahasiswa = isset($_SESSION['mahasiswa']) ? $_SESSION['mahasiswa'] : [];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3 class="text-center mb-4">Daftar Mahasiswa</h3>
    
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($mahasiswa)) {
                $no = 1;
                foreach ($mahasiswa as $mhs) {
                    echo "<tr>
                        <td>{$no}</td>
                        <td>{$mhs['nim']}</td>
                        <td>{$mhs['nama']}</td>
                        <td>{$mhs['gender']}</td>
                        <td>{$mhs['jurusan']}</td>
                    </tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='5' class='text-center'>Belum ada data mahasiswa.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="index.php" class="btn btn-primary">Tambah Mahasiswa</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
