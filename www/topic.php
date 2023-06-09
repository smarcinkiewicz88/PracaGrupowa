<?php
session_start();
require_once 'connection.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if ($_GET["id"]) {

$sql = "SELECT*FROM threads WHERE id='".$_GET['id']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo $row['tworca']; 
echo str_repeat("&nbsp;", 10);
echo $row['data'];
echo str_repeat("&nbsp;", 10);
echo '<a href="forum.php"><------ powrót</a>';
echo "<br /><br />";
echo "<b>".$row['pytanie']."</b>";
echo "<br /><br />";
echo "<br /><br />";
echo $row['zawartosc'];


}

?>
<br /><br /><br /><br /><br /><br /><br />
  <form action="postedcom.php" method="post" autocomplete="off">
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="text" name="komm">
    <br /><br />
    <input type="submit">
  </form>
  <br />
  <fieldset style="width: 1000px;">
  <?php
$sql2 = "SELECT*FROM komentarze WHERE id_temat='".$_GET['id']."'";
$result = $conn->query($sql2);

while ($rows = $result->fetch_assoc()){

    echo '<table style="border-top:solid">';
echo "
      <tr><td>".$rows['tworca']."</td></tr>
      <tr><td>".$rows['zawartosc']."</td></tr>";
      
      echo "</table>";
      
}

if ($result->num_rows<1) {

echo "pusto";

}

?>
  </fieldset>
</body>
</html>