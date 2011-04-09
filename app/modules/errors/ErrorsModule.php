<?php

class ErrorsModule extends Module {
	
	function DefaultViewController() {
		global $_JAM;
		
		$_JAM->title = $this->strings['title'];
		$layoutVariables = array(
			'titre' => $this->strings['title'],
			'intro' => $this->strings['text'],
			'afficherEtape' => true
		);
		$this->layout->AddVariables($layoutVariables);
	}
	
}

?>