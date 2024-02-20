<!DOCTYPE html>
<html>

<head>
    <title>Halaman Pegawai</title>
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['status'] != 'login') {
        echo "<script>
    alert('Anda belum login');
    location.href='../login.php';
    </script>";
    }
    ?>
    <h1>Halaman Pegawai</h1>

    <p>Halo <b>

            <a href="../logout.php">LOGOUT</a>

</body>

</html>