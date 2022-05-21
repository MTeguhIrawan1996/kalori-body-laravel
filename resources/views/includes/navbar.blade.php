  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
      <a class="navbar-brand" href="{{ route ('home') }}">
        BODY FIT
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route ('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route ('register') }}">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-success btn-nav" href="{{ route ('login') }}">Sign In</a>
          </li>            
          @endguest
          
        </ul>
        @auth
                          <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link mt-1 ml-3 mr-auto" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/images/icon-user.png" alt="" class="rounded-circle mr-1 profile-picture" />
                            Hi, {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          @if (Auth::user()->roles == 'USER')  
                            <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                            <div class="dropdown-divider"></div>
                            @else
                            <a class="dropdown-item" href="{{ route('dashboard-admin') }}">Dashboard ADM</a>
                          @endif
                            
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 mr-auto d-inline-block mt-1" href="#">
                            <img src="/images/icon-cart-empty.svg" alt="" />
                        </a>
                    </li>
                </ul>

                <!-- Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                        Hi, {{ Auth::user()->name }}
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </li>
                </ul>
        @endauth
      </div>
    </div>
  </nav>
  <!-- Endnavbar -->