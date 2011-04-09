<?php

class HomeModule extends Module {
	
	function DefaultViewController() {
		$this->LoadViewInLayoutVariable('presentation');
		$this->view['contributions'] = $this->NestModule('contributions');
	}
	
	function PresentationViewController() {
		$this->view['youTubeURL'] = $this->config['youTubeURL'];
	}
	
}

?>