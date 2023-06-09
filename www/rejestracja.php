<?php

session_start();
require_once 'connection.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rejestracja.css">
    <title>Rejestracja</title>
</head>
<body>
    <div id="con">
        
        <div id="napis">
            <h2>Rejestracja konta</h2>
        </div>
        <h4><a href="regulamin.html"><---- powrót</a></h4>
        <div id="form">
<form action="rej.php" method="post" autocomplete="off">
    <label>E-mail:</label><br>
    <input type="text" name="email"><br>
    <label>Login:</label><br>
    <input type="text" name="login"><br>
    <label>Hasło:</label><br>
    <input type="password" name="pass"><br>
    <label>Potwierdz Hasło:</label><br>
    <input type="password" name="cpass"><br><br>
    <input type="submit">
</form>
<?php

if (isset($_SESSION['email_err'])){

    echo $_SESSION['email_err'];
    unset($_SESSION['email_err']);
} 
if (isset($_SESSION['login_err'])){

    echo $_SESSION['login_err'];
    unset($_SESSION['login_err']);
} 
if (isset($_SESSION['pass_err'])){

    echo $_SESSION['pass_err'];
    unset($_SESSION['pass_err']);
} 
if (isset($_SESSION['cpass_err'])){

    echo $_SESSION['cpass_err'];
    unset($_SESSION['cpass_err']);
} 
if (isset($_SESSION['login2_err'])){

    echo $_SESSION['login2_err'];
    unset($_SESSION['login2_err']);
} 
if (isset($_SESSION['rejsuc'])){

    echo $_SESSION['rejsuc'];
    unset($_SESSION['rejsuc']);
} 

?>
</div>
</div>
</body>
</html>