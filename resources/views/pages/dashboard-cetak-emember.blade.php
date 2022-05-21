@extends('layouts.dashboard')

@section('title')
    Pembayaran
@endsection

@push('addon-style')
  <link href="{{ url('style/sb-admin-2.min.css') }}" rel="stylesheet">
@endpush

@section('content')
      <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">E-Member</h2>
            <marquee>
              <p class="dashboard-subtitle">
                Selamat Datang di Body FIt Gym
              </p>
            </marquee>
          </div>
          <div class="dashboard-content text-center">
          <div class="card">
              <h5 class="card-header bg-success">BODY FIT GYM</h5>
                  <div class="card-body">
                    <h5 class="card-title">Kartu Member</h5>
                    <div class="row">
                    <div class="col-12">
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nomor Anggota</div>
                              <div class="product-subtitle">
                                 {{ Auth::user()->status == 'NONAKTIF' || Auth::user()->status == NULL ? 'Belum diverifikasi' : Auth::user()->kode_anggota }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nama</div>
                              <div class="product-subtitle">
                                {{ Auth::user()->name }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Tanggal Berkahir Membership</div>
                              <div class="product-subtitle">
                                {{ Auth::user()->status == 'NONAKTIF' || Auth::user()->status == NULL ? 'Belum diverifikasi' : Auth::user()->tgl_selesai }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Alamat</div>
                              <div class="product-subtitle">
                                {{ Auth::user()->alamat }}
                              </div>
                            </div>
                          </div>   
                          <a href="{{ route('cetak-card') }}" target="_balnk" class="btn btn-success mt-2">Cetak</a>                
                    </div>                    
                  </div>
                </div>
          </div>
        </div>
      </div>
@endsection

