<?php
include "connect_DB.php";

// QUERY
$sqli = "insert into buku(id_buku, judul, no_isbn, penulis, penerbit, tahun, stok, harga_pokok, harga_jual, ppn, diskon) 
values('" . $_POST['id_buku'] . "','" . $_POST['judul'] . "','" . $_POST['no_isbn'] . "','" . $_POST['penulis'] . "',
'" . $_POST['penerbit'] . "','" . $_POST['tahun'] . "','" . $_POST['stok'] . "','" . $_POST['harga_pokok'] . "',
'" . $_POST['harga_jual'] . "','" . $_POST['ppn'] . "','" . $_POST['diskon'] . "')";

$koneksi->query($sqli);
