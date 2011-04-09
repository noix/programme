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
	
	function DefaultViewController() {
		$layoutVariables = array(
			'titreCorps' => $this->item['titre'],
			'surtitre' => 'Réfléchir&nbsp;: Quelle stratégie?',
			'titre' => 'Points de vue',
			'intro' => "Les Points de vue sont des contributions qui ont été commandées par l'équipe de programme. Ils vous sont suggérés comme lecture afin d'alimenter votre réflexion sur les enjeux et vous montrer la diversité des opinions, des théories et des tendances des membres de Québec solidaire. Vous pouvez utiliser ces textes comme point de départ et y réagir, ou alors écrire votre contribution en partant d'ailleurs.",
			'afficherTheme' => true,
			'theme' => $this->item['theme'],
			'afficherEtape' => true,
			'etape' => 1
		);
		$this->layout->AddVariables($layoutVariables);
	}
	
	function ThemesViewController() {
		$queryParams = array(
			'fields' => array('titre', 'auteur'),
			'where' => 'theme = '. $this->parentModule->itemID,
			'orderby' => 'modified DESC'
		);
		$this->FetchItems($queryParams);
	}
	
}

?>