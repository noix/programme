<?php

class PerspectivesModule extends Module {

	function DefaultViewController() {
		$this->FetchItems();
	}
	
	function ContributionsViewController() {
		$this->FetchItems();
	}
	
	function FormatData() {
		foreach ($this->processedData as $id => $item) {
			// Check whether this is the very first item
			if (!$veryFirst) {
				$item['veryFirst'] = true;
				$veryFirst = true;
			}
			
			if (strlen($item['numero']) < 4) {
				// Item is in the form X.X
				$item['header'] = true;
			}
			// Check what's the first digit of this item
			$previousFirstDigit = $firstDigit;
			$firstDigit = substr($item['numero'], 0, 1);
			
			if ($previousFirstDigit != $firstDigit) {
				// This is the first item of a section
				$item['first'] = true;
			}
			
			// Insert formatted item back into object
			$this->processedData[$id] = $item;
		}
	}
	
}

?>