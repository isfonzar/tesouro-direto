<a href="https://packagist.org/packages/isfonzar/tesouro-direto"><img src="https://img.shields.io/badge/Language-PHP-brightgreen.svg" alt="Language"></a>
<a href="https://packagist.org/packages/isfonzar/tesouro-direto"><img src="https://img.shields.io/badge/License-MIT-blue.svg" alt="License"></a>
<a href="https://packagist.org/packages/isfonzar/tesouro-direto"><img src="https://img.shields.io/badge/Version-0.1-brightgreen.svg" alt="Latest Stable Version"></a>

## About *tesouro-direto* ![Language Badge]
*tesouro-direto* is a php library and module that retrieves information on Brazilian Public Debt ("Tesouro Direto") bonds and rates.
tesouro-direto is on beta. Pull Requests [are welcome](https://github.com/isfonzar/tesouro-direto#contributing)

## Installation

### Composer

```bash
$ composer require iiiicaro/sentiment-thermometer 
```

## Usage

### Basic usage

```php
<?php

require(__DIR__ . '/../vendor/autoload.php');

use isfonzar\TesouroDireto\TesouroDireto;

$tesouroDireto = new TesouroDireto();

print_r($tesouroDireto->fetch());
```

![](http://i.imgur.com/1TX9WWy.png)

## Contributing

### Developing

PRs are welcome. To begin developing, do this:

```bash
$ git clone https://github.com/isfonzar/tesouro-direto.git
$ cd tesouro-direto/
```

### Bug Reports & Feature Requests

Please use the [issue tracker](https://github.com/isfonzar/tesouro-direto/issues) to report any bugs or feature requests.
