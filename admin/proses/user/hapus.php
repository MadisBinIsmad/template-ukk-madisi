<?php

include "../../../koneksi.php";

$UserID = $_GET['UserID'];

$query = "DELETE FROM user WHERE UserID='" . $UserID . "'";
$madis = mysqli_query($koneksi, $query);

if ($madis) {
    echo "<script>
    alert('Data User berhasil dihapus');
    location.href='../../user.php';
    </script>";
} else {
    echo "<script>
    alert('Data User gagal dihapus');
    location.href='../../user.php';
    </script>";
}

?>