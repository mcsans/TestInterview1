<form action="<?= base_url() ?>pengguna/update/<?= $pengguna['id_pegawai']; ?>" method="POST" class="form-edit">
  <div class="modal fade" id="modal-edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">EDIT DATA PENGGUNA</h5>
          <button type="button" id="modal-close" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label for="nama_pegawai" class="col-sm-4 col-form-label">Nama Pegawai</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Masukkan Nama Pegawai" value="<?= set_value('nama_pegawai', $pengguna['nama_pegawai']) ?>">
              <small class="form-text text-danger"><i class="mb-0"><?= form_error('nama_pegawai') ?></i></small>
            </div>
          </div>
          <div class="form-group row">
            <label for="username" class="col-sm-4 col-form-label">Username</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" value="<?= set_value('username', $pengguna['username']) ?>">
              <small class="form-text text-danger"><i class="mb-0"><?= form_error('username') ?></i></small>
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" value="<?= $pengguna['password'] ?>">
              <small class="form-text text-danger"><i class="mb-0"><?= form_error('password') ?></i></small>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="<?= set_value('email', $pengguna['email']) ?>">
              <small class="form-text text-danger"><i class="mb-0"><?= form_error('email') ?></i></small>
            </div>
          </div>
          <div class="form-group row">
            <label for="nohp" class="col-sm-4 col-form-label">No Hp</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Masukkan No HP" value="<?= set_value('nohp', $pengguna['nohp']) ?>">
              <small class="form-text text-danger"><i class="mb-0"><?= form_error('nohp') ?></i></small>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button> -->
          <button type="submit" class="btn bg-skyblue text-white w-100">SIMPAN</button>
        </div>
      </div>
    </div>
  </div>
</form>