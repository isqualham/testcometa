<?php
    include_once ('backend/cep.php');
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
            
            <form action="backend/cadastrarFornecedor.php" method="post">
                <fieldset>
                    <legend>Cadastro de fornecedores</legend>   

                    <input type="text" name="nome" placeholder="Nome" required><br><br>

                    <input type="text" name="telefone" placeholder="Celular exemplo: 65-999187823" required minlength="12"><br><br>

                    <input type="text" name="cnpj" placeholder="CNPJ exemplo: 999.999/0001-99" required minlength="15"><br><br>    
                                              
                    <input type="text" name="cep" placeholder="CEP insira apenas números"
                        value="<?php echo $dados->cep ?>" required><br>
                        <a href="forneCep.html" id="cep">voltar para válidação de cep</a><br><br>

                    <input type="text" name="rua" placeholder="Rua"
                        value="<?php echo $dados->logradouro ?>" required><br><br>

                    <input type="text" name="bairro" placeholder="Bairro"
                        value="<?php echo $dados->bairro ?>" required><br><br>

                    <input type="text" name="cidade" placeholder="Cidade"
                        value="<?php echo $dados->localidade ?>" required><br><br>

                    <input type="text" name="estado" placeholder="Estado"
                        value="<?php echo $dados->uf ?>" required><br><br>

                    <input type="text" name="ibge" placeholder="IBGE"
                        value="<?php echo $dados->ibge ?>" required><br><br>
                    
                    <button type="submit" id="button">cadastrar</button><br>
                    
                </fieldset>               
            </form>
        </section>                         
    </div>
</body>
</html>