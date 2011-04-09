<?php

class BlocsModule extends Module {
	
	function FetchItem($item) {
		if (is_numeric($item)) {
			parent::FetchItem($item);
		} else {
			// Fetch according to title
			$queryParams = array(
				'fields' => array('titre', 'texte'),
				'where' => "titre = '". $item ."'",
				'limit' => 1
			);
			$this->FetchItems($queryParams);
			$this->item = reset($this->items);
		}
		return true;
	}
	
}

?>