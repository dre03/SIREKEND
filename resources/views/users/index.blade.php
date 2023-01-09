  @include('layouts.header')
  @include('layouts.sidebar')
  <main id="main" class="main">

      <div class="pagetitle">
          <h1>User</h1>
          <nav>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">User</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->

      <section class="section">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Date user</h5>

                          <!-- Table with hoverable rows -->
                          <table class="table text-center">
                              <thead>
                                  <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Nama Lengkap</th>
                                      <th scope="col">username</th>
                                      <th scope="col">email</th>
                                      <th scope="col">Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $no = 1;
                                  ?>
                                  @forelse ($users as $user)
                                      <tr>
                                          <th scope="row">{{ $no++ }}</th>
                                          <td>{{ $user->nama }}</td>
                                          <td>{{ $user->username }}</td>
                                          <td>{{ $user->email }}</td>
                                          <td class="text-center">
                                              <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                  action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                  <a href="{{ route('users.show', $user->id) }}"
                                                      class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                      data-bs-target="#editmodal{{ $user->id }}">SHOW</a>
                                                  {{-- <a href="{{ route('sewas.edit', $sewa->id) }}"
                                                      class="btn btn-sm btn-warning">EDIT</a> --}}
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                              </form>
                                          </td>
                                      </tr>
                                      <div class="modal fade" id="editmodal{{ $user->id }}" tabindex="-1"
                                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Data Sewa</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                          aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <div class="row">
                                                          <label for="nama" class="col-sm-4">Nama Lengkap</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $user->nama }}</p>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label for="usename" class="col-sm-4">Username</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $user->username }}</p>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label for="password" class="col-sm-4">Password</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $user->password }}</p>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label for="email" class="col-sm-4">Email</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $user->email }}</p>
                                                          </div>
                                                      </div>
                                                      {{-- <div class="row">
                                                          <label for="status" class="col-sm-4">Status</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $user->status }}</p>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label for="user" class="col-sm-4">Role</label>
                                                          <div class="col-sm-8">
                                                              <p>{{ $user->role }}</p>
                                                          </div>
                                                      </div> --}}
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
