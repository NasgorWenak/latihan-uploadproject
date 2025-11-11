<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="style.css">
</head>
<body>
    <br>
    <h2>DATA MAHASISWA</h2>
    <a href="tambah.php">+ TAMBAH SISWA</a>
    <br/>
    <br/>
    <fieldset>
    <table border="1">
        <tr>
            <th>Kode_Mahasiswa</th>
            <th>nama_mahasiswa</th>
            <th>NISN</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from mahasiswa");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['kode_mahasiswa']; ?></td>
                <td><?php echo $d['nama_mahasiswa']; ?></td>
                <td><?php echo $d['nisn']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $d['kode_mahasiswa']; ?>">EDIT</a>
                    <a href="delete.php?id=<?php echo $d['kode_mahasiswa']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </fieldset>
    </table>
</body>

</html>