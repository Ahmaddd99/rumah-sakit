<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Project/Layanan.css">
    <title>Daftar Pasien</title>
</head>
<body>
    <div class="textpuskesmas">PUSKESMAS CIPAKU</div>
    <div class="backtext"><a href="../Project/LandingPage.html">Kembali</a></div>
    <a href="../Project/LandingPage.html"><div class="back"></div></a>
    <div class="logopuskesmas"></div>
	<title>CRUD PHP dan MySQLi</title>
 	
 	<br>
 	<br>
 	<br>
	<h2>Daftar Pasien</h2>
	<br/>
	<a href="TambahLayanan.php"><input type="submit" value="+Tambah Pasien"></a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Nomor Pasien</th>
			<th>Penyakit</th>
			<th>Umur</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM tbl_pasien");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>		
				<td><?php echo $d['nama_pasien']; ?></td>
				<td><?php echo $d['no_pasien']; ?></td>
				<td><?php echo $d['penyakit']; ?></td>
				<td><?php echo $d['umur']; ?></td>
				<td>
					<a href="editlayanan.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapuslayanan.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
</body>
</html>