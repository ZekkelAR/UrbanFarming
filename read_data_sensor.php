<?php
$hostname="localhost";
$user="root";
$pass="";
$dbs="urbanfarming";

$connect=mysqli_connect($hostname,$user,$pass,$dbs);

$mysq = "SELECT * FROM {$_GET['id']} ORDER BY Waktu DESC";
$dats=mysqli_query($connect,$mysq);
$print_data = mysqli_fetch_array($dats);

$dataa = new stdClass();
$dataa->temperature = $print_data["Temp"];
$dataa->soil = $print_data["Soil"];
$dataa->light = $print_data["Light"];
$dataa->tds = $print_data["Tds"];
$dataa->co2 = $print_data["CO2"];
$dataa->humidity = $print_data["Humidity"];
$dataa->waktu = $print_data["Waktu"];
$myJSON = json_encode($dataa);
echo $myJSON;
?>
