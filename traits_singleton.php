<?php
trait TraitMySingleton {
	public static $object = null;
	public static function getObject() {
		if (self::$object == null) {
			self::$object = new self;
		}
		return self::$object; //на занятии тут self отсутствовал
	}                       //от этого долго не могла понять как делать о.О
	public function f() {
		echo 'Хорошая работа</br>';
	}
}

class MySingleton {
	use TraitMySingleton;

	private function __construct() {
		echo 'Поехали</br>';
	}
}

$obj = MySingleton::getObject();
$obj->f();