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
    <title>Halaman Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" type="image/png" href="../assets/img/favicon/new.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

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
                            <img src="../assets/img/favicon/icon.png" alt="" class="img-fluid"
                                style="display: flex; max-width: 100px; max-height: 100px;">
                        </span>
                    </a>
                </div>


                <div class=" menu-inner-shadow">
                </div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active open pt-3">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home"></i>
                            <div data-i18n="dashboard">Dashboard</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase text-center pt-4">
                        <span class="menu-header-text ">Menu</span>
                    </li>
                    <!-- Apps -->
                    <li class="menu-item">
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
                            <div data-i18n="log-in-circle">Peminjaman</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="laporan.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-report"></i>
                            <div data-i18n="log-out-circle">Laporan</div>
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

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-2 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="">
                                            <div class="card-body">
                                                <h5 class="card-title" style=" text-align: center;">
                                                    Dashboard</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Content -->

                        <?php
                        include '../koneksi.php';

                        // Query untuk menghitung total BukuID
                        $total = "SELECT COUNT(BukuID) as total_buku FROM buku";
                        $ini = mysqli_query($koneksi, $total);

                        if ($ini) {
                            $data = mysqli_fetch_assoc($ini);
                            $total_buku = $data['total_buku'];
                        } else {
                            $total_buku = 0; // Default jika terjadi kesalahan
                        }
                        ?>
                        <div class="row">
                            <div class="col-sm-6 col-lg-3 mb-4">
                                <div class="card card-border-shadow-primary h-100">
                                    <div class="card-body text-center">
                                        <div class="d-flex align-items-center mb-2 pb-1">
                                            <div class="avatar me-2">
                                                <span class="avatar-initial rounded bg-label-primary"><i
                                                        class="bx bxs-book-alt"></i></span>
                                            </div>
                                            <p class="mb-1">Total Buku</p>
                                        </div>
                                        <h4 class="ms-1 mb-0">
                                            <?php echo $total_buku; ?>
                                        </h4>
                                        <p class="mb-0">
                                            <hr>
                                            <a class="btn btn-outline-primary" href="buku.php">Lihat
                                                data</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <?php

                            // Query untuk menghitung total KategoriID
                            $query_count_kategori = "SELECT COUNT(KategoriID) as total_kategori FROM kategoribuku";
                            $result_count_kategori = mysqli_query($koneksi, $query_count_kategori);

                            if ($result_count_kategori) {
                                $data_count_kategori = mysqli_fetch_assoc($result_count_kategori);
                                $total_kategori = $data_count_kategori['total_kategori'];
                            } else {
                                $total_kategori = 0; // Default jika terjadi kesalahan
                            }
                            ?>
                            <div class="col-sm-6 col-lg-3 mb-4">
                                <div class="card card-border-shadow-warning h-100">
                                    <div class="card-body text-center">
                                        <div class="d-flex align-items-center mb-2 pb-1">
                                            <div class="avatar me-2">
                                                <span class="avatar-initial rounded bg-label-warning"><i
                                                        class="bx bxs-category-alt"></i></span>
                                            </div>
                                            <p class="mb-1">Kategori Buku</p>
                                        </div>
                                        <h4 class="ms-1 mb-0">
                                            <?php echo $total_kategori; ?>
                                        </h4>
                                        <p class="mb-0">
                                            <hr>
                                            <a class="btn btn-outline-warning" href="kategoribuku.php">Lihat
                                                data</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <?php

                            // Query untuk menghitung total KategoriID
                            $tot = "SELECT COUNT(UserID) as total_user FROM user";
                            $res = mysqli_query($koneksi, $tot);

                            if ($res) {
                                $dat = mysqli_fetch_assoc($res);
                                $total_user = $dat['total_user'];
                            } else {
                                $total_user = 0; // Default jika terjadi kesalahan
                            }
                            ?>
                            <div class="col-sm-6 col-lg-3 mb-4">
                                <div class="card card-border-shadow-danger h-100">
                                    <div class="card-body text-center">
                                        <div class="d-flex align-items-center mb-2 pb-1">
                                            <div class="avatar me-2">
                                                <span class="avatar-initial rounded bg-label-info"><i
                                                        class="bx bxs-log-in-circle"></i></span>
                                            </div>
                                            <p class="mb-1">User</p>
                                        </div>
                                        <h4 class="ms-1 mb-0">
                                            <?php echo $total_user ?>
                                        </h4>
                                        <p class="mb-0">
                                            <hr>
                                            <a class="btn btn-outline-info" href="user.php">Lihat
                                                data</a>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-3 mb-4">
                                <div class="card card-border-shadow-info h-100">
                                    <div class="card-body text-center">
                                        <div class="d-flex align-items-center mb-2 pb-1">
                                            <div class="avatar me-2">
                                                <span class="avatar-initial rounded bg-label-success"><i
                                                        class="bx bxs-log-out-circle"></i></span>
                                            </div>
                                            <p class="mb-1">peminjam</p>
                                        </div>
                                        <h4 class="ms-1 mb-0">
                                            <?php
                                            $querypeminjam = "SELECT COUNT(*) AS total_peminjam FROM user WHERE level = 'peminjam'";
                                            $sqlpeminjam = mysqli_query($koneksi, $querypeminjam);
                                            if ($sqlpeminjam) {
                                                $row = mysqli_fetch_assoc($sqlpeminjam);
                                                $total_peminjam = $row['total_peminjam'];
                                                echo $total_peminjam;
                                            } else {
                                                echo "Error in query: " . mysqli_error($koneksi);
                                            }
                                            ?>
                                        </h4>
                                        <p class="mb-0">
                                            <hr>
                                            <a class="btn btn-outline-success" href="laporan.php">Lihat
                                                data</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
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
</body>

</html>