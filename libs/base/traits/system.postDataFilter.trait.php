<?php
trait postDataFilter {
	protected function filteringVar($index, $flag) {
		$var = $_POST[$index];
		switch ($flag) {
		case 'int':

			break;
		case 'string':

			break;

		}
	}
}