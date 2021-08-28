<?php
 
//Variabel database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "monitor_suhu";
 
	$koneksi = mysqli_connect($servername, $username, $password, $dbname); // menggunakan mysqli_connect

	if(mysqli_connect_error()){ // mengecek apakah koneksi database error
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error(); // pesan ketika koneksi database error
	}
?>