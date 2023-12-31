<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="<?php echo base_url('Cdashboard/c_dashboard'); ?>" class="navbar-brand mx-1 mb-3">
            <h5 class="text"><img src="<?php echo base_url('assets/images/logo1.png')?>" width="60"></i>KEPEGAWAIAN</h5>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="<?php echo base_url('assets/images/user.jpg')?>" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>

        <div class="navbar-nav w-100" id="sidebar-dashboard">
            <a href="<?php echo base_url('Cdashboard/c_dashboard'); ?>" class="<?php echo ($active_tab == 'dashboard') ? 'active' : ''; ?> nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="<?php echo base_url('Cdafdosen/c_dafdosen'); ?>" class="<?php echo ($active_tab == 'dafdosen') ? 'active' : ''; ?> nav-item nav-link"><i class="fa-solid fa-users me-2"></i>Daftar Dosen</a>
            <a href="<?php echo base_url('Cmastergolongan/c_dafgol'); ?>" class="<?php echo ($active_tab == 'dafgol') ? 'active' : ''; ?> nav-item nav-link"><i class="fa-solid fa-user-tie me-2"></i>Daftar Golongan</a>
            <a href="<?php echo base_url('Cmasterpendidikan/c_tingpendidikan'); ?>" class="<?php echo ($active_tab == 'tingpen') ? 'active' : ''; ?> nav-item nav-link"><i class="fa-solid fa-user-graduate me-2"></i>Daftar Pendidikan</a>
            <a href="<?php echo base_url('Cmasterpendidikan/c_tingpendidikan'); ?>" class="nav-item nav-link"><i class="fa-solid fa-users-viewfinder me-2"></i>Daftar Jabatan <span style="margin-left: 48px;">Fungsional</span></a>
            <a href="<?php echo base_url('Cmasterpendidikan/c_tingpendidikan'); ?>" class="nav-item nav-link"><i class="fa-solid fa-users-between-lines me-2"></i>Daftar Jabatan <span style="margin-left: 48px;">Struktural</span></a>
        </div>
    </nav>
</div>