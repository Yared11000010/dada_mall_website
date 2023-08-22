  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-success ">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('images/Logo.png') }}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bold text-decoration-none ">DADA MALL</span> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="javascript:void();" class="d-block">Welcome {{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open }} ">
            <a href="{{ url('admin/dashboard') }}" class="nav-link active }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>
          <li class="nav-item has-treeview {{ request()->is('users/create')?'menu-open':'' }}  {{ request()->is('users')?'menu-open':'' }}">
            <a href="#" class="nav-link mt-1 mb-1 {{ request()->is('users/create')? 'active':'' }}{{ request()->is('users')?'active':'' }}">
              <i class="nav-icon fa  fa-users "></i>
              <p>
                User Managements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.create') }}" class="nav-link  {{ request()->is('users/create')? 'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link {{ request()->is('users')?'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>All Users</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ request()->is('advertisements')?'menu-open':'' }} {{ request()->is('advertisements/*')?'menu-open':'' }}  ">
            <a href="#" class="nav-link mt-1 mb-1 {{ request()->is('advertisements')? 'active':'' }}{{ request()->is('advertisements/*')?'active':'' }}">
              <i class="nav-icon fa  fa-user "></i>
              <p>
                Advertisements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('advertisements.create') }}" class="nav-link {{ request()->is('advertisements/create')? 'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add Advertisements</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('advertisements.index') }}" class="nav-link {{ request()->is('advertisements')?'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>All Advertisements</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ request()->is('banners')?'menu-open':'' }} {{ request()->is('banners/*')?'menu-open':'' }}">
            <a href="#" class="nav-link mt-1 mb-1 {{ request()->is('banners/*')? 'active':'' }}{{ request()->is('banners')?'active':'' }}">
              <i class="nav-icon fa  fa-archive  "></i>
              <p>
                Banners
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('banners.create') }}" class="nav-link  {{ request()->is('banners/create')? 'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add Banner</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('banners.index') }}" class="nav-link {{ request()->is('banners')?'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>All Banners</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview pb-1 {{ request()->is('blogs')?'menu-open':'' }}{{ request()->is('blogs/*')?'menu-open':'' }} ">
            <a href="#" class="nav-link {{ request()->is('blogs')? 'active':'' }}{{ request()->is('blogs/*')?'active':'' }} ">
              <i class="nav-icon fa fa-bars"></i>
              <p>
                Manage Blogs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('blogs.create') }}" class="nav-link {{ request()->is('blogs/create')? 'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add Blog</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('blogs.index') }}" class="nav-link {{ request()->is('blogs')?'active':'' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>All Blogs</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <li class="nav-item">
             <p><hr></p>
            </li>
          </li>
          <li class="nav-item">
            <a href="{{ route('contacts') }}" class="nav-link ">
              <i class="nav-icon fa fa-user-friends "></i>
              <p>Contact Us</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('profile.edit') }}" class="nav-link ">
              <i class="nav-icon fa fa-cog "></i>
              <p>My Settings</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
{{-- start of main content --}}
