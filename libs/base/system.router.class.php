<?php
class router {
	protected $rules;
	protected $Path;
	public function __construct($params) {
		$this->Path = $params['rules'];
		$fd = fopen($this->Path, 'r');
		while (!feof($fd)) {
			$this->rules[] = unserialize(fgets($fd));
		}
	}
	public function tree() {
		$seat = trim($_SERVER['REQUEST_URI'], '/');

		$this->searchAlias($seat);

	}
	public function addAlias($controller, $action, $alias, $id) {
		$new = ['alias' => $alias, 'action' => $action, 'controller' => $controller, 'id' => $id];
		$fd = fopen($this->Path, 'a');
		fwrite($fd, serialize($new) . "\n");

	}
	private function searchAlias($alias) {
		if (!empty($this->rules)) {
			$start = microtime(true);
			foreach ($this->rules as $rule) {
				if ($alias == $rule['alias']) {
					return $rule;
					break;
				}
			}
			echo "время выполнения скрипта: " . round((microtime(true) - $start), 3) . "\n";
		}
	}
}