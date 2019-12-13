<?php
$host="localhost";
$user="root";
$pass="";
$db="anaps";

$conn=mysqli_connect($host,$user,$pass,$db);

if($conn->connect_error) { //conn.connect_error();
    echo "ERROR<br>";
    die($conn->connect_error);
}

?>