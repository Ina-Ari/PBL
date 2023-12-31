<title>Data Dosen</title>
<div class="container-fluid pt-3 px-3">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url('Cdafdosen/c_dafdosen'); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-4"></i> Kembali</span>
              </a>
                <ul class="d-flex justify-content-around nav nav-tabs mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                      <button class="button-font nav-link active" id="pills-dataUtama-tab" data-bs-toggle="pill"
                          data-bs-target="#dataUtama" type="button" role="tab" aria-controls="dataUtama"
                          aria-selected="true">Data Utama</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="button-font nav-link" id="pills-riwayatPendidikan-tab" data-bs-toggle="pill" data-bs-target="#riwayatPendidikan" type="button" role="tab" aria-controls="
                      riwayatPendidikan" aria-selected="false">Riwayat Pendidikan</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="button-font nav-link" id="pills-jabatanFungsional-tab" data-bs-toggle="pill"
                          data-bs-target="#jabatanFungsional" type="button" role="tab"
                          aria-controls="jabatanFungsional" aria-selected="false">Jabatan Fungsional</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="button-font nav-link" id="pills-jabatanStruktural-tab" data-bs-toggle="pill"
                          data-bs-target="#jabatanStruktural" type="button" role="tab"
                          aria-controls="jabatanStruktural" aria-selected="false">Jabatan Struktural</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="button-font nav-link" id="pills-golongan-tab" data-bs-toggle="pill"
                          data-bs-target="#golongan" type="button" role="tab"
                          aria-controls="golongan" aria-selected="false">Golongan</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="button-font nav-link" id="pills-diklatFungsional-tab" data-bs-toggle="pill"
                          data-bs-target="#diklatFungsional" type="button" role="tab"
                          aria-controls="diklatFungsional" aria-selected="false">Diklat Fungsional</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="button-font nav-link" id="pills-diklatStruktural-tab" data-bs-toggle="pill"
                          data-bs-target="#diklatStruktural" type="button" role="tab"
                          aria-controls="diklatStruktural" aria-selected="false">Diklat Struktual</button>
                  </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <!-- DATA UTAMA START -->
                <div class="tab-pane fade show active" id="dataUtama" role="tabpanel" aria-labelledby="dataUtama-tab">
                  <?php echo form_open_multipart('Cpegawai/c_pegawai/editDataUtama/'. $peg[0]['id_pegawai']) ; ?>
                  <div class="table-responsive">
                    <div class="mb-3">
                      <img src="<?php echo base_url($peg[0]['foto'])?>" width="150">
                    </div>
                    <div class="mb-3">
                      <label for="foto" class="form-label">Foto Pegawai</label>
                      <input id="input-file" class="form-control" type="file" name="foto" value="<?php echo($peg[0]['foto'])?>">
                    </div>                      
                    <div class="form-group">
                      <label for="nama_pegawai" class="col-form-label">Nama Pegawai</label>
                      <input type="text" class="form-control" name="nama_pegawai" value="<?php echo $peg[0]['nama_pegawai'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="nip" class="col-form-label">NIP</label>
                      <input type="text" class="form-control" name="nip" value="<?php echo $peg[0]['nip'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="nidn" class="col-form-label">NIDN</label>
                      <input type="text" class="form-control" name="nidn" value="<?php echo $peg[0]['nidn'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                      <select id="input-file" class="form-control" name="jenis_kelamin">
                        <?php foreach ($gender as $key) { ?>
                          <?php $cek = ($key['nama_gender'] == $peg[0]['jenis_kelamin'])? "selected" : ""; ?>
                          <option value="<?php echo $key['nama_gender'] ?>" <?php echo $cek ?>><?php echo $key['nama_gender'] ?></option> 
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="no_kartupegawai" class="col-form-label">No Kartu Pegawai</label>
                        <input type="text" class="form-control" name="no_kartupegawai" value="<?php echo $peg[0]['no_kartupegawai'] ?>">
                    </div>
                    <div>
                      <button type="submit" class="btn btn-simpan mt-3" onclick="return confirm_simpan()">Simpan</button>
                    </div>
                  </div>
                    
                  <?php form_close(); ?>
                </div>
                <!-- DATA UTAMA END -->
                <!-- PENDIDIKAN START -->
                <div class="tab-pane fade" id="riwayatPendidikan" role="tabpanel" aria-labelledby="riwayatPendidikan-tab">
                    <a href="<?php echo base_url('Cpegawai/c_pegawai/tambahPendidikan/' . $peg[0]['id_pegawai']); ?>" class="waves-effect waves-dark"><span class="btn btn-primary mb-2"><i class="fa-solid fa-user-plus"></i> Tambah Data Pendidikan</span>
                    </a>
                    
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Tingkat Pendidikan</th>
                            <th>Nama Sekolah</th>
                            <th>Tanggal Lulus</th>
                            <th>No Ijazah</th>
                            <th>Jurusan</th>
                            <th>Gelar Depan</th>
                            <th>Gelar Belakang</th>
                            <th>File Ijazah</th>
                            <th>Status Validasi</th>
                            <th>Aksi</th>
                        </thead>
                        <?php 
                          $no = 1;
                          foreach ($pendidikan as $pen) :
                        ?>
                        <tbody>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $pen['tingkat_pendidikan'] ?></td>
                            <td><?php echo $pen['nama_sekolah'] ?></td>
                            <td><?php echo date("d-m-Y", strtotime($pen['tanggal_lulus'])); ?></td>
                            <td><?php echo $pen['no_ijazah'] ?></td>
                            <td><?php echo $pen['jurusan'] ?></td>
                            <td><?php echo $pen['gelar_depan'] ?></td>
                            <td><?php echo $pen['gelar_belakang'] ?></td>
                            <td><a href="<?php echo base_url($pen['file_ijazah'])?>" target="_blank"><img src="<?php echo base_url($pen['file_ijazah'])?>" width="130"></a></td>
                            <td><?php echo $pen['status_validasi'] ?></td>                                             
                            <td>
                              <a class="btn btn-warning my-2" href="<?php echo base_url('Cpegawai/c_pegawai/editPendidikan/' . $pen['id_pegawai'] . '/' . $pen['id_pendidikan']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                              <a class="btn btn-danger" href="<?php echo base_url('Cpegawai/c_pegawai/hapusPendidikan/' . $pen['id_pegawai'] . '/' . $pen['id_pendidikan']); ?>" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a> 
                            </td>
                          </tr>
                        </tbody>
                        <?php endforeach ?>
                      </table>
                    </div>
                </div>
                <!-- PENDIDIKAN END -->
                <!-- JABATAN FUNGSIONAL START -->
                <div class="tab-pane fade" id="jabatanFungsional" role="tabpanel" aria-labelledby="jabatanFungsional-tab">
                  jabatan fungsional
                </div>

                <div class="tab-pane fade" id="jabatanStruktural" role="tabpanel" aria-labelledby="jabatanStruktural-tab">
                  jabatan struktural
                </div>

                <div class="tab-pane fade" id="golongan" role="tabpanel" aria-labelledby="golongan-tab">
                  <a href="<?php echo base_url('Cpegawai/c_pegawai/tambahGolongan/' . $peg[0]['id_pegawai']); ?>" class="waves-effect waves-dark"><span class="btn btn-primary sidebar-edit mb-2"><i class="fa-solid fa-user-plus"></i> Tambah Data Golongan</span>
                  </a>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Jenis Golongan</th>
                          <th>Lama Tahun</th>
                          <th>Lama Bulan</th>
                          <th>Tanggal Mulai Tugas</th>
                          <th>Tanggal SK</th>
                          <th>Nomor SK</th>
                          <th>Tanggal BKN</th>
                          <th>Nomor BKN</th>
                          <th>Jenis KP</th>
                          <th>File SK</th>
                          <th>Status Validasi</th>
                          <th>Aksi</th>
                      </thead>
                      <?php 
                        $no = 1;
                        foreach ($golongan as $gol) :
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $gol['jenis_golongan'] ?></td>
                          <td><?php echo $gol['lama_tahun'] ?></td>
                          <td><?php echo $gol['lama_bulan'] ?></td>
                          <td><?php echo date("d-m-Y", strtotime($gol['tmt_golongan'])); ?></td>
                          <td><?php echo date("d-m-Y", strtotime($gol['tanggal_sk'])); ?></td>
                          <td><?php echo $gol['nomor_sk'] ?></td>
                          <td><?php echo date("d-m-Y", strtotime($gol['tanggal_bkn'])); ?></td>
                          <td><?php echo $gol['nomor_bkn'] ?></td>
                          <td><?php echo $gol['jenis_kp'] ?></td>
                          <td><a href="<?php echo base_url($gol['file_sk'])?>" target="_blank"><img src="<?php echo base_url($gol['file_sk'])?>" width="130"></a></td>
                          <td><?php echo $gol['status_validasi'] ?></td>
                          <td>
                            <a class="btn btn-warning my-2" href="<?php echo base_url('Cpegawai/c_pegawai/editGolongan/' . $gol['id_pegawai'] . '/' . $gol['id_golongan']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-danger" href="<?php echo base_url('Cpegawai/c_pegawai/hapusGolongan/' . $gol['id_pegawai'] . '/' . $gol['id_golongan']); ?>" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a> 
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach ?>
                    </table>
                  </div>
                </div>
                <!-- GOLONGAN END -->
                <!-- DIKLAT FUNGSIONAL START -->
                <div class="tab-pane fade" id="diklatFungsional" role="tabpanel" aria-labelledby="diklatFungsional-tab">
                  <a href="<?php echo base_url('Cpegawai/c_pegawai/tambahDikfung/' . $peg[0]['id_pegawai']); ?>" class="waves-effect waves-dark"><span class="btn btn-primary sidebar-edit mb-2"><i class="fa-solid fa-user-plus"></i> Tambah Data Diklat Fungsional</span>
                  </a>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Diklat</th>
                          <th>Tipe Diklat</th>
                          <th>Jenis Diklat</th>
                          <th>Tanggal Diklat</th>
                          <th>No Sertifikat</th>
                          <th>Penyelenggara</th>
                          <th>Instansi</th>
                          <th>Aksi</th>
                      </thead>
                      <?php 
                        $no = 1;
                        foreach ($diklatFungsional as $dikfung) :
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $dikfung['nama_diklat'] ?></td>
                          <td><?php echo $dikfung['tipe_diklat'] ?></td>
                          <td><?php echo $dikfung['jenis_diklat'] ?></td>
                          <td><?php echo date("d-m-Y", strtotime($dikfung['tanggal_diklat'])); ?></td>
                          <td><?php echo $dikfung['no_sertifikat'] ?></td>
                          <td><?php echo $dikfung['penyelenggara'] ?></td>
                          <td><?php echo $dikfung['instansi'] ?></td>
                          <td>
                            <a class="btn btn-warning" href="<?php echo base_url('Cpegawai/c_pegawai/editDikfung/' . $dikfung['id_pegawai'] . '/' . $dikfung['id_diklat']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-danger" href="<?php echo base_url('Cpegawai/c_pegawai/hapusDikfung/' . $dikfung['id_pegawai'] . '/' . $dikfung['id_diklat']); ?>" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach ?>
                    </table>
                  </div>
                </div>
                <!-- DIKLAT FUNGSIONA END -->
                <!-- DIKLAT STRUKTUAL START -->
                <div class="tab-pane fade" id="diklatStruktural" role="tabpanel" aria-labelledby="diklatStruktural-tab">
                  <a href="<?php echo base_url('Cpegawai/c_pegawai/tambahDikstruk/' . $peg[0]['id_pegawai']); ?>" class="waves-effect waves-dark"><span class="btn btn-primary sidebar-edit mb-2"><i class="fa-solid fa-user-plus"></i> Tambah Data Diklat Struktural</span>
                  </a>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Diklat</th>
                          <th>Lokasi Diklat</th>
                          <th>Tanggal Mulai</th>
                          <th>Tanggal Selesai</th>
                          <th>Berkas Validasi</th>
                          <th>Status Validasi</th>
                          <th>Aksi</th>
                      </thead>
                      <?php 
                        $no = 1;
                        foreach ($diklatStruktural as $dikstruk) :
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $dikstruk['nama_diklat'] ?></td>
                          <td><?php echo $dikstruk['lokasi_diklat'] ?></td>
                          <td><?php echo date("d-m-Y", strtotime($dikstruk['tanggal_mulai'])); ?></td>
                          <td><?php echo date("d-m-Y", strtotime($dikstruk['tanggal_selesai'])); ?></td>
                          <td><a href="<?php echo base_url($dikstruk['berkas_validasi'])?>" target="_blank"><img src="<?php echo base_url($dikstruk['berkas_validasi'])?>" width="130"></a></td>
                          <td><?php echo $dikstruk['status_validasi'] ?></td>
                          <td>
                            <a class="btn btn-warning" href="<?php echo base_url('Cpegawai/c_pegawai/editDikstruk/' . $dikstruk['id_pegawai'] . '/' . $dikstruk['id_diklat']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-danger" href="<?php echo base_url('Cpegawai/c_pegawai/hapusDikstruk/' . $dikstruk['id_pegawai'] . '/' . $dikstruk['id_diklat']); ?>" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach ?>
                    </table>
                  </div>
                </div>
                <!-- DIKLAT STRUKTUAL END -->
              </div>
            </div>
        </div>
    </div>
</div>