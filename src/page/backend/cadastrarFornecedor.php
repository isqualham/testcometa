<?php
    include("conexao.php");

    $nome     = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cnpj     = $_POST['cnpj'];
    $cep      = $_POST['cep'];
    $rua      = $_POST['rua'];
    $bairro   = $_POST['bairro'];
    $cidade   = $_POST['cidade'];
    $estado   = $_POST['estado'];
    $ibge     = $_POST['ibge'];

    if(validarTelefone($telefone) && validarCnpj($cnpj)){
        $sql ="INSERT INTO 
        fornecedores(nome,telefone,cnpj,cep,rua,bairro,cidade,estado,ibge)
        VALUES ('$nome', '$telefone', '$cnpj', '$cep', '$rua', '$bairro', '$cidade', '$estado', '$ibge')"

        if(mysqli_query($conexao, $sql)){
            echo "Fornecedor cadastrado com sucesso"
        }else{
            echo "não foi possível realizar o cadastro".mysqli_connect_error($conexao);
        }

        mysqli_close($conexao);
    }else{
        echo 'telefone ou cnpj digitado errado siga os exemplos <br>
         para telefone: 65-999187823 <br> cnpj: 999.999/0001-99 <br>
         <a href="../forneCep.html">voltar para página inicial de cadastro de fornecedores</a>';
    }

    
    function validarTelefone(String $telefone){
        return preg_match('/^[0-9]{2}-[0-9]{9}/',$telefone);
    }

    function validarCnpj(String $cnpj){
        return preg_match('/^[0-9]{3}.[0-9]{3}\/0001.[0-9]{2}/',$cnpj);
    }
?>


        