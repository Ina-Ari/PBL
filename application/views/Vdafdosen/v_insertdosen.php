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
              <label for="nama_pegawai" class="col-form-label">Nama Pegawai *</label>
              <input type="text" class="form-control" name="nama_pegawai" value="<?php echo set_value('nama_pegawai') ?>">
              <div style="color: red;">
                <?php echo form_error('nama_pegawai') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="nip" class="col-form-label">NIP *</label>
              <input type="text" class="form-control" name="nip" value="<?php echo set_value('nip') ?>">
              <div style="color: red;">
                <?php echo form_error('nip') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="nidn" class="col-form-label">NIDN *</label>
              <input type="text" class="form-control" name="nidn" value="<?php echo set_value('nidn') ?>">
              <div style="color: red;">
                <?php echo form_error('nidn') ?>
              </div>
            </div>
            <div class="form-group" >
              <label for="jenis_kelamin" class="col-form-label" >Jenis Kelamin *</label>
                <select class="form-control" id="input-file" name="jenis_kelamin">
                  <option value="">-- Pilih Jenis Kelamin --</option>
                  <?php foreach ($gender as $key) { ?>
                    <?php $cek_value = set_value('jenis_kelamin') ? set_value('jenis_kelamin') : "" ?>
                    <?php $cek = ($key['nama_gender'] == $cek_value)? "selected" : ""; ?>
                    <option value="<?php echo $key['nama_gender'] ?>" <?php echo $cek ?>><?php echo $key['nama_gender'] ?></option> 
                  <?php } ?>
                </select>
                <div style="color: red;">
                <?php echo form_error('jenis_kelamin') ?>
                </div>
            </div>
            <div class="form-group">
              <label for="no_kartupegawai" class="col-form-label">No Kartu Pegawai *</label>
              <input type="text" class="form-control" name="no_kartupegawai" value="<?php echo set_value('no_kartupegawai') ?>">
              <div style="color: red;">
                <?php echo form_error('no_kartupegawai') ?>
              </div>
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