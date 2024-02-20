<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regrister</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <style>
        /* Tambahkan gaya kustom di sini jika diperlukan */
    </style>
</head>

<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-6 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-3 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Daftar Akun</h2>
                                <p class="text-white-50 mb-5">Silahkan Daftar Akun!!</p>

                                <form method="post" action="proses_registrasi.php">

                                    <div class="mb-4">
                                        <label class="form-label" for="Username">Username</label>
                                        <input type="text" id="Username" name="Username"
                                            class="form-control form-control-lg" placeholder="Masukkan Username" />
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="Password">Password</label>
                                        <input type="password" id="Password" name="Password"
                                            class="form-control form-control-lg" placeholder="Masukkan Password" />
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="Email">Email</label>
                                        <input type="email" name="Email" id="Email" class="form-control form-control-lg"
                                            placeholder="Masukkan Email" />
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="NamaLengkap">Nama Lengkap</label>
                                        <input type="text" name="NamaLengkap" id="NamaLengkap"
                                            class="form-control form-control-lg" placeholder="Masukkan Nama Lengkap" />
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="Alamat">Alamat</label>
                                        <input type="text" id="Alamat" name="Alamat"
                                            class="form-control form-control-lg" placeholder="Masukkan Alamat" />
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5 mb-2" type="submit">Daftar</button>
                                    <h6 style="margin-top: 5px;">Sudah Mempunyai Akun ?<a href="login.php"> Login
                                            Disini</a></h6>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>