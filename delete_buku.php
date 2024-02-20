<?php
include "connect_DB.php";

$sqli = 'DELETE FROM buku WHERE id_buku=' . $_GET['id_buku'];

$koneksi->query($sqli);

header('location:list_buku.php');
