<?php 
include 'koneksi.php';

$sql = mysqli_query($koneksi, "DELETE FROM data_suhu;");
if($sql){
    echo "<meta http-equiv='refresh' content='1 url= tables.php'>";
}


?>