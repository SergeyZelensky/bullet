<?php
class authController {
	private $view;
	private $model;
	public function loging() {
		$this->model = new authModel();
		$this->model->AuthRevise();
		$this->view = new defaultView;
		$this->view->render(Null, 'base');
	}
}