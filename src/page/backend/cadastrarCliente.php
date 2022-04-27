<?php
    include("conexao.php");

    $nome     = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf      = $_POST['cpf'];
    $cep      = $_POST['cep'];
    $rua      = $_POST['rua'];
    $bairro   = $_POST['bairro'];
    $cidade   = $_POST['cidade'];
    $estado   = $_POST['estado'];
    $ibge     = $_POST['ibge'];

    if((validarTelefone($telefone) && validarCpf($cpf))){
        $sql ="INSERT INTO cliente(nome,telefone,cpf,cep,rua,bairro,cidade,estado,ibge)
        VALUES ('$nome', '$telefone', '$cpf', '$cep', '$rua', '$bairro', '$cidade', '$estado', '$ibge')";

        if(mysqli_query($conexao, $sql)){
            echo "Fornecedor cadastrado com sucesso";
        }else{
            echo "não foi possível realizar o cadastro".mysqli_connect_error();
        }

        mysqli_close($conexao);
    }else{
        echo 'telefone ou cnpj digitado errado siga os exemplos <br>
         para telefone: 65-999187823 <br> cpf: 99999999999 <br>
         <a href="../forneCep.html">voltar para página inicial de cadastro de fornecedores</a>';
    }

    
    function validarTelefone(String $telefone){
        return preg_match('/^[0-9]{2}-[0-9]{9}/',$telefone);
    }

    function validarCpf(String $cpf){
        return preg_match('/^(\d{3})(\d{3})(\d{3})(\d{2})/',$cpf);
    }
?>


        