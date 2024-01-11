<title>Tambah Golongan</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$con['id_pegawai']}"); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-8">
                <?php echo form_open_multipart('Cpegawai/c_pegawai/updateGolongan/' . $con['id_golongan'] . '/' .$con['id_pegawai']); ?>
                  <?php $cek_error = form_error('lama_tahun') || form_error('lama_bulan') || form_error('tmt_golongan') || form_error('tanggal_sk') || form_error('nomor_sk') || form_error('tanggal_bkn') || form_error('nomor_bkn') || form_error('jenis_kp') || form_error('status_validasi')?>
                  <div class="form-group">
                    <label for="id_jenis_golongan" class="col-form-label">Golongan *</label>
                    <select name="id_jenis_golongan" id="input-file" class="form-control">
                      <option value="">-- PIlih Golongan --</option>
                      <?php foreach ($mastergol as $key) : ?>
                        <?php $cek_value = set_value('id_jenis_golongan') ? set_value('id_jenis_golongan') : $con['id_jenis_golongan']?>
                        <?php $cek = ($key['id_jenis_golongan'] == $cek_value)? "selected" : ""; ?>
                        <option value="<?php echo $key['id_jenis_golongan'] ?>"<?php echo $cek ?>><?php echo $key['jenis_golongan'] ?></option> 
                      <?php endforeach ?>
                    </select>
                    <div style="color: red;">
                      <?php echo form_error('id_jenis_golongan'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lama_tahun" class="col-form-label">Lama Tahun *</label>
                    <input type="text" class="form-control" name="lama_tahun" value="<?php echo $cek_error ? set_value('lama_tahun') : $con['lama_tahun'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('lama_tahun'); ?>
                    </div>            
                  </div>
                  <div class="form-group">
                    <label for="lama_bulan" class="col-form-label">Lama Bulan *</label>
                    <input type="text" class="form-control" name="lama_bulan" value="<?php echo $cek_error ? set_value('lama_bulan') : $con['lama_bulan'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('lama_bulan'); ?>
                    </div>     
                  </div>
                  <div class="form-group">
                    <label for="tmt_golongan" class="col-form-label">Tanggal Mulai Tugas *</label>
                    <input type="date" class="form-control" name="tmt_golongan" value="<?php echo $cek_error ? set_value('tmt_golongan') : $con['tmt_golongan'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('tmt_golongan'); ?>
                    </div>     
                  </div>
                  <div class="form-group">
                    <label for="tanggal_sk" class="col-form-label">Tanggal SK *</label>
                    <input type="date" class="form-control" name="tanggal_sk" value="<?php echo $cek_error ? set_value('tanggal_sk') : $con['tanggal_sk'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('tanggal_sk'); ?>
                    </div>     
                  </div>
                  <div class="form-group">
                    <label for="nomor_sk" class="col-form-label">Nomor SK *</label>
                    <input type="text" class="form-control" name="nomor_sk" value="<?php echo $cek_error ? set_value('nomor_sk') : $con['nomor_sk'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('nomor_sk'); ?>
                    </div>     
                  </div> 
                  <div class="form-group">
                    <label for="tanggal_bkn" class="col-form-label">Tanggal BKN</label>
                    <input type="date" class="form-control" name="tanggal_bkn" value="<?php echo $cek_error ? set_value('tanggal_bkn') : $con['tanggal_bkn'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('tanggal_bkn'); ?>
                    </div>     
                  </div>
                  <div class="form-group">
                    <label for="nomor_bkn" class="col-form-label">Nomor BKN</label>
                    <input type="text" class="form-control" name="nomor_bkn" value="<?php echo $cek_error ? set_value('nomor_bkn') : $con['nomor_bkn'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('nomor_bkn'); ?>
                    </div>     
                  </div>
                  <div class="form-group">
                    <label for="jenis_kp" class="col-form-label">Jenis KP *</label>
                    <input type="text" class="form-control" name="jenis_kp" value="<?php echo $cek_error ? set_value('jenis_kp') : $con['jenis_kp'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('jenis_kp'); ?>
                    </div>     
                  </div>
                  <div class="form-group">
                    <label for="file_sk" class="col-form-label">File SK</label>
                    <input type="file" id="input-file" class="form-control" name="file_sk" value="<?php echo $con['file_sk'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="status_validasi" class="col-form-label">Status Validasi</label>
                    <select id="input-file" class="form-control" name="status_validasi">
                      <?php foreach ($status_validasi as $key) { ?>
                        <?php $cek_value = set_value('status_validasi') ? set_value('status_validasi') : $con['status_validasi']?>
                        <?php $cek = ($key['status'] == $cek_value)? "selected" : ""; ?>
                        <option value="<?php echo $key['status'] ?>" <?php echo $cek ?>><?php echo $key['status'] ?></option> 
                      <?php } ?>
                    </select>
                  </div>
                  <div>
                    <input type="hidden" name="id_pegawai" value="<?php echo $con['id_pegawai'] ?>">
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