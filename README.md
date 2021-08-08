# PHP Extenso

Escreve número por extenso

## Instalation

Para instalar use o composer:

```shell
composer require oseias/extenso
```

## Usage

Para utilizar:

```php
	<?php
	use Oseias\Extenso;
	$extenso = new Extenso;
	try {
		$extenso->setValue('123,12');
		$extenso->setCurrency('BRL');
		$resExtenso = $extenso->getInFull($extenso);
		echo '$resExtenso';
	} catch (\Throwable $e) {
		echo $e->getMessage();
		echo $e->getCode();
	}
```

## Requirements
- Necessário PHP 7.0 ou superior