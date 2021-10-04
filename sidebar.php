<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">My Arts</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="logout.php">Sign out</a>
            </li>
        </ul>
    </nav>
<?php
$a = $_SERVER['REQUEST_URI'];
$b = '';
$c = '';
$d = '';
$e = '';
$f = '';
if ($a == strpos($a, 'dashboard')) {
    $b = 'active';
    $f = $c = $d = $e = '';
} elseif (strpos($a, 'gallery')) {
    $c = 'active';
    $f = $b = $d = $e = '';
}
?>

?>


<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="../dashboard.php">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?= $c ?>" href="gallery.php">
                            <span data-feather="file"></span>
                            Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?= $d ?>" href="users.php">
                            <span data-feather="file"></span>
                            Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?= $e ?>" href="gallery.php">
                            <span data-feather="file"></span>
                            Artist
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
