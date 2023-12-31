<title>Tingkat Pendidikan</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Daftar Golongan</h4>
                <a href="<?php echo base_url('Cmasterpendidikan/c_tingpendidikan/tambahTingpen'); ?>"><span class="btn btn-primary mb-2"><i class="fa-solid fa-user-plus"></i> Tambah Data Pendidikan</span></a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Tingkat Pendidikan</th>
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
                            <td><?php echo $key['tingkat_pendidikan'] ?></td>
                            <td>
                              <a class="btn btn-warning" href="<?php echo base_url('Cmasterpendidikan/c_tingpendidikan/ubahTingPen/'.$key['id_tingpen']) ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                              <a class="btn btn-danger" href="<?php echo base_url('Cmasterpendidikan/c_tingpendidikan/hapusTingPen/'.$key['id_tingpen']) ?>" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a> 
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