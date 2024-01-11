<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Dosen</title>
<div class="container-fluid pt-4 px-4">
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Daftar Dosen</h3>
                <a href="<?php echo base_url('Cdafdosen/c_dafdosen/tambahDosen'); ?>"><span class="btn btn-primary mb-2"><i class="fa-solid fa-user-plus"></i> Tambah Data Dosen</span></a>
                <div class="row">
                  <div class="col-md-6">
                    <form action="<?php echo base_url('Cdafdosen/c_dafdosen/pencarian'); ?>" method="post">
                     

                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="cari nama atau nomor pegawai" name="keyword" autocomplete="off" autofocus>
                        <input class="btn btn-primary" type="submit" name="submit">
                      </div>

                      <div>
                        <a class="btn btn-warning" href="<?php echo base_url('Cdafdosen/c_dafdosen/print'); ?>"><i class="fa fa-print"></i>print</a>
                        <select class="btn btn-primary dropdown-toggle" name="filter" id="filter">
                        <option value="all">All</option>
                        <option value="Jurusan Pariwisata">Jurusan Pariwisata</option>
                        <option value="Jurusan Akuntansi">Jurusan Akuntansi</option>
                        <option value="Jurusan Administrasi Bisnis">Jurusan Administrasi Bisnis</option>
                        <option value="Jurusan Teknik Elektro">Jurusan Teknik Elektro</option>
                        <option value="Jurusan Teknik Sipil">Jurusan Teknik Sipil</option>
                        <option value=" Jurusan Teknik Mesin">  Jurusan Teknik Mesin</option>
                        </select>
                      </div>
                       
                    </form>
                  </div>
                </div>
                <div class="table-responsive">
                    <table class="table" id="daftarDosenTable">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Foto Dosen</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>pendidikan</th>
                            <th>fungsional</th>
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
                            <td><?php echo $key['tingkat_pendidikan'] ?></td>
                            <td><?php echo $key['nama_unit'] ?></td>
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
<script>
document.addEventListener('DOMContentLoaded', function () {
  // Ambil elemen dropdown
  var filterDropdown = document.getElementById('filter');

  // Ambil elemen tabel
  var table = document.getElementById('daftarDosenTable');

  // Tambahkan event listener untuk perubahan dropdown
  filterDropdown.addEventListener('change', function () {
    var selectedValue = filterDropdown.value;

    // Ambil semua baris data dari tabel kecuali baris header
    var rows = table.querySelectorAll('tbody tr');

    // Sembunyikan semua baris terlebih dahulu
    rows.forEach(function (row) {
      row.style.display = 'none';
    });

    // Hapus pesan "tidak ada data yang sesuai" jika ada
    var noDataRow = table.querySelector('.no-data-row');
    if (noDataRow) {
      noDataRow.parentNode.removeChild(noDataRow);
    }

    // Tampilkan baris yang sesuai dengan fungsional yang dipilih
    if (selectedValue === 'all') {
      // Jika memilih 'All', tampilkan semua baris
      rows.forEach(function (row) {
        row.style.display = '';
      });
    } else {
      // Jika memilih fungsional tertentu, tampilkan hanya yang sesuai
      var selectedRows = Array.from(rows).filter(function (row) {
        return row.querySelector('td:nth-child(6)').innerText === selectedValue;
      });

      selectedRows.forEach(function (row) {
        row.style.display = '';
      });
    }
  });
});

</script>
</body>
</html>
