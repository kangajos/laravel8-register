  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">

          <div class="logo">
              <h1 class="text-light"><a href="index.html"><span>{{ config('app.name') }}</span></a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto {{ request()->segment(1) == '' ? 'active' : '' }}"
                          href="{{ route('home.index') }}">Home</a></li>
                  <li><a class="nav-link scrollto {{ request()->segment(1) == 'user' ? 'active' : '' }}" href="{{ route('user.index') }}">List Users</a></li>
                  @auth
                      <li><a class="nav-link scrollto {{ request()->segment(1) == 'profile' ? 'active' : 'profile' }}" href="{{ route('profile.detail') }}">Profile</a></li>
                      <li><a class="nav-link scrollto" href="{{ route('login.out') }}">Logout</a></li>
                  @endauth
                  @guest
                      <li><a class="getstarted bg-transparent text-danger btn btn-outline-danger {{ request()->segment(1) == 'register' ? 'active' : '' }}"
                              href="{{ route('register.index') }}">Register</a></li>
                      <li><a class="getstarted {{ request()->segment(1) == '' ? 'lgoin' : '' }}" href="{{ route('login.index') }}">Login</a></li>
                  @endguest
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->
