<?php

class EvenementsModule extends Module {
	
	function ItemViewController() {
		// Determine date
		if ($this->item['plusieursJours']) {
			$date = $this->item['date']->DateRange($this->item['duree']);
		} else {
			$date = $this->item['date']->SmartDateAndTime();
		}
		$dateString = e('p', $date);
		$lieuString = e('p', $this->item['lieu']);
		$detailsString = e('div', array('class' => 'details'), $dateString . $lieuString);
		$introString = $detailsString . e('p', $this->item['description']);
		
		$templateVariables = array(
			'surtitre' => 'Événements',
			'titre' => $this->item['titre'],
			'intro' => $introString,
			'afficherEtape' => true,
			'etape' => 3
		);
		$this->layout->AddVariables($templateVariables);
	}
	
	function HomeViewController() {
		$queryParams = array(
			'fields' => array('titre', 'date', 'duree', 'plusieursJours', 'lieu'),
			'where' => 'date > NOW()',
			'orderby' => 'date ASC'
		);
		$this->FetchItems($queryParams);
	}
	
	function PagesViewController() {
		$queryParams = array(
			'fields' => array('titre', 'date', 'duree', 'plusieursJours', 'lieu'),
			'where' => 'date > NOW()',
			'orderby' => 'date ASC'
		);
		$this->FetchItems($queryParams);
	}

	function ThemesViewController() {
		$queryParams = array(
			'fields' => array('titre', 'date', 'lieu'),
			'where' => array('date > NOW()', 'theme = '. $this->parentModule->itemID),
			'orderby' => 'date ASC'
		);
		$this->FetchItems($queryParams);
	}
	
}

?>