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
		print_r($this->rules[array_search($seat, $this->rules)]);
		///print_r($this->rules);

	}
	public function addAlias($controller, $action, $alias) {
		$new = [$action => ['action' => $action, 'controller' => $controller, 'alias' => $alias]];
		$fd = fopen($this->Path, 'a');
		fwrite($fd, serialize($new) . "\n");

	}
}