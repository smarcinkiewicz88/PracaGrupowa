<?php

session_start();
require_once 'connection.php';
if (isset($_SESSION['zalogowany'])) {

header ("location: regulamin.html");
exit();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rejestracja.css">
    <title>Logowanie</title>
</head>
<body>
    <div id="con">
        
        <div id="napis">
            <h2>Zaloguj się</h2>
        </div>
        <h4><a href="regulamin.html"><---- powrót</a></h4>
        <div id="form">
        <form action="logow.php" method="post" autocomplete="off">
    <label>Login:</label><br/>
    <input type="text" name="login"><br/>
    <label>Hasło:</label><br/>
    <input type="password" name="pass"><br/><br/>
    <input type="submit">
</form>
</form>
<?php

if (isset($_SESSION['logerr'])) {

    echo $_SESSION['logerr'];
    unset ($_SESSION['logerr']);
    
    }
    
    if (isset($_SESSION['log2err'])) {
    
        echo $_SESSION['log2err'];
        unset ($_SESSION['log2err']);
        
        }
    

?>
</div>
</div>
</body>
</html>