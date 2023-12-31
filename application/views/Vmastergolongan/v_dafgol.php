<title>Daftar Golongan</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Daftar Golongan</h4>
                <a href="<?php echo base_url('Cmastergolongan/c_dafgol/tambahDafgol'); ?>"><span class="btn btn-primary mb-2"><i class="fa-solid fa-user-plus"></i> Tambah Data Golongan</span></a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Golongan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <?php 
                          $no = 1;
                          foreach ($isi->result_array() as $key) : 
                        ?>
                        <tbody>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $key['jenis_golongan'] ?></td>
                            <td>
                              <a class="btn btn-warning" href="<?php echo base_url('Cmastergolongan/c_dafgol/ubahDafgol/'.$key['id_jenis_golongan']) ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                              <a class="btn btn-danger" href="<?php echo base_url('Cmastergolongan/c_dafgol/hapusDafgol/'.$key['id_jenis_golongan']) ?>" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a> 
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