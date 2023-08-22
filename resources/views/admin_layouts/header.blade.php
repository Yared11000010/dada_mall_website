 <!-- Navbar -->
 <nav class="main-header fixed-top navbar navbar-expand 0 navbar-light bg-white border-bottom ">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.html" class="nav-link font-weight-bold">Dashboard</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class=" d-flex nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
            <img src="{{ asset('/storage/banner/'.Auth::user()->image) }}" style="width: 30px; height:30px; box-shadow:1px 1px 2px 1px gray; border-radius:0.2rem;" alt="">
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
            <span class="dropdown-item dropdown-header">Settings</span>
            <div class="dropdown-divider"></div>
            <a href="{{ url('profile/edit') }}" class="dropdown-item">
              <i class="fas fa-users mr-2"></i>My profile
            </a>
            <a href="{{ url('change-password') }}" class="dropdown-item">
                <i class="fas fa-key  mr-2"></i>Change password
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                          <i class="fas fa-reply  mr-2"></i>
                          {{ __('Logout') }}
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
              </a>
            <div class="dropdown-divider"></div>
        </li>

      </ul>

     </div>

  </nav>
  <!-- /.navbar -->
