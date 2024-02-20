<?php

include "../../../koneksi.php";

$KategoriID = $_GET['KategoriID'];

$query = "DELETE FROM kategoribuku WHERE KategoriID='" . $KategoriID . "'";
$madis = mysqli_query($koneksi, $query);

if ($madis) {
    echo "<script>
    alert('Kategori Buku berhasil dihapus');
    location.href='../../kategoribuku.php';
    </script>";
} else {
    echo "<script>
    alert('Kategori Buku gagal dihapus');
    location.href='../../kategoribuku.php';
    </script>";
}

?>