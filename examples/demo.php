<?php

    require(__DIR__ . '/../vendor/autoload.php');

    use isfonzar\TesouroDireto\TesouroDireto;

    $ch = curl_init("http://www.tesouro.fazenda.gov.br/tesouro-direto-precos-e-taxas-dos-titulos");

    $lines_string=curl_exec($ch);

    var_dump($lines_string); exit;