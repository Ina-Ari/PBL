<title>Tambah Diklat Fungsional</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$peg[0]['id_pegawai']}"); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-8">
                <?php echo form_open_multipart('Cpegawai/c_pegawai/insertDikfung/' . $peg[0]['id_pegawai']); ?>
                  <div class="form-group">
                    <label for="nama_sekolah" class="col-form-label">Nama Diklat *</label>
                    <input type="text"  class="form-control" name="nama_diklat" value="<?php echo set_value('nama_diklat'); ?>">
                    <div style="color: red;">
                      <?php echo form_error('nama_diklat'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tipe_diklat" class="col-form-label">Tipe Diklat *</label>
                    <select name="tipe_diklat" id="input-file" class="form-control">  
                      <option value="">-- Pilih Tipe Diklat --</option>
                      <?php foreach ($tipe_diklat as $key) { ?>
                        <?php $cek_value = set_value('tipe_diklat') ? set_value('tipe_diklat') : "" ?>
                        <?php $cek = ($key['tipe'] == $cek_value)? "selected" : ""; ?>
                        <option value="<?php echo $key['tipe'] ?>" <?php echo $cek ?>><?php echo $key['tipe'] ?></option> 
                      <?php } ?>
                    </select>
                    <div style="color: red;">
                      <?php echo form_error('tipe_diklat'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jenis_diklat" class="col-form-label">Jenis Diklat *</label>
                    <input type="text"  class="form-control" name="jenis_diklat" value="<?php echo set_value('jenis_diklat'); ?>">
                    <div style="color: red;">
                      <?php echo form_error('jenis_diklat'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tanggal_diklat" class="col-form-label">Tanggal Diklat *</label>
                    <input type="date"  class="form-control" name="tanggal_diklat" value="<?php echo set_value('tanggal_diklat'); ?>">
                    <div style="color: red;">
                      <?php echo form_error('tanggal_diklat'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_sertifikat" class="col-form-label">No Sertifikat</label>
                    <input type="text" class="form-control" name="no_sertifikat" value="<?php echo set_value('no_Sertikat'); ?>">
                    <div style="color: red;">
                      <?php echo form_error('no_sertifikat'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="penyelenggara" class="col-form-label">Penyelenggara *</label>
                    <input type="text"  class="form-control" name="penyelenggara" value="<?php echo set_value('penyelenggara'); ?>">
                    <div style="color: red;">
                      <?php echo form_error('penyelenggara'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="instansi" class="col-form-label">Instansi *</label>
                    <input type="text"  class="form-control" name="instansi" value="<?php echo set_value('instansi'); ?>">
                    <div style="color: red;">
                      <?php echo form_error('instansi'); ?>
                    </div>
                  </div>
                  <div>
                    <input type="hidden" name="id_pegawai" value="<?php echo $peg[0]['id_pegawai'] ?>">
                  </div>
                  <div>
                    <button type="submit" class="btn btn-simpan mt-3">Simpan</button>
                  </div>
                <?php echo form_close(); ?>
              </div>
            </div>
        </div>
    </div>
</div>            