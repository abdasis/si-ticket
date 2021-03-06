<aside class="main-sidebar main-sidebar-custom sidebar-light-blue elevation-1">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link border-light">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
        <span class="brand-text font-weight-light">SI-TIKET</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 pt-3 mb-3 d-flex border-0 bg-light rounded">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-1" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i data-feather="monitor" class="nav-icon"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Pemesanan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Data Ticket
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Pengguna
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('pengguna.tambah')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Pengguna</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('pengguna.semua')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Semua Pengguna</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <div class="sidebar-custom bg-light border-light">
        <a href="#" class="btn btn-link text-secondary"><i class="fas fa-cogs"></i></a>
        <a href="#" class="btn btn-light btn-sm hide-on-collapse pos-right">Help</a>
    </div>
    <!-- /.sidebar-custom -->
</aside>
