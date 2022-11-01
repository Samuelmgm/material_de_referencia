<?php
include 'conecta.php';
$query = 'delete from aluno where id= '.$_GET["id"];
$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());
mysqli_close($link);

echo "Deletado com Sucesso!!!!";
?>