<title>Edit Jabatan Struktural</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$js['id_pegawai']}"); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-8">
                <form id="editJabstukForm" action="<?php echo base_url('Cpegawai/c_pegawai/updateDataJabstuk/' . $js['id_jabatan'] . '/' .$js['id_pegawai']) ?>" method="post">
                    <!-- Form fields here -->
                    <div class="form-group">
                        <label for="id_js" class="col-form-label">Nama Jabatan  *</label>
                        <select name="id_js" id="input-file" class="form-control">
                            <!-- Populate options based on your data -->
                            <?php foreach ($masterjs as $key) : ?>
                                <option value="<?php echo $key['id_js'] ?>" <?php echo ($key['id_js'] == $js['id_js']) ? 'selected' : ''; ?>><?php echo $key['nama_js'] ?></option> 
                            <?php endforeach ?>
                        </select>
                        <?php echo form_error('id_js', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_mulai_js" class="col-form-label">Tanggal Mulai *</label>
                        <input type="date" name="tanggal_mulai_js" class="form-control" value="<?php echo $js['tanggal_mulai_js']; ?>">
                        <?php echo form_error('tanggal_mulai_js', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_sk" class="col-form-label">Tanggal SK  *</label>
                        <input type="date" name="tanggal_sk" class="form-control" value="<?php echo $js['tanggal_sk']; ?>">
                        <?php echo form_error('tanggal_sk', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="eselon" class="col-form-label">Eselon  *</label>
                        <select name="eselon" class="form-control" id="input-file">
                            <!-- Populate options based on your data -->
                            <option value="I" <?php echo ($js['eselon'] == 'I') ? 'selected' : ''; ?>>Eselon I</option>
                            <option value="II" <?php echo ($js['eselon'] == 'II') ? 'selected' : ''; ?>>Eselon II</option>
                            <option value="III" <?php echo ($js['eselon'] == 'III') ? 'selected' : ''; ?>>Eselon III</option>
                            <option value="IV" <?php echo ($js['eselon'] == 'IV') ? 'selected' : ''; ?>>Eselon IV</option>
                            <option value="V" <?php echo ($js['eselon'] == 'V') ? 'selected' : ''; ?>>disetarakan</option>
                        </select>
                        <?php echo form_error('eselon', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_selesai_js" class="col-form-label">Tanggal Selesai  *</label>
                        <input type="date" name="tanggal_selesai_js" class="form-control" value="<?php echo $js['tanggal_selesai_js']; ?>">
                        <?php echo form_error('tanggal_selesai_js', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="id_unit" class="col-form-label">Unit Organisasi  *</label>
                        <select name="id_unit" id="input-file" class="form-control">
                            <!-- Populate options based on your data -->
                            <?php foreach ($masterunit as $key) : ?>
                                <option value="<?php echo $key['id_unit'] ?>" <?php echo ($key['id_unit'] == $js['id_unit']) ? 'selected' : ''; ?>><?php echo $key['nama_unit'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <?php echo form_error('id_unit', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div>
                        <input type="hidden" name="id_pegawai" value="<?php echo $js['id_pegawai']; ?>">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-simpan mt-3">Simpan</button>
                    </div> 
                </form>
              </div>
            </div>
        </div>
    </div>
</div>