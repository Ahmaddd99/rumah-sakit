<!DOCTYPE html>
<html>
<head>
	<title>Tambah Daftar Pasien</title>
	<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Project/TambahLayanan.css">
</head>
<body>
	<div class="textpuskesmas">PUSKESMAS CIPAKU</div>
    <div class="backtext"><a href="../Project/Layanan.php">Kembali</a></div>
    <a href="../Project/Layanan.php"><div class="back"></div></a>
    <div class="logopuskesmas"></div>
	<title>CRUD PHP dan MySQLi</title>
 	
 	<br>
 	<br>
 	<br>
	<h2>Tambah Daftar Pasien</h2>
	<br/>
	<form method="post" action="tambahkeunlayanan.php">
		<table>
			<tr>
				<td>ID</td>
				<td><input type="number" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_pasien"></td>
			</tr>
			<tr>
				<td>Nomor Pasien</td>
				<td><input type="number" name="no_pasien"></td>		
			</tr>
			<tr>
				<td>Penyakit</td>
				<td><input type="text" name="penyakit"></td>		
			</tr>
			<tr>
				<td>Umur</td>
				<td><input type="number" name="umur"></td>		
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="simpan" value="SIMPAN"></td>		
			</tr>		
		</table>
	</form>
</body>
</html>