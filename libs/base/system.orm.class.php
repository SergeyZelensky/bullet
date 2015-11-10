<?php
class orm {
	protected $db;
	public function __construct() {
		$this->db = Kernel::get('database');
	}
	################################ Работа  с ссылками ##################################
	public function addAliasResource($idResource, $aliasResource, $parentCategory, $controller, $action) {
		$sth = $this->db->prepare('INSERT INTO `aliases` (`id`,`alias`,`parent`,`controller`,`action`) VALUES (?, ?, ?, ?, ? ) ');
		$sth->execute(array($idResource, $aliasResource, $parentCategory, $controller, $action));
	}

	# return data to url pages
	public function searchAlias($alias) {
		$sth = $this->db->prepare('SELECT * FROM `aliases` WHERE `alias`=?');
		$sth->execute(array($alias));
		return $sth->fetchAll(PDO::FETCH_CLASS, 'urlResource');
	}
}