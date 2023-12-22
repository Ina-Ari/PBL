<title>Edit Diklat Fungsional</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$con['id_pegawai']}"); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-8">
                <?php echo form_open_multipart('Cpegawai/c_pegawai/updateDikfung/' . $con['id_diklat'] . '/' . $con['id_pegawai']); ?>
                  <div class="form-group">
                    <label for="nama_diklat" class="col-form-label">Nama Diklat</label>
                    <input type="text" class="form-control" name="nama_diklat" value="<?php echo $con['nama_diklat'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="tipe_diklat" class="col-form-label">Tipe Diklat</label>
                    <input type="text" class="form-control" name="tipe_diklat" value="<?php echo $con['tipe_diklat'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="jenis_diklat" class="col-form-label">Jenis Diklat</label>
                    <input type="text" class="form-control" name="jenis_Diklat" value="<?php echo $con['jenis_diklat'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_diklat" class="col-form-label">Tanggal Diklat</label>
                    <input type="date" class="form-control" name="tanggal_diklat" value="<?php echo $con['tanggal_diklat'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="no_sertifikat" class="col-form-label">No Sertifikat</label>
                    <input type="text" class="form-control" name="no_sertifikat" value="<?php echo $con['no_sertifikat'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="penyelenggara" class="col-form-label">Penyelenggara</label>
                    <input type="text" class="form-control" name="penyelenggara" value="<?php echo $con['penyelenggara'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="instansi" class="col-form-label">Instansi</label>
                    <input type="text" class="form-control" name="instansi" value="<?php echo $con['instansi'] ?>">
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