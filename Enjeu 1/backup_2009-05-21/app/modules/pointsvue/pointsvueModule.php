<?php

class PointsvueModule extends Module {
	
	function GetPath() {
		$themesModule = Module::GetNewModule('themes', $this->item['theme']);
		if ($path = $themesModule->item['path'] .'/'. String::PrepareForURL($this->item['titre'])) {
			return $path;
		} else {
			trigger_error("Couldn't get path for item", E_USER_ERROR);
			return false;
		}
	}
	
}

?>