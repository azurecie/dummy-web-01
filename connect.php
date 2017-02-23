<?php
$host = "localhost";
$user = "b63ce2ed176523";
$pass = "0568020d";
$name = "oyedb1";
 
$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
