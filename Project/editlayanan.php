<!DOCTYPE html>
<html>
<head>
	<title>Edit Daftar Pasien</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Project/editlayanan.css">
</head>
<body>
	  <div class="textpuskesmas">PUSKESMAS CIPAKU</div>
    <div class="backtext"><a href="../Project/Layanan.php">Kembali</a></div>
    <a href="../Project/Layanan.php"><div class="back"></div></a>
    <div class="logopuskesmas"></div>
	<title>CRUD PHP dan MySQLi</title>
 
	<h2></h2>
	<br/>
	<br/>
	<br/>
	<h3>Edit Daftar Pasien</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$hasil = mysqli_query($koneksi, "SELECT * FROM tbl_pasien WHERE id = $id");
	$data = mysqli_fetch_assoc($hasil);
	?>
		<form method="post" action="updatelayanan.php">
		<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
			<table>
				<tr>			
					<td>ID</td>
					<td>
						<input type="number" name="id" value="<?php echo $data['id']; ?>">
					</td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="text" name="nama_pasien" value="<?php echo $data['nama_pasien']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nomor Pasien</td>
					<td>
						<input type="number" name="no_pasien" value="<?php echo $data['no_pasien']; ?>">
					</td>
				</tr>
				<tr>
					<td>Penyakit</td>
					<td>
						<input type="text" name="penyakit" value="<?php echo $data['penyakit']; ?>">
					</td>
				</tr>
				<tr>
					<td>Umur</td>
					<td>
						<input type="number" name="umur" value="<?php echo $data['umur']; ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>		
			</table>
		</form>
 
</body>
</html>