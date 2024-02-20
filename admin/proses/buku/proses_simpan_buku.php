<?php
include '../../../koneksi.php';

$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$Tahun_Penerbit = $_POST['Tahun_Penerbit'];
$KategoriID = $_POST['KategoriID'];
$Stok = $_POST['Stok'];

$file_name = $_FILES['Cover']['name'];
$tmp_name = $_FILES['Cover']['tmp_name'];

$counter = 1;
$new_file_name = $file_name;
while (file_exists("../../../assets/img/buku/" . $new_file_name)) {
  $new_file_name = pathinfo($file_name, PATHINFO_FILENAME) . $counter . '.' . pathinfo($file_name, PATHINFO_EXTENSION);
  $counter++;
}
move_uploaded_file($tmp_name, "../../../assets/img/buku/" . $new_file_name);

$sql = mysqli_query($koneksi, "INSERT INTO buku VALUES (NULL, '$Judul', '$Penulis', '$Penerbit', '$Tahun_Penerbit', '$new_file_name', '$KategoriID', '$Stok')");

if ($sql) {
  echo "<script>
    alert('Buku berhasil ditambahkan');
    location.href='../../buku.php';
    </script>";
} else {
  echo "<script>
    alert('Buku gagal ditambahkan');
    location.href='../../buku.php';
    </script>";
}