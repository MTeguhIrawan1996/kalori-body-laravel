@extends('layouts.dashboard')

@section('title')
    Dashboard Page
@endsection

@push('addon-style')
  <link href="{{ url('style/sb-admin-2.min.css') }}" rel="stylesheet">
@endpush

@section('content')
      <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">Dashboard</h2>
            <marquee>
              <p class="dashboard-subtitle">
                Selamat Datang di Body FIt Gym
              </p>
            </marquee>
          </div>
          <div class="dashboard-content">
            <div class="row">
              <div class="col-lg-12" data-aos="zoom-in">
                <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#storeCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#storeCarousel" data-slide-to="1"></li>
                    <li data-target="#storeCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="images/banner01.jpg" class="d-block w-100" alt="Carousel Image" />
                    </div>
                    <div class="carousel-item">
                      <img src="images/banner02.jpg" class="d-block w-100" alt="Carousel Image" />
                    </div>
                    <div class="carousel-item">
                      <img src="images/banner03.jpg" class="d-block w-100" alt="Carousel Image" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

