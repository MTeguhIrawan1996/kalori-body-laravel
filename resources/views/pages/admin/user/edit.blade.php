@extends('layouts.dashboard-admin')

@section('title')
    Virfikasi Data Member
@endsection

@push('addon-style')
  <link href="{{ url('style/sb-admin-2.min.css') }}" rel="stylesheet">
@endpush

@section('content')
      <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">Verifikasi Data Member</h2>
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
                <form action="{{ route('member.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="kode_anggota">Kode Member</label>
                            <input type="text" class="form-control" id="kode_anggota" name="kode_anggota"
                              required value="{{ $item->tgl_selesai == 0 || $item->tgl_selesai == NULL ? $code : $item->tgl_selesai }}" readonly/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name"
                              required value="{{ $item->name }}"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="tgl_mulai">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai"
                              required value="{{ $item->tgl_mulai }}"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="tgl_selesai">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai"
                              required value="{{ $item->tgl_selesai }}"/>
                          </div>
                        </div>
                        {{-- <div class="col-md-6">
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password"
                              />
                              <small>Kosongkan jika password tidak diganti</small>
                          </div>
                        </div> --}}
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="status">Status Member</label>
                            <select name="status" id="status" class="form-control">
                              <option value="{{ $item->status }}" selected>Tidak Diganti</option>
                              <option value="AKTIF">Aktif</option>
                              <option value="NONAKTIF">Nonaktif</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <button type="submit" class="btn btn-success btn-block px-5">
                        Verifikasi
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

