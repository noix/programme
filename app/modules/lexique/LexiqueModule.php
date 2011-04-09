<?php

class LexiqueModule extends Module {
	
	function ThemesViewController() {
		if ($listeTermes = $this->parentModule->view['listeTermes']) {
			foreach ($listeTermes as $id) {
				$whereChunks[] = 'lexique.id = '. $id;
			}
			$whereString = implode(' OR ', $whereChunks);
			$queryParams = array(
				'fields' => array('terme', 'definition'),
				'where' => $whereString,
				'orderby' => 'lexique.terme'
			);
			$this->items = $this->FetchItems($queryParams);
		}
	}
	
}

?>