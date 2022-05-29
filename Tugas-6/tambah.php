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
	    <a href="index.php">KEMBALI</a>
	    <br/>
	    <br/>
	    <h3>TAMBAH DATA DOSEN</h3>
	    <form method="POST" action="tambah_aksi.php">
	        <table>
	            <tr>
	                <td>NIP</td>
	                <td><input type="number" name="nip"></td>
	            </tr>
	            <tr>
	                <td>Nama</td>
	                <td><input type="text" name="nama_dsn"></td>
	            </tr>
	            <tr>
	                <td>Jenis Kelamin</td>
	                <td><input type="text" name="jenis_kelamin"></td>
	            </tr>
				<tr>
	                <td>Agama</td>
	                <td><input type="text" name="agama"></td>
	            </tr>
                <tr>
	                <td>Alamat</td>
	                <td><input type="text" name="alamat"></td>
	            </tr>
				<tr>
	                <td>pendidikan_terakhir</td>
	                <td><input type="text" name="pendidikan_terakhir"></td>
	            </tr>
	            <tr>
	                <td></td>
	                <td><input type="submit" value="SIMPAN"></td>
	            </tr>
	        </table>
	    </form>
	</body>
</html>