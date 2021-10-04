<?php
include 'conn.php';
if (isset($_POST['set'])) {
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);
    $sql = "SELECT * FROM users WHERE users_name = '$user' AND users_pass = '$pass'";
    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['users_id'];
            header('location: dashboard.php');
        }
    } else {
        echo "<script> 
                    alert('Get Out !!!, Intruders');
                    window.location = 'auth.php';
                </script>";
    }
}
