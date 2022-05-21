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
            <h2 class="dashboard-title">Data Member</h2>
          </div>
            <div class="dashboard-content">
              <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <a href="{{ route('member.create') }}" class="btn btn-success mb-3">
                        + Tambah Member Baru
                        </a>
                        <div class="table-responsive">
                          <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                            <thead>
                              <tr>
                                <th>Kode Anggota</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Status Member</th>
                                <th>Tanggal Selesai</th>
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
          { data: 'email', name: 'email'},
          { data: 'telp', name: 'telp'},
          { data: 'status', name: 'status'},
          { data: 'tgl_selesai', name: 'tgl_selesai'
            // render: function(data, type, row){
            //   if(data == NULL ) {
            //     return 'Lunas'
            //   } else {
            //     return data;
            //   }
            // }
          },
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

