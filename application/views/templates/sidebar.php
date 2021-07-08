<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Jadwal</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if($active=='dashboard') echo 'active'; ?>">
                <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Activity -->
            <li class="nav-item <?php if($active=='jadwal') echo 'active'; ?>">
                <a class="nav-link" href="<?php echo base_url('jadwal') ?>">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Jadwal</span></a>
            </li>

            <?php 
      if($this->session->userdata('role')==1){
    ?>


            <!-- Nav Item - User -->
            <li class="nav-item <?php if($active=='user') echo 'active'; ?>">
                <a class="nav-link" href="<?php echo base_url('user') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>User</span></a>
            </li>

            <?php 
      }?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">