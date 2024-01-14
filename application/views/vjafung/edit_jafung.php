<title>Edit Jabatan Fungsional</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$jf['id_pegawai']}"); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-8">
                <?php echo form_open_multipart('Cpegawai/c_pegawai/updateDataJafung/' . $jf['id_jabatan'] . '/' .$jf['id_pegawai']) ?>
                    <!-- Form fields here -->
                    <div class="form-group">
                        <label for="id_jf" class="col-form-label">Nama Jabatan *</label>
                        <select name="id_jf" id="input-file" class="form-control">
                            <option selected disabled>Pilih Jabatan</option>
                            <?php foreach ($masterjf as $key) : ?>
                                <option value="<?php echo $key['id_jf'] ?>" <?php echo ($key['id_jf'] == $jf['id_jf']) ? 'selected' : ''; ?>><?php echo $key['nama_jf'] ?></option> 
                            <?php endforeach ?>
                        </select>
                        <?php echo form_error('id_jf', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="no_sk" class="col-form-label">Nomor SK *</label>
                        <input type="text" name="no_sk" class="form-control" value="<?php echo $jf['no_sk']; ?>">
                        <?php echo form_error('no_sk', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_sk" class="col-form-label">Tanggal SK *</label>
                        <input type="date" name="tanggal_sk" class="form-control" value="<?php echo $jf['tanggal_sk']; ?>">
                        <?php echo form_error('tanggal_sk', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_mulai_jf" class="col-form-label">Tanggal Mulai *</label>
                        <input type="date" name="tanggal_mulai_jf" class="form-control" value="<?php echo $jf['tanggal_mulai_jf']; ?>">
                        <?php echo form_error('tanggal_mulai_jf', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="id_unit" class="col-form-label">Unit Organisasi *</label>
                        <select name="id_unit" id="input-file" class="form-control">
                            <option selected disabled>Pilih Unit</option>
                            <?php foreach ($masterunit as $key) : ?>
                                <option value="<?php echo $key['id_unit']?>" <?php echo ($key['id_unit'] == $jf['id_unit']) ? 'selected' : ''; ?>><?php echo $key['nama_unit'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <?php echo form_error('id_unit', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div>
                        <input type="hidden" name="id_pegawai" value="<?php echo $jf['id_pegawai']; ?>">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-simpan mt-3">Simpan</button>
                    </div> 
                <?php form_close() ?>
              </div>
            </div>
        </div>
    </div>
</div>