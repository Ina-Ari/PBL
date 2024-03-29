<title>Tambah Data Jabatan Struktural</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$peg[0]['id_pegawai']}"); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-8">
                <form id="jabatanForm" action="<?php echo base_url('Cpegawai/c_pegawai/insertjafung/' . $peg[0]['id_pegawai'])?>" method="post" >
                    <!-- Form fields here -->
                    <div class="form-group">
                        <label for="id_jf" class="col-form-label">Nama Jabatan *</label>
                        <select name="id_jf" id="input-file" class="form-control">
                            <option value="" selected disabled>Pilih Jabatan</option>
                            <?php foreach ($masterjf as $key) : ?>
                                <option value="<?php echo $key['id_jf'] ?>"><?php echo $key['nama_jf'] ?></option> 
                            <?php endforeach ?>
                        </select>
                        <?php echo form_error('id_jf', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="no_sk" class="col-form-label">No. SK *</label>
                        <input type="text" name="no_sk" id="no_sk" class="form-control">
                        <?php echo form_error('no_sk', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_sk" class="col-form-label">Tanggal SK  *</label>
                        <input type="date" name="tanggal_sk" id="tanggal_sk" class="form-control">
                        <?php echo form_error('tanggal_sk', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_mulai_jf" class="col-form-label">Tanggal Mulai  *</label>
                        <input type="date" name="tanggal_mulai_jf" id="tanggal_mulai_jf" class="form-control">
                        <?php echo form_error('tanggal_mulai_jf', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="id_unit" class="col-form-label">Unit Organisasi  *</label>
                        <select name="id_unit" id="input-file" class="form-control">
                            <option value="" selected disabled>Pilih Unit</option>
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
<!--<script>
    function validateForm() {
        // Reset previous error messages
        resetErrors();

        var id_jf = document.getElementById('id_jf').value;
        var no_sk = document.getElementById('no_sk').value;
        var tanggal_sk = document.getElementById('tanggal_sk').value;
        var tanggal_mulai_jf = document.getElementById('tanggal_mulai_jf').value;
        var id_unit = document.getElementById('unit').value;

        var isValid = true;

        if (id_jf === "") {
            displayError('id_jf', 'Please select a Jabatan.');
            isValid = false;
        }

        if (id_unit === "") {
            displayError('id_unit', 'Please select a Unit.');
            isValid = false;
        }

        if (no_sk === "") {
            displayError('no_sk', 'Please enter the No. SK.');
            isValid = false;
        }

        if (tanggal_sk === "") {
            displayError('tanggal_sk', 'Please select the Tanggal SK.');
            isValid = false;
        }

        if (tanggal_mulai_jf === "") {
            displayError('tanggal_mulai_jf', 'Please select the Tanggal Mulai.');
            isValid = false;
        }

        // Additional validation logic can be added here if needed

        return isValid;
    }

    function resetErrors() {
        var errorElements = document.querySelectorAll('.text-danger');
        errorElements.forEach(function(element) {
            element.innerHTML = '';
        });
    }

    function displayError(field, message) {
        var errorElement = document.getElementById(field + '_error');
        if (errorElement) {
            errorElement.innerHTML = message;
        }
    }
</script>