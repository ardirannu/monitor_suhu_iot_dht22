<?php
header('Content-Type: application/json');

include 'koneksi.php';

$sqlQuery = "SELECT kelembabanDht11 FROM data_suhu";

$result = mysqli_query($koneksi,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($koneksi);

echo json_encode($data);
?>