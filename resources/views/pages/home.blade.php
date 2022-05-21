@extends('layouts.app')

@section('title')
    HomePage
@endsection

@section('content')
  <!-- Page Content -->
  <div class="page-content page-home">
    <section class="store-carousel">
      <div class="container">
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
    </section>
    <section class="store-gallery" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Gallery</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="
                      background-image: url('images/pic01.jpg');
                    "></div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="component-products d-block" href="details.html">
              <div class="products-thumbnail">
                <div class="products-image" style="
                      background-image: url('images/pic02.jpg');
                    "></div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="component-products d-block" href="details.html">
              <div class="products-thumbnail">
                <div class="products-image" style="
                      background-image: url('images/pic03.jpg');
                    "></div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="component-products d-block" href="details.html">
              <div class="products-thumbnail">
                <div class="products-image" style="
                      background-image: url('images/pic04.jpg');
                    "></div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a class="component-products d-block" href="details.html">
              <div class="products-thumbnail">
                <div class="products-image" style="
                      background-image: url('images/pic05.jpg');
                    "></div>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <div class="component-products d-block" href="details.html">
              <div class="products-thumbnail">
                <div class="products-image" style="
                      background-image: url('images/pic06.jpg');
                    "></div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <div class="component-products d-block" href="details.html">
              <div class="products-thumbnail">
                <div class="products-image" style="
                      background-image: url('images/pic07.jpg');
                    "></div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <div class="component-products d-block" href="details.html">
              <div class="products-thumbnail">
                <div class="products-image" style="
                      background-image: url('images/pic08.jpg');
                    "></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection