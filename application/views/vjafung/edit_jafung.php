<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jabatan Fungsional</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1 class="text-center">Edit Data Jabatan Fungsional</h1>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart('Cpegawai/c_pegawai/updateDataJafung/' . $js['id_jabatan'] . '/' .$js['id_pegawai']) ?>
                    <!-- Form fields here -->
                    <div class="form-group">
                        <label for="id_jf" class="form-label">Nama Jabatan</label>
                        <select name="id_jf" id="nama_jabatan" class="form-control">
                            <option selected disabled>Pilih Jabatan</option>
                            <?php foreach ($masterjf as $key) : ?>
                                <option value="<?php echo $key['id_jf'] ?>" <?php echo ($key['id_jf'] == $js['id_jf']) ? 'selected' : ''; ?>><?php echo $key['nama_jf'] ?></option> 
                            <?php endforeach ?>
                        </select>
                        <?php echo form_error('id_jf', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="no_sk">Nomor SK</label>
                        <input type="text" name="no_sk" class="form-control" value="<?php echo $js['no_sk']; ?>">
                        <?php echo form_error('no_sk', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_sk">Tanggal SK</label>
                        <input type="date" name="tanggal_sk" class="form-control" value="<?php echo $js['tanggal_sk']; ?>">
                        <?php echo form_error('tanggal_sk', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_mulai_jf">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai_jf" class="form-control" value="<?php echo $js['tanggal_mulai_jf']; ?>">
                        <?php echo form_error('tanggal_mulai_jf', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="id_unit" class="form-label">Unit Organisasi</label>
                        <select name="id_unit" id="unit" class="form-control">
                            <option selected disabled>Pilih Unit</option>
                            <?php foreach ($masterunit as $key) : ?>
                                <option value="<?php echo $key['id_unit']?>" <?php echo ($key['id_unit'] == $js['id_unit']) ? 'selected' : ''; ?>><?php echo $key['nama_unit'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <?php echo form_error('id_unit', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div>
                        <input type="hidden" name="id_pegawai" value="<?php echo $js['id_pegawai']; ?>">
                    </div>
                    <div class="form-group text-right">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="<?php echo base_url('c_jabstuk/index')?>" class="btn btn-secondary btn-block btn-sm">Back</a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-block btn-sm">Update</button>
                            </div>
                        </div>
                    </div>
                <?php form_close() ?>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS (Optional, only needed if you use Bootstrap JavaScript features) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
