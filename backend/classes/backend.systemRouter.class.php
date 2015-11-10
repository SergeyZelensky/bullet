<?php
class systemRouter {
	private $controller;
	public function listen() {
		if (Kernel::get('auth')->isAuth()) {
		} else {
			$this->controller = new authController;
			$this->controller->loging();
		}
	}
}