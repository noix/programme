<?php

class PagesModule extends Module {
	
	function GetPath() {
		return String::PrepareForURL($this->item['pagePath']);
	}
	
	function ItemViewController() {
		// Include all item data as template variables
		$this->layout->AddVariables($this->item);

		// Load text blocks related to this module
		$blocs = Module::GetNewModule('blocs');
		$queryParams = array(
			'where' => 'page = '. $this->itemID
		);
		$blocs->FetchItems($queryParams);
		if ($blocs->items) {
			foreach ($blocs->items as $item) {
				$this->view[String::PrepareForURL($item['titre'])] = $item['texte'];
			}
		}

		// Use specified path as a way to load views
		$path = $this->item['pagePath'];
		$this->LoadView($path);
	}
	
	function ContribuerViewController() {
		$this->DisplayNestedModule('contributions');
	}
	
}

?>