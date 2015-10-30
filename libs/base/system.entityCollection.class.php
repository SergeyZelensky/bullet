<?php
class EntityCollection {
	private $collectionName;
	private $Collection = [];
	public function __construct($nameCollection) {
		$this->collectionName = strtolower($nameCollection);
	}
	public function push($unit) {
		$this->Collection[] = $unit;
	}
	protected function first() {
		return min(array_keys($this->Collection));
	}
	protected function last() {
		return max(array_keys($this->Collection));
	}
	public function pop() {
		return array_pop($this->Collection);
	}
	public function shift() {
		return array_shift($this->Collection);
	}
}
