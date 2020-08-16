    <?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'db_rentcar');
    if (!$koneksi) {
        echo 'gagal koneksi';
        die;
    }

    $q = isset($_GET['q']) ? $_GET['q'] : '';
    $data = [];

    if (empty($q)) {
        $data['mobil']['kode'] = "404";
        $data['mobil']['pesan'] = "Perintah tidak ditemukan";
    } else {
        switch ($q) {
            case 'tampildata':

                $query = mysqli_query($koneksi, "SELECT * FROM `mobil` ORDER BY plat_nomor ");

                $i = 0;
                while ($getdata = mysqli_fetch_assoc($query)) {
                    $data['mobil'][$i]['id_mobil'] = $getdata['id_mobil'];
                    $data['mobil'][$i]['plat_nomor'] = $getdata['plat_nomor'];
                    $data['mobil'][$i]['merek_mobil'] = $getdata['merek_mobil'];
                    $data['mobil'][$i]['tarif_dalamkota'] = $getdata['tarif_dalamkota'];
                    $data['mobil'][$i]['tarif_wedding'] = $getdata['tarif_wedding'];
                    $data['mobil'][$i]['warna_mobil'] = $getdata['warna_mobil'];
                    $data['mobil'][$i]['tahun_mobil'] = $getdata['tahun_mobil'];
                    $i++;
                }

                break;

            case 'caridata':

                $id = isset($_GET['id']) ? $_GET['id'] : '';

                if (empty($id)) {
                    $data['mobil']['kode'] = "404";
                    $data['mobil']['pesan'] = "ID tidak ditemukan";
                } else {
                    $query = mysqli_query($koneksi, "SELECT * FROM `mobil` WHERE id_mobil = '$id'");


                    if (mysqli_num_rows($query) > 0) {
                        $getdata = mysqli_fetch_assoc($query);

                        $data['mobil']['plat_nomor'] = $getdata['plat_nomor'];
                        $data['mobil']['merek_mobil'] = $getdata['merek_mobil'];
                        $data['mobil']['tarif_dalamkota'] = $getdata['tarif_dalamkota'];
                        $data['mobil']['tarif_wedding'] = $getdata['tarif_wedding'];
                        $data['mobil']['warna_mobil'] = $getdata['warna_mobil'];
                        $data['mobil']['tahun_mobil'] = $getdata['tahun_mobil'];
                    } else {
                        $data['mobil']['kode'] = "404";
                        $data['mobil']['pesan'] = "Data tidak ditemukan";
                    }
                }
                break;

            case 'tambahdata':
                if (isset($_GET['plat']) & isset($_GET['merek']) & isset($_GET['tarif'])) {
                    $plat_nomor = $_GET['plat'];
                    $merek_mobil = $_GET['merek'];
                    $tarif_dalamkota = $_GET['tarif'];


                    $sql = mysqli_query($koneksi, "INSERT INTO `mobil`(`plat_nomor`, `merek_mobil`, `tarif_dalamkota`) VALUES ('$plat_nomor','$merek_mobil','$tarif_dalamkota')");

                    if ($sql) {
                        $data['mobil']['kode'] = "300";
                        $data['mobil']['pesan'] = "Data berhasil ditambahkan";
                    } else {
                        $data['mobil']['kode'] = "500";
                        $data['mobil']['pesan'] = "Data gagal ditambahkan";
                    }

                } else {
                    $data['mobil']['kode'] = "404";
                    $data['mobil']['pesan'] = "Plat Nomor, Merek Mobil, Tarif tidak ditemukan";
                }

                break;

            case 'ubahdata':
                if (!empty($_GET['id'])) {
                    if (empty($_GET['plat']) || empty($_GET['merek']) || empty($_GET['tarif'])) {
                        $data['mobil']['kode'] = "404";
                        $data['mobil']['pesan'] = "Plat Nomor, Merek Mobil, Tarif tidak boleh dikosongkan";
                    } else {
                        $plat_nomor = $_GET['plat'];
                        $merek_mobil = $_GET['merek'];
                        $tarif_dalamkota = $_GET['tarif'];
                        $id = $_GET['id'];

                        $sql = mysqli_query($koneksi, "UPDATE `mobil` SET `plat_nomor`='$plat_nomor',`merek_mobil`='$merek_mobil',`tarif_dalamkota`='$tarif_dalamkota' WHERE `id_mobil` = '$id'");

                        if ($sql) {
                            $data['mobil']['kode'] = "300";
                            $data['mobil']['pesan'] = "Data berhasil diubah";
                        } else {
                            $data['mobil']['kode'] = "500";
                            $data['mobil']['pesan'] = "Data gagal diubah";
                        }
                    }
                } else {
                    $data['mobil']['kode'] = "404";
                    $data['mobil']['pesan'] = "ID tidak ditemukan";
                }
                break;

            case 'hapusdata': 
                if(empty($_GET['id'])){
                    $data['mobil']['kode'] = "404";
                    $data['mobil']['pesan'] = "ID tidak ditemukan";
                }else{
                    $id = $_GET['id'];
                    $sql = mysqli_query($koneksi, "DELETE FROM `mobil` WHERE `id_mobil` = '$id'");

                    if ($sql) {
                        $data['mobil']['kode'] = "300";
                        $data['mobil']['pesan'] = "Data berhasil dihapus";
                    } else {
                        $data['mobil']['kode'] = "500";
                        $data['mobil']['pesan'] = "Data gagal dihapus";
                    }
                }

                break;
        }
    }

    echo json_encode($data);
