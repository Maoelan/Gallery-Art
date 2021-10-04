<?php 
include '../conn.php';
if (!isset($_POST['ids'])) {
    echo "<script>alert('Tidak ada Data yang Dihapus ');window.location = 'gallery.php';</script>";
}
$mbledos = implode(',',$_POST['ids']);
$sql = "DELETE FROM gallery WHERE gallery_id in ($mbledos)";
if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil dihapus');window.location = 'gallery.php';</script>";
} else {
    echo "<script>alert('Terjadi Kesalahan');window.location = 'gallery.php';</script>";
}
?>
