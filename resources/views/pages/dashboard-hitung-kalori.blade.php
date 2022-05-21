@extends('layouts.dashboard')

@section('title')
    Hitung Kalori
@endsection

@push('addon-style')
  <link href="{{ url('style/sb-admin-2.min.css') }}" rel="stylesheet">
@endpush

@section('content')
      <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">Hitung Kalori Anda</h2>
            <marquee>
              <p class="dashboard-subtitle">
                Selamat Datang di Body FIt Gym
              </p>
            </marquee>
          </div>
          <div class="dashboard-content">
            <div class="row">
              <div class="col-12">
                <form action="{{ route('hitung') }}"  method="POST">
                                @csrf
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="tinggi">Tinggi (Cm)</label>
                            <input type="number" class="form-control" id="tinggi" aria-describedby="tinggi"
                              name="tinggi" value="{{ old('tinggi') }}" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="berat">Berat Badan (Kg)</label>
                            <input type="number" class="form-control" id="berat" aria-describedby="berat" name="berat"
                              value="{{ old('berat') }}" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="usia">Usia</label>
                            <input type="number" class="form-control" id="usia" aria-describedby="usia" name="usia"
                              value="{{ old('usia') }}" />
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
                        {{-- <div class="col-md-6">
                          <div class="form-group">
                            <label for="ak">Aktifitas Sehari-Hari</label>
                            <input type="text" class="form-control" id="ak" aria-describedby="ak" name="ak"
                              value="" />
                            <small>Tergantung berat atau ringan angka rata-rata aktifitas harian Contoh : 1.2 - 1.9</small>
                          </div>
                        </div> --}}
                        <div class="col-md-6">

                          <h4>Hasil Perhitungan Kalori :</h4>
                          <p class="text-success">{{ ($hasil) }} Kkal</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <button type="submit" class="btn btn-success btn-block px-5">
                        Proses
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

