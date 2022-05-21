@extends('layouts.dashboard')

@section('title')
    Alat Gym
@endsection

@push('addon-style')
  <link href="{{ url('style/sb-admin-2.min.css') }}" rel="stylesheet">
@endpush

@section('content')
      <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">Alat Gym</h2>
            <marquee>
              <p class="dashboard-subtitle">
                Selamat Datang di Body FIt Gym
              </p>
            </marquee>
          </div>
          <div class="dashboard-content">
            <div class="row">
              <div class="col-6 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <div class="component-products d-block">
                      <div class="products-thumbnail">
                        <div class="products-image" style="
                      background-image: url('{{ url('images/pic02.jpg') }}');
                    "></div>
                      </div>
                    </div>
                    <div class="product-title">Dumbbell</div>
                    <div class="product-category">Chest</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <div class="component-products d-block">
                      <div class="products-thumbnail">
                        <div class="products-image" style="
                      background-image: url('{{ url('images/pic02.jpg') }}');
                    "></div>
                      </div>
                    </div>
                    <div class="product-title">Barbell Bench</div>
                    <div class="product-category">Chest</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <div class="component-products d-block">
                      <div class="products-thumbnail">
                        <div class="products-image" style="
                      background-image: url('{{ url('images/pic02.jpg') }}');
                    "></div>
                      </div>
                    </div>
                    <div class="product-title">Resistance Band</div>
                    <div class="product-category">Chest</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <div class="component-products d-block">
                      <div class="products-thumbnail">
                        <div class="products-image" style="
                      background-image: url('{{ url('images/pic02.jpg') }}');
                    "></div>
                      </div>
                    </div>
                    <div class="product-title">Chest Press</div>
                    <div class="product-category">Chest</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <div class="component-products d-block">
                      <div class="products-thumbnail">
                        <div class="products-image" style="
                      background-image: url('{{ url('images/pic02.jpg') }}');
                    "></div>
                      </div>
                    </div>
                    <div class="product-title">Chest Press</div>
                    <div class="product-category">Chest</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <div class="component-products d-block">
                      <div class="products-thumbnail">
                        <div class="products-image" style="
                      background-image: url('{{ url('images/pic02.jpg') }}');
                    "></div>
                      </div>
                    </div>
                    <div class="product-title">Chest Press</div>
                    <div class="product-category">Chest</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                <div class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <div class="component-products d-block">
                      <div class="products-thumbnail">
                        <div class="products-image" style="
                      background-image: url('{{ url('images/pic02.jpg') }}');
                    "></div>
                      </div>
                    </div>
                    <div class="product-title">Chest Press</div>
                    <div class="product-category">Chest</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                <div class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <div class="component-products d-block">
                      <div class="products-thumbnail">
                        <div class="products-image" style="
                      background-image: url('{{ url('images/pic02.jpg') }}');
                    "></div>
                      </div>
                    </div>
                    <div class="product-title">Chest Press</div>
                    <div class="product-category">Chest</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="900">
                <div class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <div class="component-products d-block">
                      <div class="products-thumbnail">
                        <div class="products-image" style="
                      background-image: url('{{ url('images/pic02.jpg') }}');
                    "></div>
                      </div>
                    </div>
                    <div class="product-title">Chest Press</div>
                    <div class="product-category">Chest</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000">
                <div class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <div class="component-products d-block">
                      <div class="products-thumbnail">
                        <div class="products-image" style="
                      background-image: url('{{ url('images/pic02.jpg') }}');
                    "></div>
                      </div>
                    </div>
                    <div class="product-title">Chest Press</div>
                    <div class="product-category">Chest</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1100">
                <div class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <div class="component-products d-block">
                      <div class="products-thumbnail">
                        <div class="products-image" style="
                      background-image: url('{{ url('images/pic02.jpg') }}');
                    "></div>
                      </div>
                    </div>
                    <div class="product-title">Chest Press</div>
                    <div class="product-category">Chest</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200">
                <div class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <div class="component-products d-block">
                      <div class="products-thumbnail">
                        <div class="products-image" style="
                      background-image: url('{{ url('images/pic02.jpg') }}');
                    "></div>
                      </div>
                    </div>
                    <div class="product-title">Chest Press</div>
                    <div class="product-category">Chest</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

