<title>Tambah Pendidikan</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$peg[0]['id_pegawai']}"); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-8">
                <?php echo form_open_multipart('Cpegawai/c_pegawai/insertPendidikan/' . $peg[0]['id_pegawai']); ?>
                  <div class="form-group">
                    <label for="id_tingpen" class="col-form-label">Tingkat Pendidikan *</label>
                    <select name="id_tingpen" id="input-file" class="form-control">
                      <option value="">-- Pilih Pendidikan --</option>
                      <?php foreach ($masterpen as $key) : ?>
                        <option value="<?php echo $key['id_tingpen'] ?>"><?php echo $key['tingkat_pendidikan'] ?></option> 
                      <?php endforeach ?>
                    </select>
                    <?php echo form_error('id_tingpen'); ?>
                  </div>
                  <div class="form-group">
                    <label for="nama_sekolah" class="col-form-label">Nama Sekolah *</label>
                    <input type="text"  class="form-control" name="nama_sekolah" value="<?php echo set_value('nama_sekolah'); ?>">
                    <?php echo form_error('nama_sekolah'); ?>
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lulus" class="col-form-label">Tanggal Lulus *</label>
                    <input type="date" class="form-control" name="tanggal_lulus">
                    <?php echo form_error('tanggal_lulus'); ?>
                  </div>
                  <div class="form-group">
                    <label for="no_ijazah" class="col-form-label">No Ijazah</label>
                    <input type="text" class="form-control" name="no_ijazah">
                  </div>
                  <div class="form-group">
                    <label for="jurusan" class="col-form-label">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan">
                  </div>
                  <div class="form-group">
                    <label for="gelar_depan" class="col-form-label">Gelar Depan</label>
                    <input type="text" class="form-control" name="gelar_depan">
                  </div>
                  <div class="form-group">
                    <label for="gelar_belakang" class="col-form-label">Gelar Belakang</label>
                    <input type="text" class="form-control" name="gelar_belakang">
                  </div>
                  <div class="form-group">
                    <label for="file_ijazah" class="col-form-label">File Ijazah</label>
                    <input type="file" id="input-file" class="form-control" name="file_ijazah">
                  </div>
                  <div class="form-group">
                    <label for="status_validasi" class="col-form-label">Status Validasi</label>
                    <select id="input-file" class="form-control" name="status_validasi">
                      <?php foreach ($status_validasi as $key) { ?>
                        <?php $cek = ($key['status'] == $con['status_validasi'])? "selected" : ""; ?>
                        <option value="<?php echo $key['status'] ?>" <?php echo $cek ?>><?php echo $key['status'] ?></option> 
                      <?php } ?>
                    </select>
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