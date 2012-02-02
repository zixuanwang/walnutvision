<?php
require_once sfConfig::get ( 'sf_lib_dir' ) . '/renren/requires.php';

class postComponents extends sfComponents {
	public function executeColorChoice()
	{
		$query = Doctrine::getTable('Color')->createQuery();
		$this->candidateColors = $query->execute();
	}
}
?>