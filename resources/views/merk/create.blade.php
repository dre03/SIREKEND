  @include('layouts.header')
  @include('layouts.sidebar')
  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Tambah Merk</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Tamabah Merk</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Tambah Data Merk Baru</h5>
                          <form action="{{ route('merks.store') }}" method="POST">
                              @csrf
                              <div class="form-group">
                                  <label class="font-weight-bold">Nama</label>
                                  <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                      name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Merk">

                                  <!-- error message untuk title -->
                                  @error('nama')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>

                              <div class="form-group">
                                  <label class="font-weight-bold">Produk</label>
                                  <input class="form-control @error('produk') is-invalid @enderror" name="produk"
                                      rows="5" placeholder="Masukkan Produk">{{ old('produk') }}

                                  <!-- error message untuk content -->
                                  @error('produk')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="footer">
                                  <button type="reset" class="btn btn-danger">Reset</button>
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </main>
  <!-- End #main -->
  <script>
      //message with toastr
      @if (session()->has('success'))

          toastr.success('{{ session('success') }}', 'BERHASIL!');
      @elseif (session()->has('error'))

          toastr.error('{{ session('error') }}', 'GAGAL!');
      @endif
  </script>
  @include('layouts.footer');
