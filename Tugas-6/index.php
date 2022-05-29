<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQLi - Praktikum Modul 6</title>
</head>
<body>
    <h2>CRUD DATA DOSEN</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH DOSEN</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Pendidikan Terakhir</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM data_dosen");
        while($d = mysqli_fetch_array($data))
        {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $d['nip'];?></td>
                <td><?php echo $d['nama_dsn'];?></td>
                <td><?php echo $d['jenis_kelamin'];?></td>
                <td><?php echo $d['agama'];?></td>
                <td><?php echo $d['alamat'];?></td>
                <td><?php echo $d['pendidikan_terakhir'];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
        
</body>
