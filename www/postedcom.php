<?php
session_start();
require_once 'connection.php';


$tworca = $_SESSION['user'];
$zawartosc = $_POST['komm'];
$id_temat = $_POST['id'];

$sql = "INSERT INTO komentarze (tworca, zawartosc, id_temat) VALUES ('$tworca', '$zawartosc', '$id_temat')";

$conn->query($sql);
header("location:topic.php?id=$id_temat")

?>