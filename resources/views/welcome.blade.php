

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EstateAgency - Real Estate Holdings</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend_asset/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('frontend_asset/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend_asset/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend_asset/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend_asset/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend_asset/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend_asset/assets/css/style.css')}}" rel="stylesheet">

  {{-- toast  --}}
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  {{-- <div class="click-closed"></div> --}}
  <!--/ Form Search Star /-->
  {{-- <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Type</label>
              <select class="form-control form-select form-control-a" id="Type">
                <option>All Type</option>
                <option>For Rent</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="city">City</label>
              <select class="form-control form-select form-control-a" id="city">
                <option>All City</option>
                <option>Alabama</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bedrooms">Bedrooms</label>
              <select class="form-control form-select form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="garages">Garages</label>
              <select class="form-control form-select form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bathrooms">Bathrooms</label>
              <select class="form-control form-select form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="price">Min Price</label>
              <select class="form-control form-select form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->> --}}

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{route('welcome')}}">Estate<span class="color-b">Agency</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link @if (Route::is('welcome')) active @endif " href="{{route('welcome')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link @if (Route::is('about')) active @endif " href="{{route('about')}}">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link @if (Route::is('all.properties')) active @endif " href="{{route('all.properties')}}">Property</a>
          </li>

          <li class="nav-item">
            <a class="nav-link @if (Route::is('all.agents')) active @endif" href="{{route('all.agents')}}">Agents</a>
          </li>


          </li>
          <li class="nav-item">
            <a class="nav-link @if (Route::is('contact')) active @endif" href="{{route('contact')}}">Contact</a>
          </li>

          @php
              $user = Illuminate\Support\Facades\Auth::user();
          @endphp

            @if (Route::has('login'))

                    @auth

                        @if ($user->role == 'admin')

                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>

                        @else

                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('agent.dashboard') }}">Dashboard</a>
                        </li>
                        @endif
                        @else

                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('login') }}">Login</a>
                        </li>
                        {{-- KEPT COMMENTED FOR NOW IF NEEDED --}}
                        {{-- @if (Route::has('register'))

                            <a class="nav-link " href="{{ route('register') }}">Register</a>
                        </li>
                        @endif --}}
                    @endauth
            @endif
        </ul>
      </div>
    </div>
  </nav>

    @yield('frontend_content')

    @yield('front_scripts')

  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">About Developer</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Hi I am Mohammed Nashmi. I Have 2 years and 8 Months+ Experience With FullStack Development.
              </p>
              <p class="w-text-a color-text-a">
                This Personal Project Demonstrates My Skills in FrontEnd & BackEnd Web Development.
                It was Crafted Using Laravel 10 for the BackEnd & HTML5, CSS3, and jQuery for the FrontEnd.
              </p>
              <p class="w-text-a color-text-a">
              For Further Clarifications, Make Sure To Contact Me. Thank You!
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> +94 77-402-3440
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> mohammednashmi98@gmail.com
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-5 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="https://www.linkedin.com/in/mohammed-nashmi/"><i class="bi bi-linkedin" aria-hidden="true"></i> My LinkedIn Profile</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="https://github.com/MohammedNashmi07"><i class="bi bi-github" aria-hidden="true"></i>My GitHub Profile</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="credits">
            Designed by <a href="https://www.linkedin.com/in/mohammed-nashmi/">Nashmi</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend_asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend_asset/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend_asset/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend_asset/assets/js/main.js')}}"></script>

    {{-- sweet alert  --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.all.min.js"></script>
{{-- jquery cdn  --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- toast --}}
    <script>

        const toastMixin = Swal.mixin({
        toast: true,
        position: 'top-right',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        },
        customClass: {
        container: 'dark-mode-toast', // Add a custom CSS class
      },
      });


        @if (session()->has('message.success'))
            @if (session('message.success') == '1')
                toastMixin.fire({
                    icon: 'success',
                    animation: true,
                    title: "{{ session('message.message') }}"
                });
            @else
                toastMixin.fire({
                    icon: 'error',
                    animation: true,
                    title: "{{ session('message.message') }}"
                });
            @endif
        @endif


    </script>

</body>

</html>
