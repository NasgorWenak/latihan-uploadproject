<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Universitas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>CRUD MAHASISWA UNIVERSITAS PETRA</h2>
    <h3>Tambah Data Mahasiswa</h3>
    <form method ="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>kode_mahasiswa</td>
                <td><input type="text" name="kode_mahasiswa"></td>
            </tr>
            <tr>
                <td>nama_mahasiswa</td>
                <td><input type="text" name="nama_mahasiswa"></td>
            </tr>
            <tr>
                <td>nisn</td>
                <td><input type="number" name="nisn"></td>
            </tr>
            <tr>
                <td>jurusan</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>