<?php
// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form registrasi
$Username = $_POST['Username'];
$Password = md5($_POST['Password']);
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];


// menambahkan data user ke database
$query = "INSERT INTO user (Username, Password, Email, NamaLengkap, Alamat, Level) VALUES ('$Username', '$Password', '$Email', '$NamaLengkap', '$Alamat', '3')";

$result = mysqli_query($koneksi, $query);

if ($result) {
    // jika registrasi sukses, redirect ke halaman login dengan pesan sukses
    header("location:login.php?pesan=Daftar Akun anda Berhasil !");
} else {
    // jika registrasi gagal, redirect ke halaman registrasi dengan pesan kesalahan
    header("location:registrasi.php?pesan=Ada Kesalahan Coba Cek Kembali");
}
?>