<?php

$server = "localhost";
$user = "root";
$nama_database = "pendaftaran_siswa";

$db = mysqli_connect($server, $user, "", $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>