<?php
session_start();
if ($_SESSION['status'] != 'login') {
    echo "<script>
    alert('Anda belum login');
    location.href='../../login.php';
    </script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Laporan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="icon" type="image/png" href="../assets/img/favicon/new.png">
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="../assets/img/favicon/logo.png" alt="" class="img-fluid"
                                style="display: flex; max-width: 100px; max-height: 100px;">
                        </span>
                    </a>
                </div>


                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item pt-3">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home"></i>
                            <div data-i18n="dashboard">Dashboard</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase text-center pt-4">
                        <span class="menu-header-text ">Menu</span>
                    </li>
                    <!-- Apps -->
                    <li class="menu-item ">
                        <a href="buku.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-book"></i>
                            <div data-i18n="book">Buku</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="kategoribuku.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-category"></i>
                            <div data-i18n="category">Kategori Buku</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="peminjaman.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-log-in-circle"></i>
                            <div data-i18n="peminjaman">Peminjaman</div>
                        </a>
                    </li>
                    <li class="menu-item active open">
                        <a href="laporan.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-report"></i>
                            <div data-i18n="laporan">Laporan</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase text-center pt-4">
                        <span class="menu-header-text ">User</span>
                    </li>

                    <li class="menu-item">
                        <a href="user.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-user"></i>
                            <div data-i18n="user">User</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    Welcome Admin, <b>
                                        <?php echo $_SESSION['NamaLengkap']; ?>
                                    </b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="profile.php">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../logout.php">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                <!-- / Navbar -->
                <div class="card m-4">
                    <h5 class="card-header mb-4">Laporan Peminjam</h5>
                    <div class="table-responsive text-nowrap">
                        <form method="POST" class="flex items-center justify-center mb-4">
                            <label style="padding-left: 150px;" for="dari_tgl" class="text-uppercase mr-2">Dari Tanggal
                                : </label>
                            <input type="date" name="dari_tgl" id="dari_tgl" class="p-1 border rounded-md" required>
                            <label style="padding-left: 10px;" for="sampai_tgl" class="text-uppercase mx-2">Sampai
                                Tanggal : </label>
                            <input type="date" name="sampai_tgl" id="sampai_tgl" class="p-1 border rounded-md" required>
                            <button type="submit" name="filter" value="filter" class="btn-primary"
                                style="border-radius:10%;">Cari</button>
                            <button type="button" onclick="cetakData()" class="btn-primary"
                                style="border-radius:10%;">Cetak</button>
                        </form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Peminjam</th>
                                    <th>Buku</th>
                                    <th>Tanggal Peminjam</th>
                                    <th>Tanggal Pengembelian</th>
                                    <th>Status Peminjaman</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php
                            include "../koneksi.php";
                            $no = 1;

                            if (isset($_POST['filter'])) {
                                $dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
                                $sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
                                $sql = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user
                                        ON user.UserID = peminjaman.UserID
                                        LEFT JOIN buku ON buku.BukuID = peminjaman.BukuID
                                        WHERE TanggalPeminjaman BETWEEN '$dari_tgl' AND '$sampai_tgl'");
                            } else {
                                $query = "SELECT * FROM peminjaman LEFT JOIN user
                    ON user.UserID = peminjaman.UserID
                    LEFT JOIN buku ON buku.BukuID = peminjaman.BukuID";
                                $sql = mysqli_query($koneksi, $query);
                            }

                            if (mysqli_num_rows($sql) > 0):
                                ?>
                                ?>
                                <tbody>
                                    <?php while ($data = mysqli_fetch_array($sql)): ?>
                                        <tr>
                                            <td>
                                                <div class='ps-3'>
                                                    <h6 class='mb-0 text-xs font-weight-bold'>
                                                        <?php echo $no; ?>
                                                    </h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class='align-middle text-center text-sm'>
                                                    <h6 class='text-xs font-weight-bold mb-0'>
                                                        <?php echo $data['NamaLengkap']; ?>
                                                    </h6>
                                                </div>
                                            </td>
                                            <td class='align-middle text-center text-sm'>
                                                <h6 class='text-xs font-weight-bold mb-0'>
                                                    <?php echo $data['Judul']; ?>
                                                </h6>
                                            </td>
                                            <td class='align-middle text-center text-sm'>
                                                <h6 class='text-xs font-weight-bold mb-0'>
                                                    <?php echo $data['TanggalPeminjaman']; ?>
                                                </h6>
                                            </td>
                                            <td class='align-middle text-center text-sm'>
                                                <h6 class='text-xs font-weight-bold mb-0'>
                                                    <?php echo $data['TanggalPengembalian']; ?>
                                                </h6>
                                            </td>
                                            <td class='align-middle text-center text-sm'>
                                                <?php
                                                $status = $data['StatusPeminjaman'];
                                                $colorClass = ($status == 'Dipinjam') ? 'bg-danger text-white' : 'bg-success text-white';
                                                ?>
                                                <h6 class='text-xs font-weight-bold mb-0'>
                                                    <span class="badge <?= $colorClass ?>">
                                                        <?= $status ?>
                                                    </span>
                                                </h6>
                                            </td>
                                            <td class='align-middle text-center text-sm'>
                                                <a href='print.php?peminjaman_id=<?php echo $data["PeminjamanID"]; ?>'
                                                    class='btn btn-link text-success px-2 mb-0' target='_blank'><i
                                                        class='fa fa-print me-2'></i></a>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endwhile; ?>
                                </tbody>
                            <?php else: ?>
                                <tbody>
                                    <tr>
                                        <td colspan='6' class='text-center'>Laporan Peminjaman kosong.</td>
                                    </tr>
                                </tbody>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>
                <!-- Content wrapper -->

                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->

        <script src="../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../assets/vendor/libs/popper/popper.js"></script>
        <script src="../assets/vendor/js/bootstrap.js"></script>
        <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="../assets/vendor/js/menu.js"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="../assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="../assets/js/dashboards-analytics.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script>
            function printData(PeminjamanID) {
                window.print();
            }

            function cetakData() {
                var dari_tgl = document.getElementById('dari_tgl').value;
                var sampai_tgl = document.getElementById('sampai_tgl').value;
                window.open('print2.php?dari_tgl=' + dari_tgl + '&sampai_tgl=' + sampai_tgl, '_blank');
            }
        </script>

</body>

</html>