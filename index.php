<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap5/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="bootstrap5/style.css">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4 class="text-center text-white mt-3">Admin Panel</h4>
    <a href="#"><i class="fas fa-home"></i> Dashboard</a>
    <a href="?isi=custemer"><i class="fas fa-users"></i> Data Custemer</a>
    <a href="#"><i class="fas fa-chart-line"></i> Data Sales</a>
    <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<!-- Konten Utama -->
<div class="content">
    <nav class="navbar navbar-expand-lg bg-white shadow">
        <div class="container-fluid">
            <span class="navbar-brand text-primary">Admin Dashboard</span>
            <div class="ms-auto">
                <span class="me-3 text-dark">👤 Admin</span>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?php include"program/isi.php"; ?>
    </div>
</div>


</body>
</html>