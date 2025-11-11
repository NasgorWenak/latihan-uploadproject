<?php

include 'koneksi.php';
$kode_mahasiswa = $_POST['kode_mahasiswa'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nisn = $_POST['nisn'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE mahasiswa SET nama_mahasiswa='$nama_mahasiswa', nisn='$nisn',jurusan='$jurusan' , alamat='$alamat' WHERE kode_mahasiswa='$kode_mahasiswa'");
header("location:index.php");
?>