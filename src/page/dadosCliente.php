<?php 
    include("backend/conexao.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Fornecedores</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles.css'>    
</head>
<body>
    <div>

        <header>
            <a href="../../index.html">
                <img src="../image/logo.svg" width="350px" height="150px" />
            </a>  
            <nav>
                                              
                <a href="forneCep.html">Cadastro de Fornecedores e de Clientes</a>

            </nav>             
        </header>

        <section id="tabela">

            <?php

            $consulta  = "SELECT * FROM cliente";
            if($resultado = mysqli_query($conexao, $consulta)){
                $nome     = array();
                $telefone = array();
                $cpf      = array();
                $cep      = array();
                $rua      = array();
                $bairro   = array();
                $cidade   = array();
                $estado   = array();
                $ibge     = array();
                $i = 0;
                while($reg = mysqli_fetch_assoc($resultado)){
                    $nome[$i]     = $reg['nome'];
                    $telefone[$i] = $reg['telefone'];
                    $cpf[$i]      = $reg['cpf'];
                    $cep[$i]      = $reg['cep'];
                    $rua[$i]      = $reg['rua'];
                    $bairro[$i]   = $reg['bairro'];
                    $cidade[$i]   = $reg['cidade'];
                    $estado[$i]   = $reg['estado'];
                    $ibge[$i]     = $reg['ibge'];
               
                ?>
                    <table width="1000px">
                        <tr>
                            <th>nome</th>
                            <th>telefone</th>
                            <th>cpf</th>
                            <th>cep</th>
                            <th>rua</th>
                            <th>bairro</th>
                            <th>cidade</th>
                            <th>estado</th>
                            <th>ibge</th>
                            
                        </tr>
                        <tr>
                            <td><?php echo $nome[$i]; ?></td>
                            <td><?php echo $telefone[$i]; ?></td>
                            <td><?php echo $cpf[$i]; ?></td>
                            <td><?php echo $cep[$i]; ?></td>
                            <td><?php echo $rua[$i]; ?></td>
                            <td><?php echo $bairro[$i]; ?></td>
                            <td><?php echo $cidade[$i]; ?></td>
                            <td><?php echo $estado[$i]; ?></td>
                            <td><?php echo $ibge[$i]; ?></td>
                        </tr>
                    <table>
                    

                <?php
                $i++;
                }
            }
            ?>
        </section>                         
    </div>
</body>
</html>