<?php
header('Content-Type: text/html; charset=utf-8');
require __DIR__ . '/../../../patterns/singleton/singleton.php';

use Patterns\Singleton as Singleton;

class SingletonTest1 extends Singleton {
	public $a = [];
}

class SingletonTest2 extends SingletonTest1 {
}

echo '<pre>';

echo '<b>РАБОТА С СИНГЛТОНАМИ</b>' . PHP_EOL . PHP_EOL;
// Параллельно обращаемся к синглтонам разных классов
SingletonTest1::getInstance()->a[] = 1;
SingletonTest2::getInstance()->a[] = 2;
SingletonTest1::getInstance()->a[] = 3;
SingletonTest2::getInstance()->a[] = 4;

print_r(SingletonTest1::getInstance()->a);
print_r(SingletonTest2::getInstance()->a);

echo '</pre>';
