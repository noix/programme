<?php

class ThemesModule extends Module {
	
	function GetPath() {
		if ($path = String::PrepareForURL($this->item[$this->keyFieldName])) {
			return 'reflechir/'. $path;
		} else {
			trigger_error("Couldn't get path for theme", E_USER_ERROR);
			return false;
		}
	}
	
}

?>