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
                        aria-controls="diklatStruktural" aria-selected="false">Diklat Struktural</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <!-- DATA UTAMA START -->
                <div class="tab-pane fade show active" id="dataUtama" role="tabpanel" aria-labelledby="dataUtama-tab">
                  <?php echo form_open_multipart('Cpegawai/c_pegawai/editDataUtama/'. $peg[0]['id_pegawai']) ; ?>
                  <?php $cek_error = form_error('nama_pegawai') || form_error('nip') || form_error('nidn') || form_error('jenis_kelamin') || form_error('no_kartupegawai') ?>
                  <div class="table-responsive">
                    <div class="mb-3">
                        <img src="<?php echo base_url($peg[0]['foto'])?>" width="150">
                    </div>
                    <div class="row">
                      <div class="col-md martop">
                        <div class="form-group">
                          <label for="foto" class="form-label">Foto Pegawai</label>
                          <input id="input-file" class="form-control" type="file" name="foto" value="<?php echo($peg[0]['foto'])?>">
                        </div>                      
                        <div class="form-group">
                          <label for="nama_pegawai" class="col-form-label">Nama Pegawai *</label>
                          <input type="text" class="form-control" name="nama_pegawai" value="<?php echo $cek_error ? set_value('nama_pegawai') : $peg[0]['nama_pegawai'] ?>">
                          <div style="color: red;"><?php echo form_error('nama_pegawai'); ?></div>
                        </div>
                        <div class="form-group">
                          <label for="nip" class="col-form-label">NIP *</label>
                          <input type="text" class="form-control" name="nip" value="<?php echo $cek_error ? set_value('nip') : $peg[0]['nip'] ?>">
                          <div style="color: red;"><?php echo form_error('nip'); ?></div>
                        </div>
                        <div class="form-group">
                          <label for="nidn" class="col-form-label">NIDN *</label>
                          <input type="text" class="form-control" name="nidn" value="<?php echo $cek_error ? set_value('nidn') : $peg[0]['nidn'] ?>">
                          <div style="color: red;"><?php echo form_error('nidn'); ?></div>
                        </div>
                        <div class="form-group">
                          <label for="gelar_depan" class="col-form-label">Gelar Depan</label>
                          <input type="text" class="form-control" name="gelar_depan" value="<?php echo $peg[0]['gelar_depan'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="gelar_belakang" class="col-form-label">Gelar Belakang</label>
                          <input type="text" class="form-control" name="gelar_belakang" value="<?php echo $peg[0]['gelar_belakang'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="tempat_lahir" class="col-form-label">Tempat Lahir</label>
                          <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $peg[0]['tempat_lahir'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                          <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $peg[0]['tanggal_lahir'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="agama" class="col-form-label">Agama</label>
                          <select id="input-file" class="form-control" name="agama">
                            <option value="">-- Pilih Agama --</option>
                            <?php foreach ($agama as $key) { ?>
                              <?php $cek = ($key['nama_agama'] == $peg[0]['agama'])? "selected" : ""; ?>
                              <option value="<?php echo $key['nama_agama'] ?>" <?php echo $cek ?>><?php echo $key['nama_agama'] ?></option> 
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin *</label>
                          <select id="input-file" class="form-control" name="jenis_kelamin">
                            <?php foreach ($gender as $key) { ?>
                              <?php $cek_value = set_value('jenis_kelamin') ? set_value('jenis_kelamin') : $con['jenis_kelamin'] ?>
                              <?php $cek = ($key['nama_gender'] == $cek_value)? "selected" : ""; ?>
                              <option value="<?php echo $key['nama_gender'] ?>" <?php echo $cek ?>><?php echo $key['nama_gender'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="no_telepon" class="col-form-label">No Telepon</label>
                          <input type="text" class="form-control" name="no_telepon" value="<?php echo $peg[0]['no_telepon'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="email" class="col-form-label">Email</label>
                          <input type="email" class="form-control" name="email" value="<?php echo $peg[0]['email'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="no_kartupegawai" class="col-form-label">No Kartu Pegawai *</label>
                          <input type="text" class="form-control" name="no_kartupegawai" value="<?php echo $cek_error ? set_value('no_kartupegawai') : $peg[0]['no_kartupegawai'] ?>">
                          <div style="color: red;"><?php echo form_error('no_kartupegawai'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="3"><?php echo $peg[0]['alamat'] ?></textarea>
                        </div>
                      </div>
                      <div class="col-md">
                        <div class="form-group">
                          <label for="no_npwp" class="col-form-label">No NPWP</label>
                          <input type="text" class="form-control" name="no_npwp" value="<?php echo $peg[0]['no_npwp'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="no_ktp" class="col-form-label">No KTP</label>
                          <input type="text" class="form-control" name="no_ktp" value="<?php echo $peg[0]['no_ktp'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="jenis_pegawai" class="col-form-label">Jenis Pegawai</label>
                          <input type="text" class="form-control" name="jenis_pegawai" value="<?php echo $peg[0]['jenis_pegawai'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="status_pegawai" class="col-form-label">Status Pegawai</label>
                          <input type="text" class="form-control" name="status_pegawai" value="<?php echo $peg[0]['status_pegawai'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="kedudukan_hukum" class="col-form-label">Kedudukan Hukum</label>
                          <input type="text" class="form-control" name="kedudukan_hukum" value="<?php echo $peg[0]['kedudukan_hukum'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="jenis_pns" class="col-form-label">Jenis PNS</label>
                          <input type="text" class="form-control" name="jenis_pns" value="<?php echo $peg[0]['jenis_pns'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="nosk_cpns" class="col-form-label">No SK CPNS</label>
                          <input type="text" class="form-control" name="nosk_cpns" value="<?php echo $peg[0]['nosk_cpns'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="no_kariskarsu" class="col-form-label">No Kariskarsu</label>
                          <input type="text" class="form-control" name="no_kariskarsu" value="<?php echo $peg[0]['no_kariskarsu'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="no_taspen" class="col-form-label">No Taspen</label>
                          <input type="text" class="form-control" name="no_taspen" value="<?php echo $peg[0]['no_taspen'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="no_serdos" class="col-form-label">No Serdos</label>
                          <input type="text" class="form-control" name="no_serdos" value="<?php echo $peg[0]['no_serdos'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="tahun_serdos" class="col-form-label">Tahun Serdos</label>
                          <input type="text" class="form-control" name="tahun_serdos" value="<?php echo $peg[0]['tahun_serdos'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="tanggal_tamatcpns" class="col-form-label">Tanggal Tamat CPNS</label>
                          <input type="date" class="form-control" name="tanggal_tamatcpns" value="<?php echo $peg[0]['tanggal_tamatcpns'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="masakerja_cpns" class="col-form-label">Masa Kerja CPNS</label>
                          <input type="text" class="form-control" name="masakerja_cpns" value="<?php echo $peg[0]['masakerja_cpns'] ?>">
                        </div>
                        <div>
                          <button type="submit" class="btn btn-simpan mt-3">Simpan</button>
                        </div>
                      </div>
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
                              <a class="btn btn-warning my-2" href="<?php echo base_url('Cpegawai/c_pegawai/editPendidikan/' . $pen['id_pendidikan']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
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
                  <a href="<?php echo base_url('Cpegawai/c_pegawai/tambahjafung/' . $peg[0]['id_pegawai']); ?>" class="waves-effect waves-dark"><span class="btn btn-primary mb-2"><i class="fa-solid fa-user-plus"></i> Tambah Data Jabatan Fungsional</span></a>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>Nama jabatan</th>
                              <th>No SK</th>
                              <th>Tanggal sk</th>
                              <th>Tanggal Mulai</th>
                              <th>Unit</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($jabfung as $jf) : ?>
                          <tr>
                            <td><?php echo $jf['nama_jf'] ?></td>
                            <td><?php echo $jf['no_sk'] ?></td>
                            <td><?php echo $jf['tanggal_sk'] ?></td>
                            <td><?php echo $jf['tanggal_mulai_jf'] ?></td>
                            <td><?php echo $jf['nama_unit'] ?></td>
                            <td>
                              <a class="btn btn-warning my-2" href="<?php echo base_url('Cpegawai/c_pegawai/editjafung/' . $jf['id_jabatan']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                              <a class="btn btn-danger" href="<?php echo base_url('Cpegawai/c_pegawai/hapusJabfung/' . $jf['id_pegawai'] . '/' . $jf['id_jabatan']); ?>" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a> 
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- JABATAN FUNGSIONAL END -->
                <!-- JABATAN STRUKTURAL START -->
                <div class="tab-pane fade" id="jabatanStruktural" role="tabpanel" aria-labelledby="jabatanStruktural-tab">
                  <a href="<?php echo base_url('Cpegawai/c_pegawai/tambahjabstuk/' . $peg[0]['id_pegawai']); ?>" class="waves-effect waves-dark"><span class="btn btn-primary mb-2"><i class="fa-solid fa-user-plus"></i> Tambah Data Jabatan Struktual</span></a>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>Nama Jabatan</th>
                              <th>Tanggal Mulai</th>
                              <th>Tanggal SK</th>
                              <th>Eselon</th>
                              <th>Tanggal selesai</th>
                              <th>Unit</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($jabstuk as $js) : ?>
                          <tr>
                            <td><?php echo $js['nama_js'] ?></td>
                            <td><?php echo $js['tanggal_mulai_js'] ?></td>
                            <td><?php echo $js['tanggal_sk'] ?></td>
                            <td><?php echo $js['eselon'] ?></td>
                            <td><?php echo $js['tanggal_selesai_js'] ?></td>
                            <td><?php echo $js['nama_unit'] ?></td>
                            <td>
                                <a href="<?php echo base_url("Cpegawai/c_pegawai/editjabstuk/{$js['id_jabatan']}")?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?php echo base_url("Cpegawai/c_pegawai/hapusJabstuk/{$peg[0]['id_pegawai']}/{$js['id_jabatan']}")?>" class="btn btn-danger btn-sm" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- JABATAN STRUKTURAL END -->
                <!-- GOLONGAN START -->
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
                            <a class="btn btn-warning my-2" href="<?php echo base_url('Cpegawai/c_pegawai/editGolongan/' . $gol['id_golongan']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
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
                            <a class="btn btn-warning" href="<?php echo base_url('Cpegawai/c_pegawai/editDikfung/' . $dikfung['id_diklat']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
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
                            <a class="btn btn-warning" href="<?php echo base_url('Cpegawai/c_pegawai/editDikstruk/' . $dikstruk['id_diklat']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
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