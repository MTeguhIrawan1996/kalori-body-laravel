@extends('layouts.dashboard-admin')

@section('title')
    Tambah Data Member
@endsection

@push('addon-style')
  <link href="{{ url('style/sb-admin-2.min.css') }}" rel="stylesheet">
@endpush

@section('content')
      <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">Tambah Data Member</h2>
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
                <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="user_id">Kode Member</label>
                            <select name="user_id" class="form-control">
                              @foreach ($users as $user)
                                  <option value="{{ $user->id }}">{{ $user->kode_anggota }} | {{ $user->name }}</option>
                              @endforeach                            
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="total_bayar">Total Bayar</label>
                            <input type="number" class="form-control" name="total_bayar"
                              required />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Status Pembayaran</label>
                            <select name="status_pembayaran" class="form-control">
                              <option value="LUNAS">Lunas</option>
                              <option value="BELUM BAYAR">Belum Bayar</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Tanggal Bayar</label>
                            <input type="date" class="form-control" name="tgl_bayar"
                              required />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <button type="submit" class="btn btn-success btn-block px-5">
                        Tambah Data
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

