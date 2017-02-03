<?php
$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
$user = "b5c0ef4301762f";
$pass = "39fd9eef";
$name = "webapp_db";
 
$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>