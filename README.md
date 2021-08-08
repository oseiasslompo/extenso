# extenso
Escreve número por extenso

Usage:

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