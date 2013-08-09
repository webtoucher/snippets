<?php
/**
 * Класс для работы с флагами.
 */
class Bitmask {

	/**
	 * Проверяет по битовой маске, поднят(ы) ли указанный(е) флаг(и)
	 *
	 * @param integer $flags - флаги в битовом представлении, например 0b01010101
	 * @param integer $bitmask - битовая маска
	 * @return bool
	 */
	public static function isFlagSet($flags, $bitmask) {
		return (($flags & $bitmask) == $bitmask);
	}

	/**
	 * Изменяет значения флагов согласнно битовой маске
	 *
	 * @param integer $flags - флаги в битовом представлении, например 0b01010101
	 * @param integer $bitmask - битовая маска
	 * @return void
	 */
	public static function modFlags(&$flags, $bitmask) {
		$flags |= $bitmask;
	}
}