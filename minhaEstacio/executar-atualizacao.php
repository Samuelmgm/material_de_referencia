<?php
 echo "UPDATE";
 include 'conecta.php';

 $query = 'update aluno set matricula='.$_POST["matricula"].', nome="'.$_POST["nome"].'" where id= '.$_POST["id"];
 $result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());   
 mysqli_close($link);
 
 echo "ATUALIZADO COM SUCESSO!!!";   
?>