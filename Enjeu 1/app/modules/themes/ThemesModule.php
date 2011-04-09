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
	
	function DefaultViewController() {
		$queryParams = array(
			'fields' => array('titreCourt', 'titreLong'),
			'orderby' => 'sortIndex'
		);
		$this->FetchItems($queryParams);
	}
	
	function ItemViewController() {
		$layoutVariables = array(
			'surtitre' => 'Réfléchir : '. $this->item['titreCourt'],
			'titre' => $this->item['titreLong'],
			'afficherVideo' => true,
			'intro' => $this->item['intro'],
			'titreCorps' => 'Pistes de réflexion',
			'afficherTheme' => true,
			'theme' => $this->itemID,
			'afficherEtape' => true,
			'etape' => 1
		);
		$this->layout->AddVariables($layoutVariables);

		// Charger le module lexique
		$lexique = $this->NestModule('lexique');

		// Loader les items
		$queryParams = array(
			'fields' => 'terme',
			'orderby' => "LENGTH(terme) DESC"
		);
		$lexique->FetchItems($queryParams);

		// Identifier les mots du lexique
		if ($lexique->items && $this->item['questions']) {
			$replace = array();
			foreach ($lexique->items as $id => $item) {
				$pattern = '/('. $item['terme'] .')(?![\d\w])/i';
				preg_match_all($pattern, $this->item['questions'], $matches);
				$replace[$item['id']] = $matches[0];

				// Replace matches with placeholders
				$this->item['questions'] = preg_replace($pattern, '%PLACEHOLDER'. $item['id'], $this->item['questions']);
			}

			foreach ($replace as $id => $array) {
				// Remplacer les placeholders par les termes
				while ($string = array_shift($array)) {
					$tag = e('span', array('class' => 'definir definition'. $id), $string);
					$this->item['questions'] = preg_replace('/%PLACEHOLDER'. $id .'(?![\d\w])/', $tag, $this->item['questions'], 1);
				}

				// Définir la liste des définitions qu'on doit afficher
				$this->view['listeTermes'][$id] = $id;
			}
		}
	}
	
	function EnteteViewController() {
		$queryParams = array(
			'fields' => 'titreCourt',
			'orderby' => 'sortIndex'
		);
		$this->view['themes'] = $this->FetchItems($queryParams);
	}
	
}

?>