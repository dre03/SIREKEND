@include('layouts.header');
@include('layouts.sidebar');
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Mobil</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Show Mobil</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ Storage::url('public/mobils/') . $mobil->foto }}"
                    class="img-fluid rounded-start"alt="route gambar salah">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">{{ $mobil->merk->nama }}</h5>
                    <div class="row">
                        <label for="staticEmail" class="col-sm-3">Merk</label>
                        <div class="col-sm-9">
                            <p>{{ $mobil->merk->produk }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="nopol" class="col-sm-3">No Kendaraan</label>
                        <div class="col-sm-9">
                            <p>{{ $mobil->nopol }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="warna" class="col-sm-3">Warna</label>
                        <div class="col-sm-9">
                            <p>{{ $mobil->warna }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="cc" class="col-sm-3">CC</label>
                        <div class="col-sm-9">
                            <p>{{ $mobil->cc }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="cc" class="col-sm-3">Kilometer</label>
                        <div class="col-sm-9">
                            <p>{{ $mobil->km_mobil }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="tahun" class="col-sm-3">Tahun</label>
                        <div class="col-sm-9">
                            <p>{{ $mobil->tahun }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="tahun" class="col-sm-3">Harga Sewa</label>
                        <div class="col-sm-9">
                            <p>{{ $mobil->harga_sewa }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="deskripsi" class="col-sm-3">Deskripsi</label>
                        <div class="col-sm-9">
                            <p>{{ $mobil->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- End #main -->

@include('layouts.footer')
