<?php
include "connect_DB.php";

$sqli = 'SELECT * FROM buku WHERE id_buku=' . $_GET['id_buku'];

$hasil = $koneksi->query($sqli);

$buku = $hasil->fetch_assoc();

if (isset($_POST['id_buku'])) {
    $sqli = 'UPDATE buku SET id_buku="' . $_POST['id_buku'] . '", judul="' . $_POST['judul']
        . '", no_isbn="' . $_POST['no_isbn'] . '", penulis="' . $_POST['penulis'] . '",
         penerbit="' . $_POST['penerbit'] . '", tahun="' . $_POST['tahun'] . '",
         stok="' . $_POST['stok'] . '", harga_pokok="' . $_POST['harga_pokok'] . '",
         harga_jual="' . $_POST['harga_jual'] . '", ppn="' . $_POST['ppn'] . '",
         diskon="' . $_POST['diskon'] . '" WHERE id_buku=' . $_GET['id_buku'];
    $koneksi->query($sqli);
    header('location:list_buku.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>EDIT data buku</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />

</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <form action="/save_buku.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id_buku">Id_Buku</label>
                                        <input class="form-control" type="text" name="id_buku" id="id_buku" value="<?= $buku['id_buku'] ?>" placeholder="masukkan id_buku">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="penulis">Penulis</label>
                                        <input class="form-control" type="text" name="penulis" id="penulis" value="<?= $buku['penulis'] ?>" placeholder="Masukkan nama penulis">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="judul">Judul</label>
                                        <input class="form-control" type="text" name="judul" id="judul" value="<?= $buku['judul'] ?>">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="no_isbn">No_isbn</label>
                                        <input class="form-control" type="text" name="no_isbn" id="no_isbn" value="<?= $buku['no_isbn'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="penerbit">penerbit</label>
                                        <input class="form-control" type="text" name="penerbit" id="penerbit" value="<?= $buku['penerbit'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="tahun">tahun</label>
                                        <input class="form-control" type="text" name="tahun" id="tahun" value="<?= $buku['tahun'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="stok">stok</label>
                                        <input class="form-control" type="text" name="stok" id="stok" value="<?= $buku['stok'] ?>" placeholder="masukkan Stok buku">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="harga_pokok">harga_pokok</label>
                                        <input class="form-control" type="text" name="harga_pokok" id="harga_pokok" value="<?= $buku['harga_pokok'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="harga_jual">harga_jual</label>
                                        <input class="form-control" type="text" name="harga_jual" id="harga_jual" value="<?= $buku['harga_jual'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="ppn">ppn</label>
                                        <input class="form-control" type="text" name="ppn" id="ppn" value="<?= $buku['ppn'] ?>">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="diskon">diskon</label>
                                        <input class="form-control" type="text" name="diskon" id="diskon" value="<?= $buku['diskon'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-btn">
                                        <button class="submit-btn">
                                            Save
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-btn">
                                        <button class="submit-btn" type="reset">
                                            DELETE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>