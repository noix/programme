<?php

$_JAG['snippets']['titre'] = 'Pistes de réflexion';

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
		$this->template['listeTermes'][$id] = $id;
	}
}

?>