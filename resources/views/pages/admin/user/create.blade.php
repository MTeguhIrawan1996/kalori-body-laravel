@extends('layouts.dashboard-admin')

@section('title')
    Tambah Data Member
@endsection

@push('addon-style')
  <link href="{{ url('style/sb-admin-2.min.css') }}" rel="stylesheet">
@endpush

@section('content')
      <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">Tambah Data Member</h2>
          </div>
          <div class="dashboard-content">
            <div class="row">
              <div class="col-12">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </div>
                  @endif
                <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="kode_anggota">Kode Member</label>
                            <input type="text" class="form-control" name="kode_anggota"
                              required value="{{ $code }}" readonly/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name"
                              required />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email"
                               required />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password"
                              required />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="password_confirmation"
                              required />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat"
                              required />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="usia">Usia</label>
                            <input type="number" class="form-control" name="usia"
                              required/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="roles">Roles</label>
                            <select name="roles" class="form-control">
                              <option value="ADMIN">Admin</option>
                              <option value="USER">User</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <button type="submit" class="btn btn-success btn-block px-5">
                        Tambah Data
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

