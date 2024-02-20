<!DOCTYPE html>
<html>

<head>
    <title>Halaman User</title>
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


    <h1>Halaman Penyewa</h1>

    <p>Halo <b>
            <a href="../logout.php">LOGOUT</a>

            <br />
            <br />

            <a><a href="https://www.malasngoding.com/membuat-login-multi-user-level-dengan-php-dan-mysqli">Membuat Login
                    Multi
                    Level Dengan PHP</a> - www.malasngoding.com</a>
</body>

</html>