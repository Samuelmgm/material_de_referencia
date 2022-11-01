<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Matricula</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            
        // Connecting, selecting database
        $link = mysqli_connect('localhost', 'root', '') 
        or die('Could not connect: ' . mysqli_error());
        mysqli_select_db($link, 'minha_estacio') or die('Could not select database');

        // Performing SQL query
        $query = 'select id, nome, matricula from aluno';
        $result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());
        while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $line["nome"]?></td>
                <td><?php echo $line["matricula"]?></td>
                <td>
                    <a href='deletar.php?id=<?php echo $line["id"]?>&action=delete'>DEL</a> -  
                    <a href='index.php?id=<?php echo $line["id"]?>&action=update'>Update</a></td>
            </tr>
        <?php 
        }
        mysqli_close($link);
        
        ?>
    </tbody>
</table>