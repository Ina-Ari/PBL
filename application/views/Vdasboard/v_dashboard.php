<title>Dashboard</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-start p-4">
                <i class="fa-solid fa-users fa-3x text px-2"></i>
                <div class="ms-3">
                    <p class="mb-2">Daftar Dosen</p>
                    <h4 class="mb-0"><?php echo $this->db->count_all('pegawai') ?></h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-start p-4">
                <i class="fa-solid fa-user-tie fa-3x text px-3"></i>
                <div class="ms-3">
                    <p class="mb-2">Daftar Golongan</p>
                    <h4 class="mb-0"><?php echo $this->db->count_all('master_golongan') ?></h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-start p-4">
                <i class="fa-solid fa-user-graduate fa-3x text px-2"></i>
                <div class="ms-3">
                    <p class="mb-2">Daftar Pendidikan</p>
                    <h4 class="mb-0"><?php echo $this->db->count_all('master_pendidikan') ?></h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-start p-4">
                <i class="fa-solid fa-users-viewfinder fa-3x text px-2"></i>
                <div class="ms-3">
                    <p class="mb-2">Daftar Jabatan Fungsional</p>
                    <h4 class="mb-0"><?php echo $this->db->count_all('master_jabatan_fung') ?></h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-start p-4">
                <i class="fa-solid fa-users-between-lines fa-3x text px-2"></i>
                <div class="ms-3">
                    <p class="mb-2">Daftar Jabatan Struktural</p>
                    <h4 class="mb-0"><?php echo $this->db->count_all('master_jabatan_struktural') ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>