<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQLi - Praktikum Modul 6</title>
</head>
<body>
    <h2>CRUD data dosen</h2><br>
    <a href="index.php">Kembali</a><br><br>
    <h3>Edit data dosen</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from data_dosen where id = '$id'");
    while($d = mysqli_fetch_array($data)) {
        ?>
        <form action="update.php" method="POST">
            <table>
                <tr>
                    <td>NIP</td>
                    <td>
                        <input type="hidden" name="id" id="" value="<?php echo $d['id']; ?>">
                        <input type="number" name="nip" id="" value="<?php echo $d['nip']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Dosen</td>
                    <td>
                        <input type="text" name="nama_dsn" id="" value="<?php echo $d['nama_dsn']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="text" name="jenis_kelamin" id="" value="<?php echo $d['jenis_kelamin']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>
                        <input type="text" name="agama" id="" value="<?php echo $d['agama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat" id="" value="<?php echo $d['alamat']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>
                        <input type="text" name="pendidikan_terakhir" id="" value="<?php echo $d['pendidikan_terakhir']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="" id="" value="Simpan">
                    </td>
                </tr>
            </table>
        </form>
        <?php
    }
    ?>    
</body>
</html> 