<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Arts</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/datatable/datatables.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<?php
include "conn.php"; //kita nulonuwon sama database dan server
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $SQL = "SELECT * FROM users where users_id = '$id' "; //sintak sql
    $result = mysqli_query($koneksi, $SQL); //menjalankan sql
    if (!$result) {
        echo "<script> 
        alert('Get Out !!!, Intruders');
        window.location = 'index.php';
        </script>";
    }
} else {
    echo "<script> 
            alert('Get Out !!!, Intruders');
            window.location = 'index.php';
            </script>";
}

?>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">My Arts</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="logout.php">Sign out</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard.php">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Gallery/gallery.php">
                                <span data-feather="file"></span>
                                Gallery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Users/Users.php">
                                <span data-feather="file"></span>
                                Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Artist/Artist.php">
                                <span data-feather="file"></span>
                                Artist
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Types/Types.php">
                                <span data-feather="file"></span>
                                Types
                            </a>
                        </li>
                    </ul>

                    <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Tools</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Reports
                            </a>
                        </li>
                    </ul> -->
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row">
                    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                            <h1 class="h2">Dashboard</h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <button class="btn btn-sm btn-outline-secondary">Share</button>
                                    <button class="btn btn-sm btn-outline-secondary">Export</button>
                                </div>
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                    <span data-feather="calendar"></span>
                                    This week
                                </button>
                            </div>
                        </div>
                    </main>
                </div>
            </div>

            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/bootstrap.bundle.min.js"></script>
            <script src="assets/datatable/jquery-3.6.0.min.js"></script>
            <script src="assets/datatable/datatables.min.js"></script>
            <script src="assets/datatable/datatable.js"></script>
</body>

</html>