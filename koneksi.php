<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "prakgis_uas";

$koneksi = ($GLOBALS["___mysqli_ston"] = mysqli_connect($host,  $user,  $pass)) or die("Koneksi ke database gagal!");
mysqli_select_db( $koneksi, $name) or die("Tidak ada database yang dipilih!");
?>