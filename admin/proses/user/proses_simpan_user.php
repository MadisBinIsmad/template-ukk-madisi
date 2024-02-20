<?php
include '../../../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $Username = $_POST['Username'];
    $Password = md5($_POST['Password']);
    $Email = $_POST['Email'];
    $NamaLengkap = $_POST['NamaLengkap'];
    $Alamat = $_POST['Alamat'];
    $Level = $_POST['Level'];

    // Query untuk menyimpan data user baru
    $query = "INSERT INTO user VALUES (NULL, '$Username', '$Password', '$Email', '$NamaLengkap', '$Alamat', '$Level')";

    // Eksekusi query
    $kata = mysqli_query($koneksi, $query);

    if ($kata) {
        echo "<script>
    alert('User berhasil ditambahkan');
    location.href='../../user.php';
    </script>";
    } else {
        echo "<script>
    alert('User gagal ditambahkan');
    location.href='../../user.php';
    </script>";
    }
}
?>