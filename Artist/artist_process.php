<?php
include '../conn.php';
if (isset($_POST['tambah']))
{
    $id    = $_POST['id'];
    $artist_name  = $_POST['name'];
    $sql = "INSERT INTO artist VALUES (
'$id',
'$artist_name'
)";
    if (empty($id) || empty($artist_name))
    {
        echo "
<script>
alert('Pastikan anda mengisi semua data');
window.location = 'artist_insert.php';
</script>
 ";
    }
    elseif (mysqli_query($koneksi, $sql))
    {
        echo "
<script>
alert('Data berhasil ditambahkan');
window.location = 'artist.php';
</script>
 ";
    }
    else
    {
        echo "
<script>
alert('Terjadi Kesalahan');
window.location = 'artist_insert.php';
</script>
 ";
    }
}
elseif (isset($_POST['edit']))
{
  $id    = $_POST['id'];
  $artist_name  = $_POST['name'];
    $sql = "UPDATE artist SET artist_id = '$id', artist_name = '$artist_name' WHERE artist_id = '$id'
";
    if (mysqli_query($koneksi, $sql))
    {
        echo "
<script>
alert('Data berhasil diubah');
window.location = 'artist.php';
</script>
 ";
    }
    else
    {
        echo "
<script>
alert('Terjadi Kesalahan');
window.location = 'artist_update.php?id=$id';
</script>
 ";
    }
}
?>
