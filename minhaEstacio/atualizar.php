<?php
echo "UPDATE";
include 'conecta.php';

$id = $_GET["id"];
$action = "execute-update";

$query = 'select nome, matricula from aluno where id= '.$_GET["id"];
$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());   
$row = mysqli_fetch_row($result); 
mysqli_close($link);

print_r($row);
$nome = $row[0];
$matricula = $row[1];

?>