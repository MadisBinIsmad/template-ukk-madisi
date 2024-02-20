<?php
session_start();
if ($_SESSION['status'] != 'login') {
    echo "<script>
    alert('Anda belum login');
    location.href='../../login.php';
    </script>";
}
?>