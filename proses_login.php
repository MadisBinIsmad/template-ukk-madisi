<?php
session_start();
include 'koneksi.php';

$username = $_POST['Username'];
$password = md5($_POST['Password']);

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE Username='$username' AND Password='$password'");
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $data = mysqli_fetch_array($sql);

    $_SESSION['UserID'] = $data['UserID'];
    $_SESSION['NamaLengkap'] = $data['NamaLengkap'];
    $_SESSION['Level'] = $data['Level'];
    $_SESSION['status'] = 'login';

    if ($data['Level'] == 'admin') {
        echo "<script>
            alert('Login Admin Berhasil');
            location.href='admin/index.php';
            </script>";
    } else if ($data['Level'] == 'petugas') {
        echo "<script>
            alert('Login Petugas Berhasil');
            location.href='admin/index.php';
            </script>";
    } else {
        echo "<script>
            alert('Login Peminjam Berhasil');
            location.href='user/index.php';
            </script>";
    }
} else {
    echo "<script>
        alert('Username atau Password Salah!');
        location.href='login.php';
        </script>";
}

?>