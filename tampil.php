<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap5/js/bootstrap.js">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="text-center">Data Mahasiswa</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
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
                    $query = "SELECT * FROM mahasiswa";
                    $result = mysqli_query($conn, $query);
                    $no = 1;

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>$no</td>
                                <td>{$row['nim']}</td>
                                <td>{$row['nama']}</td>
                                <td>{$row['gender']}</td>
                                <td>{$row['jurusan']}</td>
                              </tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
            <a href="form.php" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
</div>


</body>
</html>