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
            <h2 class="dashboard-title">Data Pembayaran Member</h2>
          </div>
            <div class="dashboard-content">
              <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <a href="{{ route('pembayaran.create') }}" class="btn btn-success mb-3">
                        + Tambah Pembayaran
                        </a>
                        <div class="table-responsive">
                          <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                            <thead>
                              <tr>
                                <th>Kode Anggota</th>
                                <th>Nama</th>
                                <th>Status Pembayaran</th>
                                <th>Total Pembayaran</th>
                                <th>Tanggal Bayar</th>
                                <th>Aksi</th>
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
@endsection

@push('addon-script')
    <script>
      var datatable = $('#crudTable').DataTable ({
        processing: true,
        serverSide: true,
        ordering: true,
        ajax: {
          url: '{!! url()->current() !!}',
        },
        columns: [
          { data: 'kode_anggota', name: 'kode_anggota'},
          { data: 'name', name: 'name'},
          { data: 'status_pembayaran', name: 'status_pembayaran',
            // render: function(data, type, row){
            //   if(data == '1' ) {
            //     return 'Lunas'
            //   } else if (data == '0' ) {
            //     return 'Belum Bayar'
            //   }
            // }
          },
          { data: 'total_bayar', name: 'total_bayar'},
          { data: 'tgl_bayar', name: 'tgl_bayar'},
          { 
            data: 'action', name: 'action',
            orderable: false,
            searcable: false,
            width: '15%'
          },
        ]
        
      })
    </script>
@endpush

