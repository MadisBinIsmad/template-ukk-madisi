<?php
include "../../../koneksi.php";

$$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$Tahun_Penerbit = $_POST['Tahun_Penerbit'];
$KategoriID = $_POST['KategoriID'];
$Stok = $_POST['Stok'];

if ($_FILES['Cover']['name'] != '') {

    $query_get_filename = "SELECT Cover FROM buku WHERE BukuID='" . $BukuID . "'";
    $result_get_filename = mysqli_query($koneksi, $query_get_filename);
    if ($result_get_filename && mysqli_num_rows($result_get_filename) > 0) {
        $samid = mysqli_fetch_assoc($result_get_filename);
        $old_file_name = $samid['Cover'];

        $old_file_path = "../../../assets/img/buku/" . $old_file_name;
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }
    }


    $new_file_name = $_FILES['Cover']['name'];
    $tmp_name = $_FILES['Cover']['tmp_name'];
    move_uploaded_file($tmp_name, "../../../assets/img/buku/" . $new_file_name);

    $query_update = "UPDATE buku SET Judul='$Judul', Penulis='$Penulis', Penerbit='$Penerbit', Tahun_Penerbit='$Tahun_Penerbit', Cover='$new_file_name', KategoriID='$KategoriID', Stok='$Stok' WHERE BukuID='$BukuID'";
} else {
    $query_update = "UPDATE buku SET Judul='$Judul', Penulis='$Penulis', Penerbit='$Penerbit', Tahun_Penerbit='$Tahun_Penerbit', KategoriID='$KategoriID', Stok='$Stok' WHERE BukuID='$BukuID'";
}

$icikiwir = mysqli_query($koneksi, $query_update);

if ($icikiwir) {
    echo "<script>
    alert('Buku berhasil diubah');
    location.href='../admin/buku.php';
    </script>";
} else {
    echo "<script>
    alert('Buku gagal diubah');
    location.href='../admin/buku.php';
    </script>";
}
?>