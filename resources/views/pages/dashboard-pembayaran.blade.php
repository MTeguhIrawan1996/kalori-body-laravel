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
            <h2 class="dashboard-title">Pembayaran & Status Member</h2>
            <marquee>
              <p class="dashboard-subtitle">
                Selamat Datang di Body FIt Gym
              </p>
            </marquee>
          </div>
            <div class="dashboard-content mb-2">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-md-12">
                        <h5>
                        Transfer Pembayaran
                        </h5>
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nama Rekening Tujuan</div>
                              <div class="product-subtitle">Hafidh</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nomor Rekening Tujuan</div>
                              <div class="product-subtitle">
                                6211111110000 (BCA)
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Nominal Transfer
                              </div>
                              <div class="product-subtitle">
                                Rp.100.000
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nomor Konfirmasi Bukti Pembayaran (WA)</div>
                              <div class="product-subtitle">0896110011</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-12 mt-4">
                          <h5>
                            Status Member
                          </h5>
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="product-title">Status</div>
                              <div class="product-subtitle">
                                {{ Auth::user()->status }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Membership anda akan berkahir pada tanggal</div>
                              <div class="product-subtitle">
                                {{ Auth::user()->status == 'NONAKTIF' || Auth::user()->status == NULL ? 'Belum diverifikasi' : Auth::user()->tgl_selesai }}
                              </div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-12">
                              <a href="{{ route('dashboard-cetak-e-member') }}" class="btn btn-success btn-block mt-4">
                                Kartu Member
                              </a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
@endsection

