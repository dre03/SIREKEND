@include('layouts.header')
@include('layouts.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Jenis Perawatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Jenis Perawatan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-4">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tamabah Jenis Perawatan</h5>
                        <form action="{{ route('jns-perawatans.store') }}" method="POST">
                            <?php
                            ?>
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold mb-2">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ old('nama') }}"
                                    placeholder="Masukkan Nama Jenis Perawatan">

                                <!-- error message untuk title -->
                                @error('nama')
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
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Jenis Perawatan</h5>
                        <table class="table text-center">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                ?>
                                @forelse ($jns_perawatans as $jns_perawatan)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $jns_perawatan->nama }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('jns-perawatans.destroy', $jns_perawatan->id) }}"
                                                method="POST">
                                                <a href="{{ route('jns-perawatans.index', $jns_perawatan->id) }}"
                                                    class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $jns_perawatan->id }}">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="editModal{{ $jns_perawatan->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Jenis
                                                        Perawatan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{ route('jns-perawatans.update', $jns_perawatan->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label class="font-weight-bold">Nama</label>
                                                            <input type="text"
                                                                class="form-control @error('nama') is-invalid @enderror"
                                                                name="nama" value="{{ $jns_perawatan->nama }}"
                                                                placeholder="Masukkan Nama Merk">

                                                            <!-- error message untuk nama -->
                                                            @error('nama')
                                                                <div class="alert alert-danger mt-2">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="footer">
                                                            <button type="reset" class="btn btn-danger">Reset</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert alert-danger mb-3">
                                        Data Jenis Perawatan belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@include('layouts.footer')
