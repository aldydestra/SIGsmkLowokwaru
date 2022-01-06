<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_sekolah   = $_POST['id_sekolah'];
$nama_sekolah = $_POST['nama_sekolah'];
$jurusan = $_POST['jurusan'];
$kategori = $_POST['kategori'];
$website = $_POST['website'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$kelurahan = $_POST['kelurahan'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];

$query="UPDATE smk SET nama_sekolah='$nama_sekolah', kategori='$kategori', website='$website', no_telp='$no_telp', jurusan='$jurusan',alamat='$alamat', kelurahan='$kelurahan', longitude='$longitude', latitude='$latitude' where id_sekolah='$id_sekolah'";
mysqli_query($koneksi, $query);
header("location:indexadmin.php");