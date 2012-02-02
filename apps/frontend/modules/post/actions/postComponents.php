<?php

require_once ('lib/vendor/symfony/lib/action/sfComponents.class.php');

class postComponents extends sfComponents {
	public function executeColorChoice()
	{
		$query = Doctrine::getTable('Color')->createQuery();
		$this->colorList = $query->execute();
	}
}

?>