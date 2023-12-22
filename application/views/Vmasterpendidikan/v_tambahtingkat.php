<title>Tambah Golongan</title>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
              <a href="<?php echo base_url('Cmasterpendidikan/c_tingpendidikan'); ?>" class="btn-back">
                <span><i class="fa-solid fa-arrow-left-long mb-3"></i> Kembali</span>
              </a>
              <div class="card-block col-6">
                <form method="post" action="insertTingPen">
                  <div class="form-group">
                    <label for="tingkat_pendidikan" class="col-form-label">Tingkat Pendidikan</label>
                    <input type="text" class="form-control" name="tingkat_pendidikan">
                  </div>
                  <div>
                   <button type="submit" class="btn btn-simpan mt-3">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>