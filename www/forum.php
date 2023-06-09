<?php

session_start();
require_once 'connection.php';

?>



<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Brum Brum Autka</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />

</head>

<body>
	
	<div id="container">
	
		<div id="logo">
			<img src="superfura.jpg">
			Brum Brum Autka
			<a style="font-size: 20px;" href="logout.php">[WYLOGUJ]</a>
		</div>
		
		<div id="menu">
			<div class="option"><a href="forum.php">Forum</a></div>
			<div class="option"><a href="newsy.html">Newsy</a></div>
			<div class="option"><a href="regulamin.html">Regulamin</a></div>
			<div class="option"><a href="poradniki.html">Poradniki</a></div>
			<div class="option"><a href="rejestracja.php">Rejestracja</a></div>
			<div class="option"><a href="logowanie.php">Logowanie</a></div>
			<div style="clear:both;"></div>
		</div>

       
		
		<div id="topbar">
			<div id="topbarL">
				<img src="autko.png" />
			</div>
			<div id="topbarR">
				<span class="bigtitle">Na czym polega nasza strona?</span>
				<div style="height: 15px;"></div>
				'Brum Brum Autka' to forum dla fanów pojazdów czterokołowych. Na naszej stronie możesz; <br/>
				-Posyskutować z innymi użytkownikami na tematy związane z pojazdami <br/>
				-znaleść odpowiedzi na pytania w zakresie motoryzacji<br/>
				-dobrze się bawić :)
			</div>
			<div style="clear:both;"></div>
		</div>
		
		<div id="sidebar">
			<div class="optionL"><a href="forum.php">Forum</a></div>
			<div class="optionL"><a href="newsy.html">Newsy</a></div>
			<div class="optionL"><a href="regulamin.html">Regulamin</a></div>
			<div class="optionL"><a href="poradniki.html">Poradniki</a></div>
			<div class="optionL"><a href="rejestracja.php">Rejestracja</a></div>
			<div class="optionL"><a href="logowanie.php">Logowanie</a></div>
		</div>
		
		<div id="content">
			<a href="stworz.php">stwórz temat</a>
			<?php
			if (!isset($_SESSION['user'])) {
				$_SESSION['stwerr'] = '<br /><span style="color: red;">nie jesteś zalogowany</span>';
				echo $_SESSION['stwerr'];
				unset ($_SESSION['stwerr']);
			}
			?>
<br /> <br />
<?php
$sql = "SELECT*FROM threads";
$result = $conn->query($sql);

while ($rows = $result->fetch_assoc()){
$id = $rows['id'];
    echo '<table style="border-top:solid">';
echo "
      <tr><td>".$rows['tworca']."</td></tr>
      <tr><td><a href='topic.php?id=$id'>".$rows['pytanie']."</a></td></tr>";
      
      echo "</table>";
      
}

?>
		
		</div>
	
	</div>
	
</body>
</html>