<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
            <i class="fas fa-chalkboard-teacher"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PPDB</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/addAdmin'); ?>">
            <i class="fas fa-user-plus"></i>
            <span>Tambah Admin</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->