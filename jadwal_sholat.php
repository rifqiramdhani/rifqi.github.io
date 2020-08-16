<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas Besar Atol</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="asset/bootstrap-4.5.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/select2-4.0.6-rc.1/dist/css/select2.min.css">

</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="jadwal_sholat.php">Cek Jadwal Sholat</a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" id="ongkir" method="POST">
                            <div class="form-group">
                                <label class="control-label">Kota</label>
                                <div class="">
                                    <select class="form-control" id="kota_asal" name="kota_asal" required="">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tanggal</label>
                                <div class="">
                                    <input type="date" name="tanggal" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-8">
                                    <button type="submit" class="btn btn-primary btn-sm">Cek</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7" id="response_ongkir">
            </div>
        </div>
    </div>
    <script src="asset/jquery/jquery-3.3.1.min.js"></script>
    <script src="asset/bootstrap-4.5.1/dist/js/bootstrap.min.js"></script>
    <script src="asset/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>
    <script src="asset/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>