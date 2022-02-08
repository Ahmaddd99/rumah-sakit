<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_pasien'];
$nopasien = $_POST['no_pasien'];
$penyakit = $_POST['penyakit'];
$umur = $_POST['umur'];

mysqli_query($koneksi,"UPDATE tbl_pasien SET id='$id', nama_pasien='$nama', no_pasien='$nopasien', penyakit='$penyakit', umur='$umur' WHERE id ='$id'");
 
header("location:Layanan.php");
 
?>