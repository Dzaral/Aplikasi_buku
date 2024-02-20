<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form buku</title>
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
                                        <input class="form-control" type="text" name="id_buku" id="id_buku" placeholder="masukkan id_buku">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="penulis" >Penulis</label>
                                        <input class="form-control" type="text" name="penulis" id="penulis" placeholder="Masukkan nama penulis">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="judul" >Judul</label>
                                        <input class="form-control" type="text" name="judul" id="judul">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="no_isbn" >No_isbn</label>
                                        <input class="form-control" type="text" name="no_isbn" id="no_isbn">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="penerbit" >penerbit</label>
                                        <input class="form-control" type="text" name="penerbit" id="penerbit">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="tahun" >tahun</label>
                                        <input class="form-control" type="text" name="tahun" id="tahun">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="stok" >stok</label>
                                        <input class="form-control" type="text" name="stok" id="stok" placeholder="masukkan Stok buku">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="harga_pokok" >harga_pokok</label>
                                        <input class="form-control" type="text" name="harga_pokok" id="harga_pokok">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="harga_jual" >harga_jual</label>
                                        <input class="form-control" type="text" name="harga_jual" id="harga_jual">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="ppn" >ppn</label>
                                        <input class="form-control" type="text" name="ppn" id="ppn">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="diskon" >diskon</label>
                                        <input class="form-control" type="text" name="diskon" id="diskon">
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