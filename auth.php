<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/datatable/datatables.min.css">
    <title>Art gallery</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['login'])) {
        echo "<script> 
                alert('Get Out !!!, You Still Login');
                window.location = 'index.php';
            </script>";
    }
    ?>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Silahkan <span class="font-weight-bold">LOGIN</span></h5></div>
            <div class="card-body">
                <center>
                    <img class="img-profile" src="assets/images/852269.png" alt="">
                </center><br>
              <form action="auth-process.php" method="POST">
                <div class="form-group">
                  <input type="text" name="user" id="basic-url" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="pass" id="basic-url" class="form-control" placeholder="Password">
                </div>
                
                <div class="form-group">
                  <input type="submit" name="set" value="Login" class="btn btn-primary btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/datatable/jquery-3.6.0.min.js"></script>
    <script src="assets/datatable/datatables.min.js"></script>
</body>

</html>