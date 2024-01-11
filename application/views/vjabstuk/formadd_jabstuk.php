<title>Tambah Data Jabatan Struktural</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$peg[0]['id_pegawai']}"); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-8">
                <form id="jabatanForm" action="<?php echo base_url('Cpegawai/c_pegawai/insertjs/' . $peg[0]['id_pegawai'])?>" method="post">
                    <!-- Form fields here -->
                    <div class="form-group">
                        <label for="id_js" class="col-form-label">Nama Jabatan *</label>
                        <select name="id_js" id="input-file" class="form-control">
                        <option value="">Pilih jabatan</option>
                            <?php foreach ($masterjs as $key) : ?>
                                <option value="<?php echo $key['id_js'] ?>"><?php echo $key['nama_js'] ?></option> 
                            <?php endforeach ?>
                        </select>
                        <?php echo form_error('id_js', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_mulai_js" class="col-form-label">Tanggal Mulai  *</label>
                        <input type="date" name="tanggal_mulai_js" class="form-control">
                        <?php echo form_error('tanggal_mulai_js', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_sk" class="col-form-label">Tanggal SK  *</label>
                        <input type="date" name="tanggal_sk" class="form-control">
                        <?php echo form_error('tanggal_sk', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="eselon" class="col-form-label">Eselon  *</label>
                        <select name="eselon" class="form-control" id="input-file">
                            <option value="">Pilih eselon</option>
                            <option value="I">Eselon I</option>
                            <option value="II">Eselon II</option>
                            <option value="III">Eselon III</option>
                            <option value="IV">Eselon IV</option>
                            <option value="V">Eselon V</option>
                            <option value="VI">disetarakan</option>
                        </select>
                        <?php echo form_error('eselon', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_selesai_js" class="col-form-label">Tanggal Selesai  *</label>
                        <input type="date" name="tanggal_selesai_js" class="form-control">
                        <?php echo form_error('tanggal_selesai_js', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="id_unit" class="col-form-label">Unit Organisasi  *</label>
                        <select name="id_unit" id="input-file" class="form-control">
                        <option value="">Pilih Unit</option>
                            <?php foreach ($masterunit as $key) : ?>
                                <option value="<?php echo $key['id_unit']?>"><?php echo $key['nama_unit'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <?php echo form_error('id_unit', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div>
                        <input type="hidden" name="id_pegawai" value="<?php echo $peg[0]['id_pegawai'] ?>">
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