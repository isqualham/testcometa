<?php

    $cep = '78217000';

    $url = "https://viacep.com.br/ws/{$cep}/json/";

    $endereco = file_get_contents($url);

    var_dump($endereco);
?>