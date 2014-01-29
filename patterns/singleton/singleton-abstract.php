<?php
namespace Patterns;

abstract class SingletonAbstract {

	protected static $instances = array();


	/**
	 * Возвращает синглтон
	 *
	 * @return static
	 */
	public static function getInstance() {
		$className = static::getClassName();
		if (!isset(self::$instances[$className])) {
			self::$instances[$className] = new $className();
		}
		return self::$instances[$className];
	}

	/**
	 * Удаляет синглтон
	 */
	public static function removeInstance() {
		$className = static::getClassName();
		if (isset(self::$instances[$className])) {
			unset(self::$instances[$className]);
		}
	}

	/**
	 * Возвращает имя синглтона
	 *
	 * @return string
	 */
	protected static function getClassName() {
		return get_called_class();
	}

	protected function __construct() {}

	protected function __clone() {}

	protected function __sleep() {}

	protected function __wakeup() {}
}