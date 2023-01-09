<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('nice') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('nice') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('nice') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('nice') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('nice') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('nice') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('nice') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('nice') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('nice') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('nice') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">SIREKEND</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Buat akun</h5>
                                        <p class="text-center small">Masukkan Data Anda untuk membuat akun</p>
                                    </div>

                                    <form action="/register" method="POST" class="row g-3 is-invalid">
                                        @csrf
                                        <div class="col-12">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text"
                                                name="nama"class="form-control @error('nama') is-invalid @enderror "id="nama"
                                                required>
                                            @error('nama')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" name="username"
                                                class="form-control @error('username') is-invalid @enderror"
                                                id="username" required>
                                            @error('username')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror" id="email"
                                                required>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="password" required>
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- <div class="col-12">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="status" id="status" required>
                                                <option selected>Pilih Role</option>
                                                <option value="1">User</option>
                                                <option value="2">Admin</option>
                                            </select>
                                            <div class="invalid-feedback">Silahkan Konfirmasi password anda!</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="role" class="form-label">Role</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="role" id="role" required>
                                                <option selected>Pilih Role</option>
                                                <option value="1">User</option>
                                                <option value="2">Admin</option>
                                            </select>
                                            <div class="invalid-feedback">Silahkan Konfirmasi password anda!</div>
                                        </div> --}}
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Sudah memiliki akun?<a href="/login"> Log
                                                    in</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('nice') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('nice') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('nice') }}/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ asset('nice') }}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('nice') }}/assets/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('nice') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('nice') }}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('nice') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('nice') }}/assets/js/main.js"></script>

</body>

</html>
