<?php

include "../../../koneksi.php";

$KategoriID = $_POST['KategoriID'];
$NamaKategori = $_POST['NamaKategori'];

$query = "UPDATE kategoribuku SET NamaKategori='" . $NamaKategori . "' WHERE KategoriID='" . $KategoriID . "'";
$madis = mysqli_query($koneksi, $query);

if ($madis) {
    echo "<script>
                    alert('Kategori Buku berhasil diubah');
                    location.href='../../kategoribuku.php';
                    </script>";
} else {
    echo "<script>
                    alert('Kategori Buku gagal diubah');
                    location.href='../../kategoribuku.php';
                     </script>";
}


?>