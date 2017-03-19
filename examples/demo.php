<?php

    require(__DIR__ . '/../vendor/autoload.php');

    use isfonzar\TesouroDireto\TesouroDireto;

    $tesouroDireto = new TesouroDireto();

    print_r($tesouroDireto->fetch());