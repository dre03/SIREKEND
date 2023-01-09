  @include('layouts.header')
  @include('layouts.sidebar')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1>Perawatan</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Perawatan</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Date Perawatan</h5>
                          <a href="{{ route('perawatans.create') }}" class="btn btn-primary mb-3">Tambah +</a>

                          <!-- Table with hoverable rows -->
                          <table class="table text-center">
                              <thead>
                                  <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Mobil</th>
                                      <th scope="col">Jenis Perawatan</th>
                                      <th scope="col">Tanggal</th>
                                      <th scope="col">Biaya</th>
                                      <th scope="col">Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $no = 1;
                                  ?>
                                  @forelse ($perawatans as $perawatan)
                                      <tr>
                                          <th scope="row">{{ $no++ }}</th>
                                          <td>{{ $perawatan->mobil->merk->nama }}</td>
                                          <td>{{ $perawatan->jenis_perawatan->nama }}</td>
                                          <td>{{ $perawatan->tanggal }}</td>
                                          <td>{{ $perawatan->biaya }}</td>
                                          <td class="text-center">
                                              <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                  action="{{ route('perawatans.destroy', $perawatan->id) }}"
                                                  method="POST">
                                                  <a href="{{ route('perawatans.show', $perawatan->id) }}"
                                                      class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                      data-bs-target="#editmodal{{ $perawatan->id }}">show</a>
                                                  <a href="{{ route('perawatans.edit', $perawatan->id) }}"
                                                      class="btn btn-sm btn-warning">EDIT</a>
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                              </form>
                                          </td>
                                      </tr>
                                      <div class="modal fade" id="editmodal{{ $perawatan->id }}" tabindex="-1"
                                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Perawatan</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                          aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <div class="row">
                                                          <label for="mobil" class="col-sm-4">Mobil</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $perawatan->mobil->merk->nama }}</p>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label for="jenisperawatan" class="col-sm-4">Jenis
                                                              Perawatan</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $perawatan->jenis_perawatan->nama }}</p>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label for="tanggal" class="col-sm-4">Tanggal</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $perawatan->tanggal }}</p>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label for="biaya" class="col-sm-4">Biaya</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $perawatan->biaya }}</p>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label for="deskripsi" class="col-sm-4">Deskripsi</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $perawatan->deskripsi }}</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="modal-footer"></div>
                                              </div>
                                          </div>
                                      </div>
                                  @empty
                                      <div class="alert alert-danger mb-2">
                                          Data Mobil belum Tersedia.
                                      </div>
                                  @endforelse
                              </tbody>
                          </table>
                          <!-- End Table with hoverable rows -->

                      </div>
                  </div>

              </div>
          </div>
      </section>

  </main><!-- End #main -->
  @include('layouts.footer');
