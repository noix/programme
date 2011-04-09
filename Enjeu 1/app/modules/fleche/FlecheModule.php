<?php

class FlecheModule extends Module {
	
	function DefaultViewController() {
		$this->view['etape'] = $this->itemID;
	}
	
}

?>