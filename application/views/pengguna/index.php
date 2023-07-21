<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="baseurl" content="<?= base_url(); ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

    <title>Pengguna</title>
  </head>
  <body>

    <div class="row mt-3">
      <div class="col-11 bg-white text-center m-auto rounded-lg py-3">
        <h1>APLIKASI UJIAN</h1>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-11 bg-skyblue pl-5 py-2 m-auto rounded-lg">
        <a href="javascript:void(0);" class="px-3 text-white">Pengguna</a>
        <a href="<?= base_url(); ?>logout" class="px-3 text-white">Logout</a>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-11 pl-5 py-2 m-auto rounded-lg text-center bg-white pt-3">
        <h6 class="d-inline mr-3">DATA PENGGUNA</h6>
        <button class="btn btn-sm bg-skyblue text-white d-inline" onClick="showForm()">TAMBAH DATA</button>
      
        <table class="table table-bordered col-8 mx-auto mt-3">
          <thead>
            <tr class="bg-skyblue" align="right">
              <th colspan="5">
                <input type="text" id="keyword" class="form-control w-25" placeholder="Pencarian.." onkeyup="readData()">
              </th>
            </tr>
            <tr class="bg-skyblue text-white">
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">No HP</th>
              <th scope="col">OPSI</th>
            </tr>
          </thead>
          <tbody id="tbody">
          </tbody>
        </table>
      </div>
    </div>

    <div id="showForm">
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>assets/js/script.js"></script>

  </body>
</html>