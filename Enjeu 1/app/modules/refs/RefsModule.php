<?php

class RefsModule extends Module {
	
	function ThemesViewController() {
		$queryParams = array(
			'fields' => array('titre', 'type', 'auteur', 'url', 'pdf'),
			'where' => 'theme = '. $this->parentModule->itemID,
			'orderby' => 'modified DESC'
		);
		$this->FetchItems($queryParams);
	}
	
}

?>