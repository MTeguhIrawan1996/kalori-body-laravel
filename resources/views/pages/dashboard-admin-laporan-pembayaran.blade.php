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
                              <form action="{{ route('cetak-pembayaran') }}"  method="POST">
                                @csrf
                                <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="min">Periode I</label>
                                    <input type="date" class="form-control" id="min" aria-describedby="date" name="min"
                                      />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="max">Periode II</label>
                                    <input type="date" class="form-control" id="max" aria-describedby="date" name="max"
                                       />
                                  </div>
                                </div>
                              </div>                               
                              <button id="cetak" class="btn btn-warning mb-3">
                              + CETAK +
                              </button>
                              <a id="proses" class="btn btn-success mb-3">
                              + PROSES +
                              </a> 
                              </form>
                                                                         
                              <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTablePembayaran">
                                  <thead>
                                    <tr>
                                      <th>Kode Anggota</th>
                                      <th>Nama</th>
                                      <th>Tanggal Bayar</th>
                                      <th>Status Pembayaran</th>
                                      <th>Jumlah</th>
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
      function rangeDate (min,max){

          var datatable = $('#crudTablePembayaran').DataTable ({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
              url: "{{ route('laporan-pembayaran.index') }}",
              data: {
                min:min,
                max:max
              }
            },
            columns: [
              { data: 'user.kode_anggota', name: 'user.kode_anggota'},
              { data: 'user.name', name: 'user.name'},
              { data: 'tgl_bayar', name: 'tgl_bayar'},
              { data: 'status_pembayaran', name: 'status_pembayaran'},                
              { data: 'total_bayar', name: 'total_bayar'},
            ]
          });
        }

      $(document).on('click', '#proses', function(){

        let min = $('#min').val()
        let max = $('#max').val()
        $('#crudTablePembayaran').DataTable().destroy()

        rangeDate(min,max)
      })

      // $(document).on('click', '#cetak', function(){

      //   window.open('{{ route('cetak-pembayaran') }}', _blank);
      // })
      
    </script>
@endpush

