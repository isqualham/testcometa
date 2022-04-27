<?php
<<<<<<< HEAD
    include_once ('backend/cep.php');
=======
    include_once ('php/cep.php');
>>>>>>> 74ac88df9be87cc7149bf243cf5c1c1c98e2712a
    $dados = getDados();
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
                                              
                <a href="forneCep.html">Cadastro de Fornecedores</a>

            </nav>             
        </header>

        <section>
            
            <form action="cadastrarFornecedor.php" method="post">
                <fieldset>
                    <legend>Cadastro de fornecedores</legend>   

                    <input type="text" name="nome" placeholder="Nome"><br><br>

                    <input type="text" name="telefone" placeholder="Telefone"><br><br>

                    <input type="text" name="cnpj" placeholder="CNPJ" ><br><br>    
                                              
                    <input type="text" name="cep" placeholder="CEP insira apenas números"
                        value="<?php echo $dados->cep ?>"><br>
                        <a href="forneCep.html">voltar para válidação de cep</a><br><br>

                    <input type="text" name="rua" placeholder="Rua"
                        value="<?php echo $dados->logradouro ?>"><br><br>

                    <input type="text" name="bairro" placeholder="Bairro"
                        value="<?php echo $dados->bairro ?>"><br><br>

                    <input type="text" name="cidade" placeholder="Cidade"
                        value="<?php echo $dados->localidade ?>"><br><br>

                    <input type="text" name="estado" placeholder="Estado"
                        value="<?php echo $dados->uf ?>"><br><br>

                    <input type="text" name="ibge" placeholder="IBGE"
                        value="<?php echo $dados->ibge ?>"><br><br>
                    
                    <button id="button">cadastrar</button><br>
                    
                </fieldset>               
            </form>
        </section>                         
    </div>
</body>
</html>