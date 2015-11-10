<?php
class auth {
	public function isAuth() {
		if (!isset($_SESSION['administrator']) or empty($_SESSION['administrator'])) {
			return false;
		} else {
			return true;
		}
	}
}