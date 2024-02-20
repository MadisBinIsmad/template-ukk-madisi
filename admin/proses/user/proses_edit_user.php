<?php
include "../../../koneksi.php";

$userid = $_POST['UserID'];
$username = $_POST['Username'];
$password = md5($_POST['Password']);
$email = $_POST['Email'];
$namalengkap = $_POST['NamaLengkap'];
$alamat = $_POST['Alamat'];
$level = $_POST['Level'];

$query = "UPDATE user SET Username='$username', Password='$password', Email='$email', NamaLengkap='$namalengkap', Alamat='$alamat', Level='$level' WHERE UserID='$userid'";
$sql = mysqli_query($koneksi, $query);

if ($sql) {
    echo "<script>
    alert('User berhasil diubah');
    location.href='../../user.php';
    </script>";
} else {
    echo "<script>
    alert('User gagal diubah');
    location.href='../../user.php';
    </script>";
}
?>