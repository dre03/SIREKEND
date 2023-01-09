<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rental Mobil Detail - Laravel</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('homepage') }}/css/styles.css" rel="stylesheet" />
    <link rel="{{ asset('homepage') }}/stylesheet" href="css/custom.css" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">SIREKEND</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="./">HOME</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="./">Mobil</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="./">Contact</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="./">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Detail Mobil</h1>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-5">
                    <div class="card">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ Storage::url('public/mobils/') . $mobil->foto }}"
                            alt="gambar salah" />
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="card h-100">
                        <!-- Product details-->
                        <div class="card-body card-body-custom pt-4">
                            <div>
                                <!-- Product name-->
                                <h3 class="fw-bolder text-primary">Deskripsi</h3>
                                <p>{{ $mobil->deskripsi }}</p>
                                <div class="mobil-info-list border-top pt-4">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="row">
                                                <i class="bi bi-ev-front"></i>
                                                <label for="mobil" class="col-sm-3">Nama Mobil</label>
                                                <div class="col-sm-9">
                                                    <p>{{ $mobil->merk->nama }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <label for="mobil" class="col-sm-3">No Kendaraan</label>
                                                <div class="col-sm-8">
                                                    <p>{{ $mobil->nopol }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <label for="mobil" class="col-sm-3">Merk</label>
                                                <div class="col-sm-8">
                                                    <p>{{ $mobil->merk->produk }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <label for="mobil" class="col-sm-3">Warna</label>
                                                <div class="col-sm-9">
                                                    <p>{{ $mobil->warna }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <label for="mobil" class="col-sm-3">CC</label>
                                                <div class="col-sm-9">
                                                    <p>{{ $mobil->cc }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <label for="mobil" class="col-sm-3">Kilometer</label>
                                                <div class="col-sm-9">
                                                    <p>{{ $mobil->km_mobil }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <label for="mobil" class="col-sm-3">Tahun</label>
                                                <div class="col-sm-9">
                                                    <p>{{ $mobil->tahun }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <label for="mobil" class="col-sm-3">Harga Sewa</label></label>
                                                <div class="col-sm-9">
                                                    <p>{{ $mobil->harga_sewa }}</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">
                Copyright &copy; Your Website 2022
            </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('homepage') }}/js/scripts.js"></script>
</body>

</html>
