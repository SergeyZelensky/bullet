<?php
class Router {
	use extensionCreator;
	private $Controller;
	public function listen() {
		$data = array_shift(($this->orm->searchAlias($this->parseUrl())));

		$controllerName = $data->controller . 'Controller';
		$this->Controller = new $controllerName();
		$action = $data->action;
		$this->Controller->$action($data->id);
	}
	# ##### #### Здесь происходит все связанное с добавлением маршрута ##########
	protected function parseUrl() {
		return rtrim(trim($_SERVER['REQUEST_URI'], '/'), '.html');
	}
}