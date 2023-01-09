  @include('layouts.header')
  @include('layouts.sidebar')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1>Sewa</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Sewa</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Data Sewa</h5>

                          <!-- Table with hoverable rows -->
                          <table class="table text-center">
                              <thead>
                                  <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Nama</th>
                                      <th scope="col">Mobil</th>
                                      <th scope="col">No KTP</th>
                                      <th scope="col">Tanggal Mulai</th>
                                      <th scope="col">Tanggal Akhir</th>
                                      <th scope="col">Tujuan</th>
                                      <th scope="col">Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $no = 1;
                                  ?>
                                  @forelse ($sewas as $sewa)
                                      <tr>
                                          <th scope="row">{{ $no++ }}</th>
                                          <td>{{ $sewa->user->nama }}</td>
                                          <td>{{ $sewa->mobil->merk->nama }}</td>
                                          <td>{{ $sewa->noktp }}</td>
                                          <td>{{ $sewa->tanggal_mulai }}</td>
                                          <td>{{ $sewa->tanggal_akhir }}</td>
                                          <td>{{ $sewa->tujuan }}</td>
                                          <td class="text-center">
                                              <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                  action="/sewas/{{ $sewa->id }}" method="POST">
                                                  <a href="/sewas/{{ $sewa->id }}" class="btn btn-sm btn-primary"
                                                      data-bs-toggle="modal"
                                                      data-bs-target="#editmodal{{ $sewa->id }}">SHOW</a>
                                                  {{-- <a href="{{ route('sewas.edit', $sewa->id) }}"
                                                      class="btn btn-sm btn-warning">EDIT</a> --}}
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                              </form>
                                          </td>
                                      </tr>
                                      <div class="modal fade" id="editmodal{{ $sewa->id }}" tabindex="-1"
                                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header bg-primary">
                                                      <h5 class="modal-title text-white" id="exampleModalLabel">
                                                          <strong>Data
                                                              Sewa</strong>
                                                      </h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                          aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <div class="row">
                                                          <label for="user_id" class="col-sm-4">Nama</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $sewa->user->nama }}</p>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label for="mobil_id" class="col-sm-4">Mobil</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $sewa->mobil->merk->nama }}</p>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label for="noktp" class="col-sm-4">No KTP</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $sewa->noktp }}</p>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label for="tanggal_mulai" class="col-sm-4">Tanggal
                                                              Mulai</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $sewa->tanggal_mulai }}</p>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label for="tanggal_akhir" class="col-sm-4">Tanggal
                                                              Akhir</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $sewa->tanggal_akhir }}</p>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label for="tujuan" class="col-sm-4">Tujuan</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $sewa->tujuan }}</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="modal-footer"></div>
                                              </div>
                                          </div>
                                      </div>
                                  @empty
                                      <div class="alert alert-danger mb-2">
                                          Data Sewa belum Tersedia.
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
