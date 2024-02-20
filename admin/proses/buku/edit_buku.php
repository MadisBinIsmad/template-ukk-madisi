<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Kategori Buku</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="../../../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../../assets/js/config.js"></script>
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
                            <img src="../../../assets/img/favicon/logo.png" alt="" class="img-fluid"
                                style="display: flex; max-width: 100px; max-height: 100px;">
                        </span>
                    </a>
                </div>


                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item pt-3">
                        <a href="../../index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home"></i>
                            <div data-i18n="dashboard">Dashboard</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase text-center pt-4">
                        <span class="menu-header-text ">Menu</span>
                    </li>
                    <!-- Apps -->
                    <li class="menu-item active open">
                        <a href="../../buku.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-book"></i>
                            <div data-i18n="book">Buku</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="../../kategoribuku.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-category"></i>
                            <div data-i18n="category">Kategori Buku</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="../../peminjaman.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-log-in-circle"></i>
                            <div data-i18n="log-in-circle">Peminjaman</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="../../pengembalian.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-log-out-circle"></i>
                            <div data-i18n="log-out-circle">Pengembalian</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="../../laporan.php" class="menu-link">
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
                            <li class="nav-item lh-1 me-3">
                                <a class="github-button"
                                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                                    data-icon="octicon-star" data-size="large" data-show-count="true"
                                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../../../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
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
                <?php
                include "../../../koneksi.php";
                $BukuID = $_GET['BukuID'];

                // Ubah kondisi WHERE sesuai dengan primary key buku, misalnya BukuID
                $dimas = mysqli_query($koneksi, "SELECT * FROM buku WHERE BukuID='$BukuID'");
                while ($madis = mysqli_fetch_array($dimas)) {

                    ?>

                    <div class="card m-4">
                        <h5 class="card-header">Edit Buku</h5>
                        <form action="proses_ubah_buku.php" method="post">
                            <div class="mb-3 m-4">
                                <input type="hidden" name="BukuID" value="<?php echo $madis['BukuID']; ?>">
                                <div>
                                    <label for="Judul" class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="Judul" id="Judul"
                                        placeholder="Masukkan Judul" value="<?php echo $madis['Judul']; ?>" required>
                                </div>

                                <div>
                                    <label for="Penulis" class="form-label mt-3">Penulis</label>
                                    <input type="text" class="form-control" name="Penulis" id="Penulis"
                                        placeholder="Masukkan Penulis" value="<?php echo $madis['Penulis']; ?>" required>
                                </div>

                                <div>
                                    <label for="Penerbit" class="form-label mt-3">Penerbit</label>
                                    <input type="text" class="form-control" name="Penerbit" id="Penerbit"
                                        placeholder="Masukkan Penerbit" value="<?php echo $madis['Penerbit']; ?>" required>
                                </div>

                                <div>
                                    <label for="Tahun_Penerbit" class="form-label mt-3">Tahun Penerbit</label>
                                    <input type="date" class="form-control" name="Tahun_Penerbit" id="Tahun_Penerbit"
                                        value="<?php echo $madis['Tahun_Penerbit']; ?>" required>
                                </div>

                                <div>
                                    <label for="Cover" class="form-label mt-3">Cover</label>
                                    <input type="file" class="form-control" name="Cover" id="Cover"
                                        value="<?php echo $madis['Cover']; ?>" required>
                                </div>

                                <div>
                                    <label for="Cover" class="form-label mt-3">Kategori</label>
                                    <select id="KategoriID" name="KategoriID" class="form-select"
                                        aria-label="Disabled select example">
                                        <option value="">Pilih Kategori</option>
                                        <?php
                                        $query = "SELECT * FROM kategoribuku";
                                        $sql = mysqli_query($koneksi, $query);
                                        while ($madis = mysqli_fetch_array($sql)) {
                                            $selected = ($madis['KategoriID'] == $KategoriID) ? "selected" : "";
                                            ?>
                                            <option value="<?php echo $madis['KategoriID'] ?>" <?php echo $selected; ?>>
                                                <?php echo $madis['NamaKategori'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div>
                                    <label for="Stok" class="form-label mt-3">Stok</label>
                                    <input type="number" class="form-control" name="Stok" id="Stok"
                                        value="<?php echo $madis['Stok']; ?>" required>
                                </div>
                            </div>
                        <?php } ?>
                        <button type="submit" class="btn btn-success m-4">Simpan</button>
                        <a href="../../buku.php" type="submit" class="btn btn-info">Kembali</a>
                    </form>
                </div>


                <!-- / Layout page -->
            </div>
            <!-- Tambah Data -->



            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->

        <script src="../../../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../../../assets/vendor/libs/popper/popper.js"></script>
        <script src="../../../assets/vendor/js/bootstrap.js"></script>
        <script src="../../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="../../../assets/vendor/js/menu.js"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="../../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="../../../assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="../../../assets/js/dashboards-analytics.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>