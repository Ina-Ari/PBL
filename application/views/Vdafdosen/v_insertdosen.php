<title>Tambah Dosen</title>
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-12">
      <div class="bg-light rounded h-100 p-4">
        <a href="<?php echo base_url('Cdafdosen/c_dafdosen'); ?>" class="btn-back">
          <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
        </a>
        <div class="card-block col-8">
          <?php echo form_open_multipart('Cdafdosen/c_dafdosen/insertDosen'); ?>
            <div class="form-group">
              <label for="foto" class="col-form-label">Foto Pegawai</label>
              <input class="form-control" id="input-file" type="file" name="foto">
            </div>
            <div class="form-group">
              <label for="nama_pegawai" class="col-form-label">Nama Pegawai</label>
              <input type="text" class="form-control" name="nama_pegawai">
            </div>
            <div class="form-group">
              <label for="nip" class="col-form-label">NIP</label>
              <input type="text" class="form-control" name="nip">
            </div>
            <div class="form-group">
              <label for="nidn" class="col-form-label">NIDN</label>
              <input type="text" class="form-control" name="nidn">
            </div>
            <div class="form-group" >
              <label for="jenis_kelamin" class="col-form-label" >Jenis Kelamin</label>
                <select class="form-control" id="input-file" name="jenis_kelamin">
                  <option value="">-- Pilih Jenis Kelamin --</option>
                  <option value="perempuan">Perempuan</option>
                  <option value="laki-laki">Laki-laki</option>
                </select>
            </div>
            <div class="form-group">
              <label for="no_kartupegawai" class="col-form-label">No Kartu Pegawai</label>
              <input type="text" class="form-control" name="no_kartupegawai">
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