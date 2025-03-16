<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nim    = $_POST['nim'];
    $nama   = $_POST['nama'];
    $gender = $_POST['gender'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO mahasiswa (nim, nama, gender, jurusan) 
              VALUES ('$nim', '$nama', '$gender', '$jurusan')";
    
    if (mysqli_query($conn, $query)) {
        header("Location: tampil.php"); // Alihkan ke halaman tampil.php
        exit();
    } else {
        echo "Gagal Menyimpan Data!";
    }
}
?>
