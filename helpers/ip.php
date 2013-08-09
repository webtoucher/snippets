<?php
/**
 * Вспомогательные функции для работы с IP-адресом.
 * Можно использовать для хранения IP-адресов в базе в виде числа,
 * что ускорит поиск и сократит расходуемое пространство.
 */

/**
 * Максимальное значение числа, в которое можно конвертировать IP-адрес
 */
const IP_LONG_MAX = 4294967295;

/**
 * Конвертирует IP-адрес в число
 *
 * @param string $ip IP-адрес
 * @return integer|float число
 * @throws Exception выкидывает, если строка не соответствует формату 0.0.0.0
 */
function ipToLong($ip) {
	$ipArr = explode('.', $ip);
	if (count($ipArr) != 4) {
		throw new Exception("Неверный IP '$ip'.");
	}
	return $ipArr[0] * 0x1000000 + $ipArr[1] * 0x10000 + $ipArr[2] * 0x100 + $ipArr[3];
}

/**
 * Конвертирует число в IP-адрес
 *
 * @param integer|float $long число в диапазоне 0...4294967295
 * @return string IP-адрес
 * @throws Exception выкидывает, если число не входит в указанный диапазон
 */
function longToIp($long) {
	if ($long < 0 || $long > IP_LONG_MAX) {
		throw new Exception("Значение '$long' нельзя преобразовать в верный IP.");
	}
	$ipArr = [
		0b11111111 & $long >> 24,
		0b11111111 & $long >> 16,
		0b11111111 & $long >> 8,
		0b11111111 & $long,
	];
	return implode('.', $ipArr);
}
