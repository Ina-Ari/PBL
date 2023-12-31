<title>Edit Diklat Struktural</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$con['id_pegawai']}"); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-8">
                <?php echo form_open_multipart('Cpegawai/c_pegawai/updateDikstruk/' . $con['id_diklat'] . '/' . $con['id_pegawai']); ?>
                  <div class="form-group">
                    <label for="nama_diklat" class="col-form-label">Nama Diklat</label>
                    <input type="text" class="form-control" name="nama_diklat" value="<?php echo $con['nama_diklat'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="lokasi_diklat" class="col-form-label">Lokasi Diklat</label>
                    <input type="text" class="form-control" name="lokasi_diklat" value="<?php echo $con['lokasi_diklat'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_mulai" class="col-form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" name="tanggal_mulai" value="<?php echo $con['tanggal_mulai'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_selesai" class="col-form-label">Tanggal Selesai</label>
                    <input type="text" class="form-control" name="tanggal_selesai" value="<?php echo $con['tanggal_selesai'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="berkas_validasi" class="col-form-label">Berkas Validasi</label>
                    <input type="file" id="input-file" class="form-control" name="berkas_validasi" value="<?php echo $con['berkas_validasi'] ?>">
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