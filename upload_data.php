<?php

    //Variabel database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "urbanfarming";

    $conn = mysqli_connect("$servername", "$username", "$password","$dbname");
    $temp = $_GET["temp"];
    $soil = $_GET["soil"];
    $light = $_GET["light"];
    $tds = $_GET["tds"];
    $co2 = $_GET["co2"];
    $humidity = $_GET["humidity"];
    $timestamp = 1234567890;
    $stringDate = date('d-m-Y H:i', $timestamp);
    //echo now();
    $query = "INSERT INTO {$_GET['id']} (Temp, Soil, Light, Tds, CO2, Humidity, Waktu) VALUES ('$temp','$soil', '$light', '$tds', '$co2', '$humidity', now())";
    $result = mysqli_query($conn, $query);


    // Prepare the SQL statement

?>
