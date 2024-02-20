<?php
include "connect_DB.php";

$sqli = "select * from buku";

$hasil = $koneksi->query($sqli);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Data Buku</h1>
        <!-- table data siswa -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">id_buku</th>
                    <th scope="col">judul</th>
                    <th scope="col">no_isbn</th>
                    <th scope="col">penulis</th>
                    <th scope="col">penerbit</th>
                    <th scope="col">tahun</th>
                    <th scope="col">stok</th>
                    <th scope="col">harga_pokok</th>
                    <th scope="col">harga_jual</th>
                    <th scope="col">ppn</th>
                    <th scope="col">diskon</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomer = 1;
                while ($item = $hasil->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"><?= $nomer ?></th>
                        <td><?= $item['id_buku'] ?></td>
                        <td><?= $item['judul'] ?></td>
                        <td><?= $item['no_isbn'] ?></td>
                        <td><?= $item['penulis'] ?></td>
                        <td><?= $item['penerbit'] ?></td>
                        <td><?= $item['tahun'] ?></td>
                        <td><?= $item['stok'] ?></td>
                        <td><?= $item['harga_pokok'] ?></td>
                        <td><?= $item['harga_jual'] ?></td>
                        <td><?= $item['ppn'] ?></td>
                        <td><?= $item['diskon'] ?></td>
                        <td>
                            <a href="edit_buku.php?id_buku=<?= $item['id_buku'] ?>" class="btn btn-success">edit</a>
                            <a href="/delete_buku.php?id_buku=<?= $item['id_buku'] ?>" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                <?php $nomer++;
                } ?>
            </tbody>
        </table>
        <!-- akhir table data siswa -->
    </div>
</body>

</html>