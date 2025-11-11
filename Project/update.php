<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>CRUD SISWA SMA KRISTEN PETRA 1</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>EDIT DATA SISWA</h3>
    <?php
    include 'koneksi.php';
    $kode_mahasiswa = $_GET['id'];
    $project = mysqli_query($koneksi,"select * from mahasiswa WHERE kode_mahasiswa='$kode_mahasiswa' ");
    while($d = mysqli_fetch_array($project)){
        ?>
        <form method="post" action="ubah.php">
            <table>
                <tr>
                    <td>nama_mahasiswa</td>
                    <td><input type="text" name="nama_mahasiswa" value="<?php echo $d['nama_mahasiswa']; ?>"></td>
                    <td><input type="hidden" name="kode_mahasiswa" value="<?php echo $d['kode_mahasiswa']; ?>"></td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td><input type="text" name="nisn" value="<?php echo $d['nisn']; ?>"></td>
                </tr>
                <tr>
                    <td>jurusan</td>
                    <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
</body>
</html>