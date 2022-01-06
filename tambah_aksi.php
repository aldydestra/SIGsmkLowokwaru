<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_sekolah = $_POST['id_sekolah'];
$nama_sekolah = $_POST['nama_sekolah'];
$kategori = $_POST['kategori'];
$website = $_POST['website'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$kelurahan = $_POST['kelurahan'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];


// update data ke database
mysqli_query($koneksi,"INSERT INTO smk set id_sekolah='$id_sekolah', nama_sekolah='$nama_sekolah', kategori ='$kategori',website='$website', no_telp='$no_telp', alamat='$alamat', jurusan='$jurusan', kelurahan='$kelurahan',latitude='$latitude',longitude='$longitude'");

// mengalihkan halaman kembali ke indexadmin.php
header("location:indexadmin.php");

?>