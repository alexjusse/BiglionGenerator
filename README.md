BiglionGenerator
================

Генератор след кодов для biglion.ru

###Пример использования

```php
$str = 'SBGLQKKM8S2';
for ($x = 0; $x++ < 10;) {
    $str = BiglionGenerator::get_next($str);
    echo $str.'<br>';
}
```