<?php
include '../conn.php';
if (isset($_POST['tambah']))
{
    $id    = $_POST['id'];
    $types_name  = $_POST['type'];
    $sql = "INSERT INTO types VALUES (
'$id',
'$types_name'
)";
    if ( empty($id) || empty($types_name))
    {
        echo "
<script>
alert('Pastikan anda mengisi semua data');
window.location = 'types_insert.php';
</script>
 ";
    }
    elseif (mysqli_query($koneksi, $sql))
    {
        echo "
<script>
alert('Data berhasil ditambahkan');
window.location = 'types.php';
</script>
 ";
    }
    else
    {
        echo "
<script>
alert('Terjadi Kesalahan');
window.location = 'types_insert.php';
</script>
 ";
    }
}
elseif (isset($_POST['edit']))
{
  $id    = $_POST['id'];
  $types_name  = $_POST['type'];
    $sql = "UPDATE types SET types_id = '$id', types_name = '$types_name' WHERE types_id = '$id'
";
    if (mysqli_query($koneksi, $sql))
    {
        echo "
<script>
alert('Data berhasil diubah');
window.location = 'types.php';
</script>
 ";
    }
    else
    {
        echo "
<script>
alert('Terjadi Kesalahan');
window.location = 'types_update.php?id=$id';
</script>
 ";
    }
}
?>
