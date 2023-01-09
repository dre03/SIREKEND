  @include('layouts.header')
  @include('layouts.sidebar')
  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Tambah Mobil</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Tamabah Mobil</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Tambah Data Mobil</h5>
                          <form action="{{ route('mobils.store') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">No Kendaraan</label>
                                  <input type="text" class="form-control @error('nopol') is-invalid @enderror"
                                      name="nopol" value="{{ old('nopol') }}" placeholder="Masukkan No Kendaraan">

                                  <!-- error message untuk title -->
                                  @error('nopol')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Warna</label>
                                  <input type="text" class="form-control @error('warna') is-invalid @enderror"
                                      name="warna" value="{{ old('warna') }}" placeholder="Masukkan Warna Kendaraan">

                                  <!-- error message untuk title -->
                                  @error('warna')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-2 mt-2">Harga Sewa</label>
                                  <input type="text" class="form-control @error('harga_sewa') is-invalid @enderror"
                                      name="harga_sewa" value="{{ old('harga_sewa') }}"
                                      placeholder="Masukkan Harga Sewa">

                                  <!-- error message untuk title -->
                                  @error('harga_sewa')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-2 mt-2">CC</label>
                                  <input type="text" class="form-control @error('cc') is-invalid @enderror"
                                      name="cc" value="{{ old('cc') }}" placeholder="Masukkan CC Kendaraan">

                                  <!-- error message untuk title -->
                                  @error('cc')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-2 mt-2">Kilometer</label>
                                  <input type="text" class="form-control @error('km_mobil') is-invalid @enderror"
                                      name="km_mobil" value="{{ old('km_mobil') }}"
                                      placeholder="Masukkan Kilometer Kendaraan">

                                  <!-- error message untuk title -->
                                  @error('km_mobil')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Tahun</label>
                                  <input type="text" class="form-control @error('tahun') is-invalid @enderror"
                                      name="tahun" value="{{ old('tahun') }}"
                                      placeholder="Masukkan Tahun Kendaraan">

                                  <!-- error message untuk title -->
                                  @error('tahun')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Merk</label>
                                  <select class="form-select" id="merk_id" name="merk_id">
                                      <option selected>Pilih Merk</option>
                                      @foreach ($merks as $merk)
                                          <option value="{{ $merk->id }}">{{ $merk->produk }}</option>
                                      @endforeach
                                  </select>
                                  <!-- error message untuk content -->
                                  @error('merk_id')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Deskripsi</label>
                                  <textarea type="" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5"
                                      placeholder="Masukkan Deskripsi">{{ old('deskripsi') }}</textarea>
                                  <!-- error message untuk content -->
                                  @error('deskripsi')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Foto</label>
                                  <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                      name="foto">

                                  <!-- error message untuk title -->
                                  @error('foto')
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
