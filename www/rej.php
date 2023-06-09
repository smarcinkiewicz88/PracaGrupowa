<?php
session_start();
require_once 'connection.php';

$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

htmlentities($email, ENT_QUOTES);
htmlentities($login, ENT_QUOTES);
htmlentities($pass, ENT_QUOTES);
htmlentities($cpass, ENT_QUOTES);

$ok = true;

if (filter_var($email, FILTER_VALIDATE_EMAIL) == false)  {

$ok = false;
$_SESSION['email_err'] = '<span style="color: red">Podany adres email jest nieprawidłowy</span><br>';
header("location:rejestracja.php");
}

if (strlen($login)>12 || strlen($login)<3)  {

    $ok = false;
    $_SESSION['login_err'] = '<span style="color: red">Login musi mieć od 3 do 12 znaków</span><br>';
    header("location:rejestracja.php");
    }

if (strlen($pass)>20 || strlen($pass)<8)  {

        $ok = false;
        $_SESSION['pass_err'] = '<span style="color: red">Hasło musi mieć od 8 do 20 znaków</span><br>';
        header("location:rejestracja.php");
        }  
        
if ($cpass!=$pass)  {

            $ok = false;
            $_SESSION['cpass_err'] = '<span style="color: red">Potwierdzenie hasła nie zgadza się z wprowadzonym hasłem</span><br>';
            header("location:rejestracja.php");
            }


$sql2 = "SELECT*FROM konta WHERE login='$login'";
if ($result = $conn->query($sql2)){
     $accnum =$result->num_rows;
     if ($accnum>0){
        $ok = false;
        $_SESSION['login2_err'] = '<span style="color: red">Wprowadzony login jest już używany</span><br>';
        header("location:rejestracja.php");
     }
}


if ($ok == true) {
    $sql = "INSERT INTO konta (email, login, haslo) VALUES ('$email', '$login', '$pass')";
    $conn->query($sql);
    $_SESSION['rejsuc'] = '<span style="color: green">rejestracja udana</span>';
    header("location: rejestracja.php");
}



?>