  @include('layouts.header')
  @include('layouts.sidebar')
  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Tambah Perawatan</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Tamabah Perawatan</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Tambah Data Perawatan</h5>
                          <form action="{{ route('perawatans.store') }}" method="POST">
                              @csrf
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Mobil</label>
                                  <select class="form-select" id="mobil_id" name="mobil_id">
                                      <option selected>Pilih Mobil</option>
                                      @foreach ($mobils as $mobil)
                                          <option value="{{ $mobil->id }}">{{ $mobil->merk->nama }}</option>
                                      @endforeach
                                  </select>
                                  <!-- error message untuk content -->
                                  @error('mobil_id')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>

                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Jenis Perawatan</label>
                                  <select class="form-select" id="jenis_perawatan" name="jenis_perawatan">
                                      <option selected>Pilih Jenis Perawatan</option>
                                      @foreach ($jenis_perawatans as $jenis_perawatan)
                                          <option value="{{ $jenis_perawatan->id }}">{{ $jenis_perawatan->nama }}
                                          </option>
                                      @endforeach
                                  </select>
                                  <!-- error message untuk content -->
                                  @error('jenis_perawatan')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Tanggal</label>
                                  <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                      name="tanggal" value="{{ old('tanggal') }}" placeholder="Masukkan Tanggal">

                                  <!-- error message untuk title -->
                                  @error('tanggal')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Biaya</label>
                                  <input type="text" class="form-control @error('biaya') is-invalid @enderror"
                                      name="biaya" value="{{ old('biaya') }}" placeholder="Masukkan Biaya">

                                  <!-- error message untuk title -->
                                  @error('biaya')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Deskripsi</label>
                                  <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5"
                                      placeholder="Masukkan Deskripsi">{{ old('deskripsi') }}</textarea>
                                  <!-- error message untuk content -->
                                  @error('deskripsi')
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
