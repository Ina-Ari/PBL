<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jabatan Struktural</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1 class="text-center">Edit Data Jabatan Struktural</h1>
            </div>
            <div class="card-body">
                <form id="editJabstukForm" action="<?php echo base_url('Cpegawai/c_pegawai/updateDataJabstuk/' . $js['id_jabatan'] . '/' .$js['id_pegawai']) ?>" method="post">
                    <!-- Form fields here -->
                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                    <div class="form-group">
                        <label for="id_js" class="form-label">Nama Jabatan</label>
                        <select name="id_js" id="nama_jabatan" class="form-control">
                            <!-- Populate options based on your data -->
                            <?php foreach ($masterjs as $key) : ?>
                                <option value="<?php echo $key['id_js'] ?>" <?php echo ($key['id_js'] == $js['id_js']) ? 'selected' : ''; ?>><?php echo $key['nama_js'] ?></option> 
                            <?php endforeach ?>
                        </select>
                        <?php echo form_error('id_js', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_mulai_js">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai_js" class="form-control" value="<?php echo $js['tanggal_mulai_js']; ?>">
                        <?php echo form_error('tanggal_mulai_js', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_sk">Tanggal SK</label>
                        <input type="date" name="tanggal_sk" class="form-control" value="<?php echo $js['tanggal_sk']; ?>">
                        <?php echo form_error('tanggal_sk', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="eselon">Eselon</label>
                        <select name="eselon" class="form-control">
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
                        <label for="tanggal_selesai_js">Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai_js" class="form-control" value="<?php echo $js['tanggal_selesai_js']; ?>">
                        <?php echo form_error('tanggal_selesai_js', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="id_unit" class="form-label">Unit Organisasi</label>
                        <select name="id_unit" id="unit" class="form-control">
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
                    <div class="form-group text-right">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$js['id_pegawai']}") ?>" class="btn btn-secondary btn-block btn-sm">Back</a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-block btn-sm">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS (Optional, only needed if you use Bootstrap JavaScript features) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
