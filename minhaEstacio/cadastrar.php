<?php
 if(isset($_POST["nome"])){
    $nome = $_POST["nome"];            
}

if(isset($_POST["matricula"])){
    $matricula = $_POST["matricula"];          
}

if($nome!="" and $matricula!=""){
    // Connecting, selecting database
    include 'conecta.php';
    // Performing SQL query
    $query = 'insert into aluno (nome, matricula) values ("'.$nome.'", '.$matricula.')';
    $result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());
    mysqli_close($link);

    echo "CADASTRADO COM SUCESSO!!!";
}
?>