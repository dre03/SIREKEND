  @include('layouts.header')
  @include('layouts.sidebar')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1>Mobil</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Mobil</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Date Mobil</h5>
                          <a href="{{ route('mobils.create') }}" class="btn btn-primary mb-3">Tambah +</a>

                          <!-- Table with hoverable rows -->
                          <table class="table text-center">
                              <thead>
                                  <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Nama</th>
                                      <th scope="col">Produk</th>
                                      <th scope="col">No Kendaraan</th>
                                      <th scope="col">Warna</th>
                                      <th scope="col">CC</th>
                                      <th scope="col">Kilometer</th>
                                      <th scope="col">Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $no = 1;
                                  ?>
                                  @forelse ($mobils as $mobil)
                                      <tr>
                                          <th scope="row">{{ $no++ }}</th>
                                          <td>{{ $mobil->merk->nama }}</td>
                                          <td>{{ $mobil->merk->produk }}</td>
                                          <td>{{ $mobil->nopol }}</td>
                                          <td>{{ $mobil->warna }}</td>
                                          <td>{{ $mobil->cc }}</td>
                                          <td>{{ $mobil->km_mobil }}</td>
                                          <td class="text-center">
                                              <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                  action="{{ route('mobils.destroy', $mobil->id) }}" method="POST">
                                                  <a href="{{ route('mobils.show', $mobil->id) }}"
                                                      class="btn btn-sm btn-primary">show</a>
                                                  <a href="{{ route('mobils.edit', $mobil->id) }}"
                                                      class="btn btn-sm btn-warning">EDIT</a>
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                              </form>
                                          </td>
                                      </tr>
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
