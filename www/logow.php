<?php
session_start();
require_once 'connection.php';

$login = $_POST['login'];
$pass = $_POST['pass'];

$ok = true;

if (strlen($login && $pass) <1) {
 $ok = false;
    $_SESSION['logerr'] = '<span style="color: red"> Proszę wypełnić wszystkie pola</span>';
    header("location: log.php");

}

$sql = "SELECT*FROM konta WHERE login='$login' AND haslo='$pass'";

if ($result = $conn->query($sql)) {

    $users = $result->num_rows;
    if ($users<1) {
        $ok = false;
        $_SESSION['log2err'] = '<span style="color: red"> niepoprawne hasło lub login</span>';
        header("location: log.php");
      

        

    } 

}


if ($ok == true) {

if ($result = $conn->query($sql)) {

        $users = $result->num_rows;
        if ($users=1) {
    $_SESSION['zalogowany'] = true;
    $info=$result->fetch_assoc();
    $_SESSION['id'] = $info['id'];
    $_SESSION['user'] = $info['login'];
    $result->free_result();
    header("location: regulamin.html");
}
    }
}



?>