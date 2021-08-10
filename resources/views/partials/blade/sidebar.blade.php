<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard.index') }}" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="RFID Frontend Logo"
            class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">RFID Frontend</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <!-- MASTER -->
                <li class="nav-header">MASTER</li>
                <!-- MASTER -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-code"></i>
                        <p>
                            RFID
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.rfid.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                            <a href="{{ route('admin.rfid.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah RFID</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-prescription"></i>
                        <p>
                            Item
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.item.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                            <a href="{{ route('admin.item.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Item</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-thumbtack"></i>
                        <p>
                            Location
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.location.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                            <a href="{{ route('admin.location.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Item</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- REPORT -->
                <li class="nav-header">REPORT</li>
                <!-- REPORT -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
