<?php
/**
 * Вспомогательные функции для работы с массивами.
 */

/**
 * Транспонирует двумерный массив
 *
 * @param array $array
 * @return array
 */
function transpose($array) {
	array_unshift($array, null);
	return call_user_func_array('array_map', $array);
}
