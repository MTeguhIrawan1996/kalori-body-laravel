@extends('layouts.dashboard-admin')

@section('title')
    Edit Data Pembayaran
@endsection

@push('addon-style')
  <link href="{{ url('style/sb-admin-2.min.css') }}" rel="stylesheet">
@endpush

@section('content')
      <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">VEdit Data Pembayaran</h2>
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
                <form action="{{ route('pembayaran.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="kode_anggota">Kode Member</label>
                            <select name="users_id" class="form-control" readonly>
                              <option value="{{ $item->user_id }}">{{ $item->user->kode_anggota }} | {{ $item->user->name }}</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="total_bayar">Total Bayar</label>
                            <input type="number" class="form-control" name="total_bayar"
                              required value="{{ $item->total_bayar }}"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="created_at">Tanggal Bayar</label>
                            <input type="date" class="form-control" name="tgl_bayar"
                              required value="{{ $item->tgl_bayar }}"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="status">Status Pembayaran</label>
                            <select name="status_pembayaran" class="form-control">
                              <option value="{{ $item->status_pembayaran }}" selected>Tidak Diganti</option>
                              <option value="LUNAS">Lunas</option>
                              <option value="BELUM LUNAS">Belum Bayar</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <button type="submit" class="btn btn-success btn-block px-5">
                        Update
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

