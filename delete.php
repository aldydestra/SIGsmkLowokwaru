<?php
include 'koneksi.php';
session_start();
    if($_SESSION['status']!="login")
    {
		header("location:login.php?pesan=belum_login");
	}
// menyimpan data id kedalam variabel
$id = $_GET['id'];
// query SQL untuk insert data
mysqli_query($koneksi, "DELETE FROM smk WHERE id_sekolah = '$id'");
// mengalihkan ke halaman index.php
//header("location:indexadmin.php?pesan=hapus");
header("location:indexadmin.php");
?>