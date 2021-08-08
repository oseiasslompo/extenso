# PHP Extenso

Escreve número por extenso

## Instalation

Para instalar use o composer:

```shell
composer require oseias/extenso
```

## Basics

O método setValue pode receber valores numéricos, string ou float, com qualquer separador. Ex.: 1,123.12, 1.123,12, 1123.12 ou 1123,12.

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