<title>Edit Golongan</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <a href="<?php echo base_url('Cmastergolongan/c_dafgol'); ?>" class="btn-back">
                  <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
                </a>
                <div class="card-block col-6">
                  <form method="post" action="<?php echo base_url('Cmastergolongan/c_dafgol/updateDafgol/' . $isi['id_jenis_golongan']) ?>">
                    <div class="form-group">
                      <label for="jenis_golongan" class="col-form-label">Jenis Golongan *</label>
                      <input type="text" class="form-control" name="jenis_golongan" value="<?php echo form_error('jenis_golongan')? set_value('jenis_golongan') : $isi['jenis_golongan'] ?>">
                    </div>
                    <div style="color: red;">
                      <?php echo form_error('jenis_golongan'); ?>
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