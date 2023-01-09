  @include('layouts.header')
  @include('layouts.sidebar')
  <main id="main" class="main">
      <div class="pagetitle">
          <h1>Edit Mobil</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Edit Mobil</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->
      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Update Data Mobil</h5>
                          <form action="{{ route('mobils.update', $mobil->id) }}" method="POST"
                              enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">No Kendaraan</label>
                                  <input type="text" class="form-control @error('nopol') is-invalid @enderror"
                                      name="nopol" value="{{ $mobil->nopol }}">

                                  <!-- error message untuk title -->
                                  @error('nopol')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-2 mt-2">Warna</label>
                                  <input type="text" class="form-control @error('warna') is-invalid @enderror"
                                      name="warna" value="{{ $mobil->warna }}">

                                  <!-- error message untuk title -->
                                  @error('harga_sewa')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-2 mt-2">Harga Sewa</label>
                                  <input type="text" class="form-control @error('harga_sewa') is-invalid @enderror"
                                      name="harga_sewa" value="{{ $mobil->harga_sewa }}">

                                  <!-- error message untuk title -->
                                  @error('harga_sewa')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">CC</label>
                                  <input type="text" class="form-control @error('cc') is-invalid @enderror"
                                      name="cc" value="{{ $mobil->cc }}" placeholder="Masukkan CC">

                                  <!-- error message untuk title -->
                                  @error('cc')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Kilometer</label>
                                  <input type="text" class="form-control @error('km_mobil') is-invalid @enderror"
                                      name="km_mobil" value="{{ $mobil->km_mobil }}" placeholder="Masukkan Kilometer">

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
                                      name="tahun" value="{{ $mobil->tahun }}" placeholder="Masukkan Tahun">

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
                                          @if ($mobil->merk_id == $merk->id)
                                              {
                                              <option value="{{ $merk->id }}" selected>{{ $merk->produk }}
                                              </option>
                                          }@else{
                                              <option value="{{ $merk->id }}">{{ $merk->produk }}</option>
                                              }
                                          @endif
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
                                  <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5"
                                      placeholder="Masukkan Deskripsi">{{ $mobil->deskripsi }}</textarea>
                                  <!-- error message untuk content -->
                                  @error('deskripsi')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="font-weight-bold mb-1 mt-2">Foto</label>
                                  <input type="file" class="form-control" name="foto">

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
  @include('layouts.footer');
