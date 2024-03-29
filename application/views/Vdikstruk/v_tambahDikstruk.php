<title>Tambah Diklat struktural</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$peg[0]['id_pegawai']}"); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-8">
                <?php echo form_open_multipart('Cpegawai/c_pegawai/insertDikstruk/' . $peg[0]['id_pegawai']); ?>
                  <div class="form-group">
                    <label for="nama_diklat" class="col-form-label">Nama Diklat *</label>
                    <input type="text" class="form-control" name="nama_diklat" value="<?php echo set_value('nama_diklat'); ?>">
                    <div style="color: red;">
                      <?php echo form_error('nama_diklat'); ?>
                    </div>
                  <div>
                  <div class="form-group">
                    <label for="lokasi_diklat" class="col-form-label">Lokasi Diklat *</label>
                    <input type="text" class="form-control" name="lokasi_diklat" value="<?php echo set_value('lokasi_diklat'); ?>">
                    <div style="color: red;">
                      <?php echo form_error('lokasi_diklat'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tanggal_mulai" class="col-form-label">Tanggal Mulai *</label>
                    <input type="date" class="form-control" name="tanggal_mulai" value="<?php echo set_value('tanggal_mulai'); ?>">
                    <div style="color: red;">
                      <?php echo form_error('tanggal_mulai'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tanggal_selesai" class="col-form-label">Tanggal Selesai *</label>
                    <input type="date" class="form-control" name="tanggal_selesai" value="<?php echo set_value('tanggal_selesai'); ?>">
                    <div style="color: red;">
                      <?php echo form_error('tanggal_selesai'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="berkas_validasi" class="col-form-label">Berkas Validasi</label>
                    <input type="file" id="input-file" class="form-control" name="berkas_validasi">
                  </div>
                  <div class="form-group">
                    <label for="status_validasi" class="col-form-label">Status Validasi</label>
                    <select id="input-file" class="form-control" name="status_validasi">
                      <?php foreach ($status_validasi as $key) { ?>
                        <?php $cek_value = set_value('status_validasi') ? set_value('status_validasi') : ""?>
                        <?php $cek = ($key['status'] == $cek_value)? "selected" : ""; ?>
                        <option value="<?php echo $key['status'] ?>" <?php echo $cek ?>><?php echo $key['status'] ?></option> 
                      <?php } ?>
                    </select>
                  </div>
                  <div>
                    <input type="hidden" name="id_pegawai" value="<?php echo $peg[0]['id_pegawai'] ?>">
                  </div>
                  <div>
                    <button type="submit" class="btn btn-simpan mt-3" >Simpan</button>
                  </div>
                <?php echo form_close(); ?>
              </div> 
            </div>
        </div>
    </div>
</div>            