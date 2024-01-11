<title>Unit Kerja</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Daftar Unit Kerja</h4>
                <a href="<?php echo base_url('Cmasterunit/c_masterunit/tambahUnit'); ?>"><span class="btn btn-primary mb-2"><i class="fa-solid fa-user-plus"></i> Tambah Unit Kerja</span></a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th class="col-3">No</th>
                            <th class="col-6">Nama Unit</th>
                            <th class="col-3">Aksi</th>
                          </tr>
                        </thead>
                        <?php 
                          $no = 1;
                          foreach ($isi->result_array() as $key) : 
                        ?>
                        <tbody>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $key['nama_unit'] ?></td>
                            <td>
                              <a class="btn btn-warning" href="<?php echo base_url('Cmasterunit/c_masterunit/ubahUnit/'.$key['id_unit']) ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                              <a class="btn btn-danger" href="<?php echo base_url('Cmasterunit/c_masterunit/hapusUnit/'.$key['id_unit']) ?>" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a> 
                            </td>
                          </tr>
                        </tbody>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>