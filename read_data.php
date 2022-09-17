<?php
$hostname="localhost";
$user="root";
$pass="";
$dbs="urbanfarming";

$connect=mysqli_connect($hostname,$user,$pass,$dbs);

$mysq = "select * from {$_GET['id']}";
$dats=mysqli_query($connect,$mysq);
$json_array = array();
while($row=mysqli_fetch_assoc($dats))
{
  $json_array[]=$row;
}
echo json_encode($json_array);

?>
