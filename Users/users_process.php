<?php
include '../conn.php';
if (isset($_POST['tambah']))
{
    $id    = $_POST['id'];
    $users_name  = $_POST['user'];
    $users_pass  = $_POST['pass'];
    $users_alias = $_POST['role'];
    $sql = "INSERT INTO users VALUES (
'$id',
'$users_name',
MD5('$users_pass'),
'$users_alias'
)";
    if ( empty($id) || empty($users_name) || empty($users_pass) || empty($users_alias))
    {
        echo "
<script>
alert('Pastikan anda mengisi semua data');
window.location = 'users_insert.php';
</script>
 ";
    }
    elseif (mysqli_query($koneksi, $sql))
    {
        echo "
<script>
alert('Data berhasil ditambahkan');
window.location = 'users.php';
</script>
 ";
    }
    else
    {
        echo "
<script>
alert('Terjadi Kesalahan');
window.location = 'users_insert.php';
</script>
 ";
    }
}
elseif (isset($_POST['edit']))
{
  $id    = $_POST['id'];
  $users_name  = $_POST['user'];
  $users_pass  = $_POST['pass'];
  $users_alias = $_POST['role'];
    $sql = "UPDATE users SET users_id = '$id', users_name = '$users_name', users_pass = MD5('$users_pass') , users_alias = '$users_alias' WHERE users_id = '$id'
";
    if (mysqli_query($koneksi, $sql))
    {
        echo "
<script>
alert('Data berhasil diubah');
window.location = 'users.php';
</script>
 ";
    }
    else
    {
        echo "
<script>
alert('Terjadi Kesalahan');
window.location = 'users_update.php?id=$id';
</script>
 ";
    }
}
?>
