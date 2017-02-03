<?php
$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
$user = "b9ff1a1fd97e56";
$pass = "ca8fe94c";
$name = "websql_db";
 
$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
