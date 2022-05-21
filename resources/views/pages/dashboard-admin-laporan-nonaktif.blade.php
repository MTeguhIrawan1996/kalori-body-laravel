@extends('layouts.dashboard-admin')

@section('title')
    Halaman Admin
@endsection

@push('prepand-style')
  <link href="{{ url('style/sb-admin-2.min.css') }}" rel="stylesheet">
@endpush
@push('addon-style')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.0/datatables.min.css"/>
@endpush

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">Laporan</h2>
          </div>
            <div class="dashboard-content">
              <div class="row">
                  <div class="col-12">
                    <ul class="nav nav-pills mb-3 mt-3">
                      <li class="nav-item">
                        <a class="nav-link {{ (request()->is('admin/laporan')) ? 'active' : '' }}" id="pills-profile-tab" href="{{ route('laporan.index') }}">Member Aktif</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ (request()->is('admin/laporan-nonaktif*')) ? 'active' : '' }}" href="{{ route('laporan-nonaktif.index') }}">Member Nonaktif</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ (request()->is('admin/laporan-pembayaran*')) ? 'active' : '' }}" href="{{ route('laporan-pembayaran.index') }}">Pembayaran</a>
                      </li>
                      
                    </ul>
                      <div class="tab-content">
                        <div>
                          <div class="card">
                            <div class="card-body">
                              <a href="{{ route('cetak-member-nonaktif') }}" target="_balnk" class="btn btn-warning mb-3">
                              + CETAK +
                              </a>
                              <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTableAktif">
                                  <thead>
                                    <tr>
                                      <th>Kode Anggota</th>
                                      <th>Nama</th>
                                      <th>Email</th>
                                      <th>Telepon</th>
                                      <th>Tanggal Selesai</th>
                                      <th>Status</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                  </tbody>
                                </table>
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

@push('addon-script')
    <script>
      var datatable = $('#crudTableAktif').DataTable ({
        processing: true,
        serverSide: true,
        ordering: true,
        ajax: {
          url: "{{ route('laporan-nonaktif.index') }}",
        },
        columns: [
          { data: 'kode_anggota', name: 'kode_anggota'},
          { data: 'name', name: 'name'},
          { data: 'email', name: 'email'},
          { data: 'telp', name: 'telp'},
          { data: 'tgl_selesai', name: 'tgl_selesai'},
          { data: 'status', name: 'status'},
        ]
      })
    </script>
@endpush

