<?php

    //criando um objeto para atribuir os dados do via cep
    $dados = (object) [
        'cep' => '',
        'logradouro' => '',
        'bairro' => '',
        'localidade' => '',
        'uf' => '',
        'ibge' => ''
    ];

    //comparação para verificar se existe algum cep digitado
    if(isset ($_POST['cep'])){

        $cep = $_POST['cep'];
        
        //retirando caracteres que não compem o cep
        $cep = preg_replace('/[^0-9]/','',$cep);

        //tratando possiveis erros na digitação do CEP
        if(preg_match('/[^0-9]{5}-?[0-9]{3}$/',$cep)){
            
            $url = "https://viacep.com.br/ws/{$cep}/json/";

            $dados = json_decode(file_get_contents($url));     

        }else{
            $dados->cep = 'cep inválido';
        }        
    }
?>