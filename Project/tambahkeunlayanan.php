<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama_pasien'];
$nopasien = $_POST['no_pasien'];
$penyakit = $_POST['penyakit'];
$umur = $_POST['umur'];
 
// menginput data ke database
mysqli_query($koneksi, "INSERT INTO tbl_pasien VALUES('', '$nama', '$nopasien', '$penyakit', '$umur')");
 
// mengalihkan halaman kembali ke index.php
header("location:Layanan.php");
 
?>