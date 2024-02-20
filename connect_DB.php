<?php
// membuat koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "aplikasi_buku");

// cek koneksi kedatabase
if ($koneksi->connect_error) {
    die("Pesan error : " . $koneksi->connect_error);
}
?>
