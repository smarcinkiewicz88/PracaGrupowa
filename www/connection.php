<?php

$host="localhost";
$user="root";
$pass="";
$base="projekt";


$conn=new mysqli($host,$user,$pass,$base,);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


?>