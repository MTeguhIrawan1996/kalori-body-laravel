@extends('layouts.dashboard')

@section('title')
    E-Member
@endsection

@push('addon-style')
  <link href="{{ url('style/sb-admin-2.min.css') }}" rel="stylesheet">
@endpush

@section('content')
      <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">Buat E-Member Card</h2>
            <marquee>
              <p class="dashboard-subtitle">
                Selamat Datang di Body FIt Gym
              </p>
            </marquee>
          </div>
          <div class="dashboard-content">
            <div class="row">
              <div class="col-12">
                <form method="POST" action="{{ route('emember-create', 'dashboard-cetak-e-member') }}">
                  
              @csrf
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" name="name"
                              value="{{ Auth::user()->name }}" required/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" aria-describedby="alamat" name="alamat"
                              value="{{ Auth::user()->alamat }}" required/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="telp">Nomor Telpon</label>
                            <input type="number" class="form-control" id="telp" aria-describedby="telp"
                              name="telp" value="{{ Auth::user()->telp }}" required/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="date">Tanggal</label>
                            <input type="date" class="form-control" id="tgl_mulai" aria-describedby="tgl_mulai" name="tgl_mulai"
                              value="{{ Auth::user()->tgl_mulai }}" required/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="tinggi">Tinggi (Cm)</label>
                            <input type="number" class="form-control" id="tinggi" aria-describedby="tinggi"
                              name="tinggi" value="{{ Auth::user()->tinggi }}" required/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="berat">Berat Badan (Kg)</label>
                            <input type="number" class="form-control" id="berat" aria-describedby="berat" name="berat"
                              value="{{ Auth::user()->berat }}" required/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="usia">Usia</label>
                            <input type="number" class="form-control" id="usia" aria-describedby="usia" name="usia"
                              value="{{ Auth::user()->usia }}" required />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <button type="submit" class="btn btn-success btn-block px-5">
                        Buat
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

