<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('admin-lte-3/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MMT Unjani</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-1 pb-0 mb-0 d-flex">
            <div class="image mt-2">
                <img src="{{ asset('admin-lte-3/dist/img/avatar.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="mt-0 d-block">{{ auth()->user()->name }}</a>
                <p class="mt-0 text-white d-block">{{ auth()->user()->email }}</p>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @if (auth()->user()->level == 'admin')
                    <li class="nav-item">
                        <a href="{{ url('/data-pendaftaran') }}"
                            class="nav-link {{ $title == 'data-pendaftaran' ? 'active' : '' }}">
                            {{-- <i class="nav-icon fas fa-chalkboard-teacher"></i> --}}
                            <i class="fa fa-solid fa-graduation-cap nav-icon"></i>
                            <p>
                                Data Pendaftaran
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#"
                            class="nav-link {{ $title == 'kategori-artikel' || $title == 'artikel-berita' || $title == 'testimonial' ? 'active' : '' }}">
                            <i class="fa fa-users nav-icon"></i>
                            <p>
                                Artikel
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('/kategori-artikel') }}"
                                    class="nav-link {{ $title == 'kategori-artikel' ? 'active' : '' }}">
                                    <i class="fa fa-solid fa-list nav-icon"></i>
                                    <p>Kategori Artikel</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/artikel-berita') }}"
                                    class="nav-link {{ $title == 'artikel-berita' ? 'active' : '' }}">
                                    <i class="far fa-solid fa-newspaper nav-icon"></i>
                                    <p>Artikel Berita</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/testimonial') }}"
                                    class="nav-link {{ $title == 'testimonial' ? 'active' : '' }}">
                                    <i class="fa fa-solid fa-comment-dots nav-icon"></i>
                                    <p>Testimonial</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if (auth()->user()->level == 'siswa')
                    <li class="nav-item">
                        <a href="{{ url('/status-pendaftaran') }}"
                            class="nav-link {{ $title == 'status-pendaftaran' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-chalkboard-teacher"></i>
                            <p>
                                Status Pendaftaran
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/testimoni') }}"
                            class="nav-link {{ $title == 'testimoni' ? 'active' : '' }}">
                            <i class="fa fa-solid fa-comment-dots nav-icon"></i>
                            <p>Testimoni</p>
                        </a>
                    </li>
                @endif

                {{-- <li class="nav-item">
                    <a onclick="
                            event.preventDefault();
                            document.getElementById('logout').submit();"
                        href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Log out
                        </p>
                    </a>
                    <form id="logout" action="#" method="post" class="d-inline border-0">
                        @csrf
                    </form>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ url('/logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Log out
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
