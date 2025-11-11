<?php

include 'koneksi.php';

$kode_mahasiswa = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE kode_mahasiswa='$kode_mahasiswa'");

header("location:index.php");
?>