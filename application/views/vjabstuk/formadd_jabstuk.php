<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Jabatan Struktural</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1 class="text-center">Add Data Jabatan Struktural</h1>
            </div>
            <div class="card-body">
                <form id="jabatanForm" action="<?php echo base_url('Cpegawai/c_pegawai/insertjs/' . $peg[0]['id_pegawai'])?>" method="post">
                    <!-- Form fields here -->
                    <div class="form-group">
                        <label for="id_js" class="form-label">Nama Jabatan</label>
                        <select name="id_js" id="id_js" class="form-control">
                        <option value="" selected disabled>Pilih jabatan</option>
                            <?php foreach ($masterjs as $key) : ?>
                                <option value="<?php echo $key['id_js'] ?>"><?php echo $key['nama_js'] ?></option> 
                            <?php endforeach ?>
                        </select>
                        <?php echo form_error('id_js', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_mulai_js">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai_js" class="form-control">
                        <?php echo form_error('tanggal_mulai_js', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="tanggal_sk">Tanggal SK</label>
                        <input type="date" name="tanggal_sk" class="form-control">
                        <?php echo form_error('tanggal_sk', '<div class="text-danger">', '</div>'); ?>
                    </div> 
                    <div class="form-group">
                        <label for="eselon">Eselon</label>
                        <select name="eselon" class="form-control">
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
                        <label for="tanggal_selesai_js">Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai_js" class="form-control">
                        <?php echo form_error('tanggal_selesai_js', '<div class="text-danger">', '</div>'); ?>
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
                                <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$peg[0]['id_pegawai']}")?>" class="btn btn-secondary btn-block btn-sm">Back</a>
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

    <!-- Add Bootstrap JS (Optional, only needed if you use Bootstrap JavaScript features) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
