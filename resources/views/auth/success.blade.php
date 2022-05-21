@extends('layouts.success')

@section('title')
    Register Success Page
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-1.png" alt="" class="mb-4" />
              <h2>
                Registrasi Success
              </h2>
              <p>
                Kamu sudah berhasil terdaftar <br />
                bersama kami
              </p>
              <div>
                <a class="btn btn-success w-50 mt-4" href="/dashboard.html">
                  Login
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection