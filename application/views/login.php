<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <title>Login</title>
  </head>
  <body class="bg-lightblue">

    <div class="row mt-5">
      <div class="col-12 text-center mb-4">
        <h1>Login</h1>
      </div>

      <div class="card col-10 col-md-3 m-auto">
        <div class="card-body">
          <?php if( $this->session->flashdata('message') ) : ?>
            <div class="alert alert-danger alert-dismissible fade show text-center px-0" role="alert"><?= $this->session->flashdata('message') ?></div>
          <?php endif; ?>
          <p class="text-center mt-3 mb-2">SILAHKAN LOGIN</p>
          <form action="" method="POST">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" placeholder="Masukkan username" id="username" name="username" value="<?= set_value('username') ?>">
              <small class="form-text text-danger"><i><?= form_error('username'); ?></i></small>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" placeholder="Masukkan password" id="password" name="password">
              <small class="form-text text-danger"><i><?= form_error('password'); ?></i></small>
            </div>
            <button type="submit" class="btn w-100 bg-skyblue text-white">LOGIN</button>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>