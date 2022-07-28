<header class="header_section">
  <div class="header_top">
    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +8801555666000
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : demo@hospital.com
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location
          </span>
        </a>
      </div>
    </div>
  </div>
  <div class="header_bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-xxl custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <img src="images/logo.png" alt="">
        </a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex me-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#appointment"> Appointment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#treatment">Treatment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#doctor">Doctor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonial">Testimonial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
              @if (Route::has('login'))
              @auth
              <li class="nav-item">
                <a class="nav-link" href="{{url('my-appointment')}}">My Appointment</a>
              </li>
              @endauth
              @endif
            </ul>
          </div>
          <div class="quote_btn-container">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              @auth
              <form method="POST" action="{{url('logout')}}" x-data="">
                @csrf
                <button class="btn btn-transparent text-light" type="submit">LogOut</button>
              </form>
              @else
              <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
              @endif
              @endauth
            </div>
            @endif
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>