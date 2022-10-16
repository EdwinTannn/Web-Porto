<?php
$namaserver = "localhost";
$username = "root";
$password = "";
$namadb = "porto";

//Membuat koneksi
$koneksi = mysqli_connect($namaserver, $username, $password, $namadb);

//Cek koneksi atau tidak(!)
if(!$koneksi) {
    die("Gagal melakukan koneksi ke database. " . mysqli_connect_error());
}

?>