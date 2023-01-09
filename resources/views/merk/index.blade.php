  @include('layouts.header')
  @include('layouts.sidebar')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1>Merk</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Merk</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Data Merk</h5>
                          <a href="{{ route('merks.create') }}" class="btn btn-primary mb-3">Tambah +</a>
                          <!-- Table with hoverable rows -->
                          <table class="table text-center">
                              <thead class="table-light">
                                  <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Nama</th>
                                      <th scope="col">Produk</th>
                                      <th scope="col">Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $no = 1;
                                  ?>
                                  @forelse ($merks as $merk)
                                      <tr>
                                          <th scope="row">{{ $no++ }}</th>
                                          <td>{{ $merk->nama }}</td>
                                          <td>{{ $merk->produk }}</td>
                                          <td class="text-center">
                                              <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                  action="{{ route('merks.destroy', $merk->id) }}" method="POST">
                                                  <a href="{{ route('merks.edit', $merk->id) }}"
                                                      class="btn btn-sm btn-warning">EDIT</a>
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                              </form>
                                          </td>
                                      </tr>
                                  @empty
                                      <div class="alert alert-danger mb-3">
                                          Data Merk belum Tersedia.
                                      </div>
                                  @endforelse
                              </tbody>
                          </table>
                          <!-- End Table with hoverable rows -->
                          {{ $merks->links() }}
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </main><!-- End #main -->
  <script>
      //message with toastr
      @if (session()->has('success'))
          toastr.success('{{ session('success') }}', 'BERHASIL!');
      @elseif (session()->has('error'))
          toastr.error('{{ session('error') }}', 'GAGAL!');
      @endif
  </script>
  @include('layouts.footer');
