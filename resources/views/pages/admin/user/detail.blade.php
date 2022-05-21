@extends('layouts.dashboard-admin')

@section('title')
    Detail Member
@endsection

@push('addon-style')
  <link href="{{ url('style/sb-admin-2.min.css') }}" rel="stylesheet">
@endpush

@section('content')
      <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">Detail Data Member</h2>
          </div>
          <div class="dashboard-content">
            <div class="row">
              <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-md-12">
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="product-title">Kode Member</div>
                              <div class="product-subtitle">
                                @if ($item->kode_anggota == '') 
                                   <p class="text-danger">Data Belum Lengkap</p>
                                  @else                                    
                                      {{ $item->kode_anggota }}                                    
                                    @endif 
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nama</div>
                              <div class="product-subtitle">
                                {{ $item->name }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Email
                              </div>
                              <div class="product-subtitle">
                                {{ $item->email }}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Alamat</div>
                              <div class="product-subtitle">
                                 @if ($item->alamat == '') 
                                   <p class="text-danger">Data Belum Lengkap</p>
                                  @else                                    
                                      {{ $item->alamat }}                                    
                                    @endif                                
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nomor Telepon</div>
                              <div class="product-subtitle">
                                @if ($item->telp == '') 
                                   <p class="text-danger">Data Belum Lengkap</p>
                                  @else                                    
                                      {{ $item->telp }}                                    
                                    @endif 
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Tinggi (Cm)</div>
                              <div class="product-subtitle">
                                @if ($item->tinggi == '') 
                                   <p class="text-danger">Data Belum Lengkap</p>
                                  @else                                    
                                      {{ $item->tinggi }}                                    
                                    @endif 
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Berat Badan (Kg)</div>
                              <div class="product-subtitle">
                                @if ($item->berat == '') 
                                   <p class="text-danger">Data Belum Lengkap</p>
                                  @else                                    
                                      {{ $item->berat }}                                    
                                    @endif 
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Jenis Kelamin</div>
                              <div class="product-subtitle">
                                @if ($item->jenis_kelamin == '') 
                                   <p class="text-danger">Data Belum Lengkap</p>
                                  @else                                    
                                      {{ $item->jenis_kelamin }}                                    
                                    @endif 
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Usia (Thn)</div>
                              <div class="product-subtitle">
                                @if ($item->usia == '') 
                                   <p class="text-danger">Data Belum Lengkap</p>
                                  @else                                    
                                      {{ $item->usia }}                                    
                                    @endif 
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Tanggal Mulai</div>
                              <div class="product-subtitle">
                                @if ($item->tgl_mulai == '') 
                                   <p class="text-danger">Data Belum Lengkap</p>
                                  @else                                    
                                      {{ $item->tgl_mulai }}                                    
                                    @endif 
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Tanggal Selesai</div>
                              <div class="product-subtitle">
                                @if ($item->tgl_selesai == '') 
                                   <p class="text-danger">Data Belum Lengkap</p>
                                  @else                                    
                                      {{ $item->tgl_selesai }}                                    
                                    @endif 
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Status</div>
                              <div class="product-subtitle">{{ $item->status }}</div>
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

