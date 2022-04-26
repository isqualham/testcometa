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

        $url = "https://viacep.com.br/ws/{$cep}/json/";

        $dados = json_decode(file_get_contents($url));
    }
?>