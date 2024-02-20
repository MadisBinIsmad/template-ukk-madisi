<?php
// koneksi database
include '../../../koneksi.php';

// menangkap data yang di kirim dari form
$NamaKategori = $_POST['NamaKategori'];

// menginput data ke database
$madis = mysqli_query($koneksi, "insert into kategoribuku values(NULL,'$NamaKategori')");

// mengalihkan halaman kembali ke index.php
if ($madis) {
    echo "<script>
    alert('Kategori Buku berhasil ditambahkan');
    location.href='../../kategoribuku.php';
    </script>";
} else {
    echo "<script>
    alert('Kategori Buku gagal ditambahkan');
    location.href='../../kategoribuku.php';
    </script>";
}

?>