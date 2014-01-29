<?php
header('Content-Type: text/html; charset=utf-8');
require __DIR__ . '/../../../patterns/singleton/multi-singleton.php';

use Patterns\MultiSingleton as MultiSingleton;

class MultiSingletonTest1 extends MultiSingleton {
	public $a = [];
}

class MultiSingletonTest2 extends MultiSingletonTest1 {
}

echo '<pre>';

echo '<b>РАБОТА С СИНГЛТОНАМИ</b>' . PHP_EOL . PHP_EOL;
// Параллельно обращаемся к синглтонам разных классов
MultiSingletonTest1::getInstance(1)->a[] = 1;
MultiSingletonTest1::getInstance(2)->a[] = 2;
MultiSingletonTest2::getInstance(1)->a[] = 3;
MultiSingletonTest2::getInstance(2)->a[] = 4;
MultiSingletonTest1::getInstance(1)->a[] = 5;
MultiSingletonTest1::getInstance(2)->a[] = 6;
MultiSingletonTest2::getInstance(1)->a[] = 7;
MultiSingletonTest2::getInstance(2)->a[] = 8;

print_r(MultiSingletonTest1::getInstance(1)->a);
print_r(MultiSingletonTest1::getInstance(2)->a);
print_r(MultiSingletonTest2::getInstance(1)->a);
print_r(MultiSingletonTest2::getInstance(2)->a);

echo '</pre>';
