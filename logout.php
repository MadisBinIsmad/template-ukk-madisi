<?php
session_start();
session_unset();
session_destroy();

echo "<script>
    alert('Anda telah berhasil logout');
    window.location.href = 'Login.php';
</script>";
?>