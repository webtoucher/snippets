<?php
header('Content-Type: text/html; charset=utf-8');
require __DIR__ . '/../../classes/bitmask.php';

class BitmaskTest {

	const FLAG_FIRST  = 0b0001;
	const FLAG_SECOND = 0b0010;
	const FLAG_THIRD  = 0b0100;
	const FLAG_FOURTH = 0b1000;
	const FLAG_ALL    = 0b1111;

	protected $flags;


	public function modFlags($bitmask) {
		Bitmask::modFlags($this->flags, $bitmask);
	}

	public function isFlagFirstSet() {
		return Bitmask::isFlagSet($this->flags, self::FLAG_FIRST);
	}

	public function isFlagSecondSet() {
		return Bitmask::isFlagSet($this->flags, self::FLAG_SECOND);
	}

	public function isFlagThirdSet() {
		return Bitmask::isFlagSet($this->flags, self::FLAG_THIRD);
	}

	public function isFlagFourthSet() {
		return Bitmask::isFlagSet($this->flags, self::FLAG_FOURTH);
	}
}


echo '<pre>';

echo '<b>РАБОТА С ФЛАГАМИ</b>' . PHP_EOL . PHP_EOL;
$flags = new BitmaskTest();

// Поднимем все флаги кроме третьего
$flags->modFlags(~$flags::FLAG_THIRD);

echo (int) $flags->isFlagFirstSet(),
     (int) $flags->isFlagSecondSet(),
     (int) $flags->isFlagThirdSet(),
     (int) $flags->isFlagFourthSet();

echo '</pre>';
