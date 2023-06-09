<?php
session_start();
require_once 'connection.php';
 if (!isset($_SESSION['zalogowany'])){

echo '<span style="color: red;">musisz być zalogowany by stworzyć temat</span> <br /><br/>
<a href="forum.php">strona głowna</a>';
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
            <h2>Stwórz pytanie</h2>
        </div>
        <h4><a href="forum.php"><---- powrót</a></h4>
        <div id="form">
        <form action="posted.php" method="post" autocomplete="off">
        <label>Pytanie:</label><br/>
<input style="width: 200px;" type="text" name="pytanie" ><br/><br />
<input style="width: 200px;"  type="text" name="zawartosc"> <br /> <br />
<input type="submit">

</form>
</form>

</div>
</div>
</body>
</html>


