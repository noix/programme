<?php

class TelechargementsModule extends Module {
	
	function DefaultViewController() {
		$queryParams = array(
			'fields' => array('titre', 'fichier'),
			'where' => 'publier IS TRUE',
			'orderby' => 'titre ASC'
		);
		$this->FetchItems($queryParams);
	}
	
}

?>