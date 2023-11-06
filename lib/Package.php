<?php

namespace MichealPearce\Theme;

use ArrayAccess;

class Package implements ArrayAccess {
	private static Package|null $instance = null;

	public static function getInstance() {
		if (is_null(self::$instance))
			self::$instance = new self();
		return self::$instance;
	}

	private array $data;

	private function __construct() {
		$this->data = json_decode(file_get_contents(MICHEALPEARCEDEV_THEME_PATH . 'package.json'), true);
	}

	public function offsetExists(mixed $offset): bool {
		return isset($this->data[$offset]);
	}

	public function offsetGet(mixed $offset): mixed {
		return $this->data[$offset];
	}

	public function offsetSet(mixed $offset, mixed $value): void {
		$this->data[$offset] = $value;
	}

	public function offsetUnset(mixed $offset): void {
		unset($this->data[$offset]);
	}
}