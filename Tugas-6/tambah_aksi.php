<?php
    //koneksi database
    include "koneksi.php";

    //menangkap data yang dikirim di form
    $nip = $_POST['nip'];
    $nama_dsn = $_POST['nama_dsn'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];

    //menginput data ke database
    mysqli_query($koneksi, "insert into data_dosen values('', '$nip', '$nama_dsn', '$jenis_kelamin', '$agama', '$alamat', '$pendidikan_terakhir')");

    //mengalihkan halaman kembali ke index.php
    header("location:index.php");