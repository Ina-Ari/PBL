<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Jabatan Fungsional</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1 class="text-center">Add Data Jabatan Fungsional</h1>
            </div>
            <div class="card-body">
                <form id="jabatanForm" action="<?php echo base_url('Cpegawai/c_pegawai/insertjafung/' . $peg[0]['id_pegawai'])?>" method="post" >
                    <!-- Form fields here -->
                    <div class="form-group">
                        <label for="id_jf" class="form-label">Nama Jabatan</label>
                        <select name="id_jf" id="id_jf" class="form-control">
                            <option value="" selected disabled>Pilih Jabatan</option>
                            <?php foreach ($masterjf as $key) : ?>
                                <option value="<?php echo $key['id_jf'] ?>"><?php echo $key['nama_jf'] ?></option> 
                            <?php endforeach ?>
                        </select>
                        <?php echo form_error('id_jf', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="no_sk">No. SK</label>
                        <input type="text" name="no_sk" id="no_sk" class="form-control">
                        <?php echo form_error('no_sk', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_sk">Tanggal SK</label>
                        <input type="date" name="tanggal_sk" id="tanggal_sk" class="form-control">
                        <?php echo form_error('tanggal_sk', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_mulai_jf">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai_jf" id="tanggal_mulai_jf" class="form-control">
                        <?php echo form_error('tanggal_mulai_jf', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="id_unit" class="form-label">Unit Organisasi</label>
                        <select name="id_unit" id="unit" class="form-control">
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
                    <div class="form-group text-right">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="<?php echo base_url('c_jabstuk/index')?>" class="btn btn-secondary btn-block btn-sm">Back</a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-block btn-sm">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>



    <!-- Add Bootstrap JS (Optional, only needed if you use Bootstrap JavaScript features) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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
</body>
</html>
