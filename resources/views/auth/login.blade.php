@extends('layouts.auth')

@section('content')
  <!-- Page Content -->
  <div class="page-content page-auth">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center row-login">
          <div class="col-lg-6 text-center">
            <img src="/images/loginpic.jpg" alt="" class="w-50 mb-4 mb-lg-none" />
          </div>
          <div class="col-lg-5">
            <h2>
              Buat Hidup Anda <br />
              Menjadi Lebih Sehat
            </h2>
            <form class="mt-3 width-form" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <label>Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group">
                <label>Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <button class="btn btn-success btn-block mt-4">
                Sign In to My Account
              </button>
              <a class="btn btn-signup btn-block mt-2" href="{{ route ('register') }}">
                Sign Up
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
