  @include('layouts.header')
  @include('layouts.sidebar')
  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Edit Perawatan</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Edit Perawatan</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->
      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Update Data Perawatan</h5>
                          <form action="{{ route('perawatans.update', $perawatan->id) }}" method="POST"
                              enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Jenis Perawatan</label>
                                  <select class="form-select" id="jenis_perawatan_id" name="jenis_perawatan_id">
                                      <option selected>Pilih Jenis Perawatan</option>
                                      @foreach ($jenis_perawatans as $jenis_perawatan)
                                          @if ($perawatan->jenis_perawatan_id == $jenis_perawatan->id)
                                              {
                                              <option value="{{ $jenis_perawatan->id }}" selected>
                                                  {{ $jenis_perawatan->nama }}
                                              </option>
                                          }@else{
                                              <option value="{{ $jenis_perawatan->id }}">{{ $jenis_perawatan->nama }}
                                              </option>
                                              }
                                          @endif
                                      @endforeach
                                  </select>
                                  <!-- error message untuk content -->
                                  @error('jenis_perawatan_id')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Mobil</label>
                                  <select class="form-select" id="mobil_id" name="mobil_id">
                                      <option selected>Pilih Mobil</option>
                                      @foreach ($mobils as $mobil)
                                          @if ($perawatan->mobil_id == $mobil->id)
                                              {
                                              <option value="{{ $mobil->id }}" selected>
                                                  {{ $mobil->merk->nama }}
                                              </option>
                                          }@else{
                                              <option value="{{ $mobil->id }}">{{ $mobil->merk->nama }}
                                              </option>
                                              }
                                          @endif
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
                                  <label class="font-weight-bold mb-2 mt-2">Tanggal</label>
                                  <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                      name="tanggal" value="{{ $perawatan->tanggal }}">

                                  <!-- error message untuk title -->
                                  @error('tanggal')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-2 mt-2">Biaya</label>
                                  <input type="text" class="form-control @error('biaya') is-invalid @enderror"
                                      name="biaya" value="{{ $perawatan->biaya }}">

                                  <!-- error message untuk title -->
                                  @error('biaya')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Deskripsi</label>
                                  <textarea type="" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5"
                                      placeholder="Masukkan Deskripsi">{{ $perawatan->deskripsi }}</textarea>
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
  @include('layouts.footer');
