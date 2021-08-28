<?php 
include 'koneksi.php';

$kelembabanDht11 = $_POST["kelembabanDht11"];
$kelembabanDht22 = $_POST["kelembabanDht22"];
$suhuDht11 = $_POST["suhuDht11"];
$suhuDht22 = $_POST["suhuDht22"];
$waktu = $_POST["waktu"];

if ($_POST)
{
    $sql = mysqli_query($koneksi, "INSERT INTO data_suhu (kelembabanDht11, suhuDht11, kelembabanDht22, suhuDht22, waktu) VALUES ($kelembabanDht11, $kelembabanDht22, $suhuDht11, $suhuDht22, $waktu)");
    if($sql){
        echo json_encode(array("response" => "Tambah Data BERHASIL !"));
    }else {
        echo json_encode(array("response" => "Tambah Data GAGAL !"));
    }
}

?>