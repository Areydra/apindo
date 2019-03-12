    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ route('admin') }}"><img src="{{ asset('storage/images/logo.png') }}" alt="logo" style="width: 50px;  height: 50px" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('admin') }}"><img src="{{ asset('storage/images/logo.png') }}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-text">
                <p class="mb-1 text-black">{{ Auth::user()->username }}</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('admin_setting') }}">
                <i class="mdi mdi-account-settings-variant mr-2 text-primary"></i>
                Setting
              </a>
              <a class="dropdown-item" href="#" onclick="event.preventDefault();
                        document.getElementById('logout').submit()">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Signout
              </a>
              <form action="{{ route('logout') }}" method="POST" id="logout">@csrf</form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>