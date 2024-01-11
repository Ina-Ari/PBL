<title>Tambah Daftar Jabatan Struktural</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url('Cmasterjabstruk/c_masterjabstruk'); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-6">
                <form method="post" action="insertMasterJabStruk">
                  <div class="form-group">
                    <label for="nama_js" class="col-form-label">Nama Jabatan Struktural *</label>
                    <input type="text" class="form-control" name="nama_js" value="<?php echo set_value('nama_js'); ?>">
                  </div>
                    <div style="color: red;">
                      <?php echo form_error('nama_js'); ?>
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