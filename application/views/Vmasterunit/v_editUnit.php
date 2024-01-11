<title>Edit Unit Kerja</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url('Cmasterunit/c_masterunit'); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-6">
                <form method="post" action="<?php echo base_url('Cmasterunit/c_masterunit/updateUnit/' . $isi['id_unit']) ?>">
                  <div class="form-group">
                    <label for="nama_unit" class="col-form-label">Nama Unit *</label>
                    <input type="text" class="form-control" name="nama_unit" value="<?php echo form_error('nama_unit')? set_value('nama_unit') : $isi['nama_unit'] ?>">
                  </div>
                  <div style="color: red;">
                      <?php echo form_error('nama_unit'); ?>
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