<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Besar Atol</title>
  <link rel="stylesheet" href="asset/bootstrap-4.5.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/main.css">
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
    <div class="container">
      <a class="navbar-brand" href="index.php">Rifqi Ramdhani</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="">
    <div class="card border-0 shadow my-5 container min-vh-100">
      <div class="card-body p-5">
        <h1 class="font-weight-light text-center">Tugas Besar Atol API & Web Services</h1>
        <h2 class="font-weight-light text-center">Dokumentasi</h2>
        <h4 class="lead">
          Untuk mengakses halaman API jadwal sholat gunakan link dibawah ini
          <p>
            <a href="http://localhost/tugas/tubesatol/jadwal_sholat.php" class="btn btn-link">http://localhost/tugas/tubesatol/jadwal_sholat.php</a>
          </p>
        </h4>

        <h4 class="lead">
          Untuk mengakses web services berikut perintah yang dapat dilakukan
        </h4>

        <div class="row">
          <div class="col-md-6">

            <h5>Tampil Semua Data</h5>
            <hr />
            <div class="table-responsive table-striped">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td>Method</td>
                    <td>URL</td>
                  </tr>
                  <tr>
                    <td>GET</td>
                    <td>localhost/tugas/tubesatol/services.php?q=tampildata</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <h5>Cari Data</h5>
            <hr />
            <div class="table-responsive table-striped">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td>Method</td>
                    <td>URL</td>
                  </tr>
                  <tr>
                    <td>GET</td>
                    <td>localhost/tugas/tubesatol/services.php?q=caridata&id=1</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <h5>Tambah Data</h5>
            <hr />
            <div class="table-responsive table-striped">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td>Method</td>
                    <td>URL</td>
                  </tr>
                  <tr>
                    <td>GET</td>
                    <td>localhost/tugas/tubesatol/services.php?q=tambahdata&plat=?&merek=?&tarif=?</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <h5>Ubah Data</h5>
            <hr />
            <div class="table-responsive table-striped">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td>Method</td>
                    <td>URL</td>
                  </tr>
                  <tr>
                    <td>GET</td>
                    <td>localhost/tugas/tubesatol/services.php?q=ubahdata&id=?&plat=?&merek=?&tarif=?</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <h5>Hapus Data</h5>
            <hr />
            <div class="table-responsive table-striped">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td>Method</td>
                    <td>URL</td>
                  </tr>
                  <tr>
                    <td>GET</td>
                    <td>localhost/tugas/tubesatol/services.php?q=hapudata&id=?</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="asset/bootstrap-4.5.1/dist/js/bootstrap.min.js"></script>
</body>

</html>