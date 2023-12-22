<title>Daftar Dosen</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Daftar Dosen</h3>
                <a href="<?php echo base_url('Cdafdosen/c_dafdosen/tambahDosen'); ?>"><span class="btn btn-primary mb-2"><i class="fa-solid fa-user-plus"></i> Tambah Data Dosen</span></a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Foto Dosen</th>
                            <th>NIP</th>
                            <th>Nama</th>
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
                            <td><img src="<?php echo base_url($key['foto'])?>" width="100"></td>
                            <td><?php echo $key['nip'] ?></td>
                            <td><?php echo $key['nama_pegawai'] ?></td>
                            <td>
                              <a class="btn btn-warning" href="<?php echo base_url('Cdafdosen/c_dafdosen/editPegawai/'.$key['id_pegawai']) ?>"><i class="fa-solid fa-file-pen"></i></a>
                              <a class="btn btn-danger" href="<?php echo base_url('Cdafdosen/c_dafdosen/hapusPegawai/'.$key['id_pegawai']) ?>" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a> 
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
