<?php
class defaultView {
	private $data;
	public function render($data, $tempalte) {
		$this->data = $data;
		include BACKEND . 'templates/' . $tempalte . '.tpl';
	}
	public function layout($layout) {
		include BACKEND . 'templates/layout/' . $layout . '.tpl';
	}
}