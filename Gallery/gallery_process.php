<?php
include '../conn.php';
if (isset($_POST['tambah'])) {
    $_1 = $_POST['title'];
    $_2 = $_POST['desc'];
    $_3 = $_POST['types'];
    $_4 = $_POST['artist'];
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $nama = 'art'.rand(100,200).$_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 500000) {
            $query = mysqli_query($koneksi, "INSERT INTO gallery VALUES(null,'$nama','$_1','$_2',$_3,$_4)");
            if ($query) {
                move_uploaded_file($file_tmp, '../assets/images/' . $nama);
                echo "<script>alert('Data berhasil di insert');window.location = 'gallery.php';</script>";
            } else {
                echo "<script>alert('Data gagal di insert');window.location = 'gallery.php';</script>";
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $_1 = $_POST['title'];
    $_2 = $_POST['desc'];
    $_3 = $_POST['types'];
    $_4 = $_POST['artist'];
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $nama = 'art'.rand(100,200).$_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $nama_old = $_POST['nama_old'];;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 500000) {
            if (file_exists('..'. DIRECTORY_SEPARATOR .'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $nama_old)) {
                unlink('..'. DIRECTORY_SEPARATOR .'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $nama_old);
            }
            $query = mysqli_query($koneksi, "UPDATE gallery SET gallery_image = '$nama', gallery_name = '$_1', gallery_desc = '$_2' , types_id = '$_3', artist_id = '$_4' WHERE gallery_id = '$id'");
            if ($query) {
                move_uploaded_file($file_tmp, '../assets/images/' . $nama);
                echo "<script>alert('Data berhasil di update');window.location = 'gallery.php';</script>";
            } else {
                echo "<script>alert('Data gagal di update');window.location = 'gallery.php';</script>";
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
} else {
    header('location: hisbook.php');
}
