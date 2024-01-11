<title>Tambah Daftar Jabatan Fungsional</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url('Cmasterjabfung/c_masterjabfung'); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-6">
                <form method="post" action="insertMasterJabFung">
                  <div class="form-group">
                    <label for="nama_jf" class="col-form-label">Nama Jabatan Fungsional *</label>
                    <input type="text" class="form-control" name="nama_jf" value="<?php echo set_value('nama_jf'); ?>">
                  </div>
                    <div style="color: red;">
                      <?php echo form_error('nama_jf'); ?>
                    </div>
                  <div>
                   <button type="submit" class="btn btn-simpan mt-3">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>