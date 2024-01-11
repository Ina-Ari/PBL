<title>Edit Pendidikan</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$con['id_pegawai']}"); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-8">
                <?php echo form_open_multipart('Cpegawai/c_pegawai/updatePendidikan/' . $con['id_pendidikan'] . '/' . $con['id_pegawai']); ?>
                  <?php $cek_error = form_error('id_tingpen') || form_error('nama_sekolah') || form_error('tanggal_lulus') || form_error('no_ijazah') || form_error('jurusan') || form_error('gelar_depan') || form_error('gelar_belakang') || form_error('status_validasi')?>
                  <div class="form-group">
                    <label for="id_tingpen" class="col-form-label">Tingkat Pendidikan *</label>
                    <select name="id_tingpen" id="input-file" class="form-control">
                      <option value="">-- Pilih Pendidikan --</option>
                      <?php foreach ($masterpen as $key) { ?>
                        <?php $cek_value = set_value('id_tingpen') ? set_value('id_tingpen') : $con['id_tingpen']?>
                        <?php $cek = ($key['id_tingpen'] == $cek_value)? "selected" : ""; ?>
                        <option value="<?php echo $key['id_tingpen'] ?>" <?php echo $cek ?>><?php echo $key['tingkat_pendidikan'] ?></option> 
                      <?php } ?>
                    </select>
                    <div style="color: red;">
                      <?php echo form_error('id_tingpen'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_sekolah" class="col-form-label">Nama Sekolah *</label>
                    <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $cek_error ? set_value('nama_sekolah') : $con['nama_sekolah'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('nama_sekolah'); ?>
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lulus" class="col-form-label">Tanggal Lulus *</label>
                    <input type="date" class="form-control" name="tanggal_lulus" value="<?php echo $cek_error ? set_value('tanggal_lulus') : $con['tanggal_lulus'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('tanggal_lulus'); ?>
                    </div>              
                  </div>
                  <div class="form-group">
                    <label for="no_ijazah" class="col-form-label">No Ijazah</label>
                    <input type="text" class="form-control" name="no_ijazah" value="<?php echo $cek_error ? set_value('no_ijazah') : $con['no_ijazah'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('no_ijazah'); ?>
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="jurusan" class="col-form-label">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" value="<?php echo $cek_error ? set_value('jurusan') : $con['jurusan'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('jurusan'); ?>
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="gelar_depan" class="col-form-label">Gelar Depan</label>
                    <input type="text" class="form-control" name="gelar_depan" value="<?php echo $cek_error ? set_value('gelar_depan') : $con['gelar_depan'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('gelar_depan'); ?>
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="gelar_belakang" class="col-form-label">Gelar Belakang</label>
                    <input type="text" class="form-control" name="gelar_belakang" value="<?php echo $cek_error ? set_value('gelar_belakang') : $con['gelar_belakang'] ?>">
                    <div style="color: red;">
                      <?php echo form_error('gelar_belakang'); ?>
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="file_ijazah" class="col-form-label">File Ijazah</label>
                    <input type="file" id="input-file" class="form-control" name="file_ijazah" value="<?php echo $con['file_ijazah'] ?>">
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