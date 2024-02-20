<?php

include "../../../koneksi.php";

$BukuID = $_GET['BukuID'];

$query = "DELETE FROM buku WHERE BukuID='" . $BukuID . "'";
$madis = mysqli_query($koneksi, $query);

if ($madis) {
    echo "<script>
    alert('Buku berhasil dihapus');
    location.href='../../kategoribuku.php';
    </script>";
} else {
    echo "<script>
    alert('Buku gagal dihapus');
    location.href='../../kategoribuku.php';
    </script>";
}

?>