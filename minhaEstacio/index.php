<?php
$matricula = "";
$nome = "";
$id = "";
$action = "cadastrar.php";

if(isset($_GET["action"]) and $_GET["action"]=="update"){
    include 'atualizar.php';
    $action = "executar-atualizacao.php";
}

    
?><html>

<head>
    <title> Minha Estácio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
   <BR><BR>
    <div>
        <span><a id="LCadastrar" for="FCadastrar" class="menu">Cadastrar</a></span>
        <span><a id="LListar" for="TAlunos" class="menu">Listar</a></span>
    </div>
<BR><BR><BR>
    <fieldset id="FCadastrar" class="content">
        <legend>Cadastro de Aluno</legend>
         
        <form action="<?php echo $action?>"  method="post">
            <label for="nome">Nome</label>
            <input type="text" 
                   id="nome" 
                   name="nome"
                   size="30"
                   value="<?php echo $nome;?>">
            <BR>

            <label for="matricula">Matricula</label>
            <input type="number" 
                   id="matricula" 
                   name="matricula" 
                   min="10000" 
                   step="5"
                   value="<?php echo $matricula;?>">
            <BR>
            <?php
              if($id!=""){?>
                <input type="hidden" value="<?php echo $id;?>" name="id">
              <?php 
              }
            ?>
            <input type="submit">   
        </form>
    </fieldset>

    <div id="TAlunos" class="content">
        <?php
           include 'listar.php'
        ?>
    </div>

    <script>
        $(document).ready(function(){
            $(".content").hide();
            $("a.menu").click(function(){
                $(".content").hide();
                $("#"+$(this).attr("for")).show();                
            });

            <?php
               if($matricula!="" and $nome!=""){?>
                $("#FCadastrar").show();
               <?php
               }
            ?>

        })
    </script>   
</body>

</html>