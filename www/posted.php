<?php
session_start();
require_once 'connection.php';
$pytanie = $_POST['pytanie'];
$zawartosc = $_POST['zawartosc'];
$data = date('Y-m-d');


$sql = "INSERT INTO threads (pytanie, zawartosc, tworca, data) VALUES ('$pytanie', '".$zawartosc."', '".$_SESSION["user"]."', '".$data."')";

$conn->query($sql);
header("location: forum.php");

?>