<title>Tambah Golongan</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$peg[0]['id_pegawai']}"); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-8">
                <?php echo form_open_multipart('Cpegawai/c_pegawai/insertGolongan/' . $peg[0]['id_pegawai']); ?>
                  <div class="form-group">
                    <label for="id_jenis_golongan" class="col-form-label">Golongan</label>
                    <select name="id_jenis_golongan" id="input-file" class="form-control">
                      <?php foreach ($mastergol as $key) : ?>
                        <option value="<?php echo $key['id_jenis_golongan'] ?>"><?php echo $key['jenis_golongan'] ?></option> 
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="lama_tahun" class="col-form-label">Lama Tahun</label>
                    <input type="text" class="form-control" name="lama_tahun">
                  </div>
                  <div class="form-group">
                    <label for="lama_bulan" class="col-form-label">Lama Bulan</label>
                    <input type="text" class="form-control" name="lama_bulan">
                  </div>
                  <div class="form-group">
                    <label for="tmt_golongan" class="col-form-label">Tanggal Mulai Tugas</label>
                    <input type="date" class="form-control" name="tmt_golongan">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_sk" class="col-form-label">Tanggal SK</label>
                    <input type="date" class="form-control" name="tanggal_sk">
                  </div>
                  <div class="form-group">
                    <label for="nomor_sk" class="col-form-label">Nomor SK</label>
                    <input type="text" class="form-control" name="nomor_sk">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_bkn" class="col-form-label">Tanggal BKN</label>
                    <input type="date" class="form-control" name="tanggal_bkn">
                  </div>
                  <div class="form-group">
                    <label for="nomor_bkn" class="col-form-label">Nomor BKN</label>
                    <input type="text" class="form-control" name="nomor_bkn">
                  </div>
                  <div class="form-group">
                    <label for="jenis_kp" class="col-form-label">Jenis KP</label>
                    <input type="text" class="form-control" name="jenis_kp">
                  </div>
                  <div class="form-group">
                    <label for="file_sk" class="col-form-label">File SK</label>
                    <input type="file" id="input-file" class="form-control" name="file_sk">
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