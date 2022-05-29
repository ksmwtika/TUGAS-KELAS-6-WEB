<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$nip = $_POST['nip'];
$nama_dsn = $_POST['nama_dsn'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];

//update data ke database
mysqli_query($koneksi, "update data_dosen set nip='$nip', nama_dsn='$nama_dsn', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat', pendidikan_terakhir='$pendidikan_terakhir' where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");
?> 