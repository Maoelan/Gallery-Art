<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Art Collection</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="gallery-clean.css">


</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="font-style: italic;" href="#">Art Collection</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="auth.php">Login</a></li>
                    <!-- <li><a href="register.php">Register</a></li> -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container gallery-container">

        <h1 style="margin: 0;">Simple Art Collection</h1>

        <p class="page-description text-center">Just Another Simple Layout</p>
        <div class="tz-gallery">
            <div class="row">
                <?php
                include "conn.php"; //kita nulonuwon sama database dan server
                $SQL = "SELECT * FROM gallery"; //sintak sql
                $result = mysqli_query($koneksi, $SQL); //menjalankan sql
                foreach ($result as $row) {
                ?>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a class="lightbox" href="assets/images/<?php echo $row['gallery_image'] ?>">
                                <img src="assets/images/<?php echo $row['gallery_image'] ?>" alt="Park">
                            </a>
                            <div class="caption">
                                <h3><?php echo $row['gallery_name'] ?></h3>
                                <p><?php echo $row['gallery_desc'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <footer style="padding:2em" class="text-muted text-center text-small">
            <p class="mb-1">© 2020-2021 <span class="font-italic">Art Collection</span></p>
        </footer>
        <script src="assets/datatable/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            baguetteBox.run('.tz-gallery');
        </script>
</body>

</html>