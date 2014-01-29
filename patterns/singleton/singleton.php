<?php
namespace Patterns;

require 'singleton-abstract.php';

class Singleton extends SingletonAbstract {

	/**
	 * Возвращает синглтон
	 *
	 * @return static
	 */
	final public static function getInstance() {
		return parent::getInstance();
	}

	/**
	 * Удаляет синглтон
	 */
	final public static function removeInstance() {
		parent::removeInstance();
	}
}