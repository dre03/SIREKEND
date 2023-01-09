  @include('layouts.header')
  @include('layouts.sidebar')
  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Edit Merk</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Edit Merk</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->
      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Update Data Merk</h5>
                          <form action="{{ route('merks.update', $merk->id) }}" method="POST">
                              @csrf
                              @method('PUT')
                              <div class="form-group">
                                  <label class="font-weight-bold">Nama</label>
                                  <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                      name="nama" value="{{ $merk->nama }}" placeholder="Masukkan Nama Merk">

                                  <!-- error message untuk nama -->
                                  @error('nama')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>

                              <div class="form-group">
                                  <label class="font-weight-bold">Produk</label>
                                  <input type="text" class="form-control @error('produk') is-invalid @enderror"
                                      name="produk" value="{{ $merk->produk }}" placeholder="Masukkan Produk">

                                  <!-- error message untuk produk -->
                                  @error('produk')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="footer">
                                  <button type="reset" class="btn btn-danger">Reset</button>
                                  <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </main>
  <!-- End #main -->
  @include('layouts.footer');
