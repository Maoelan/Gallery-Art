<?php
include '../conn.php';
$id = $_GET['id'];
if (!isset($_GET['id'])) {
    echo "<script>alert('Tidak ada ID yang Terdeteksi');window.location = 'users.php';</script>";
}
$sql = "DELETE FROM artist WHERE artist_id = '$id'";
if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil dihapus');window.location = 'artist.php';</script>";
} else {
    echo "<script>alert('Terjadi Kesalahan');window.location = 'artist.php';</script>";
}
?>
