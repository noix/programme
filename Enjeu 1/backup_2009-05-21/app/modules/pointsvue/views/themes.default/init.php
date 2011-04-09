<?php

$queryParams = array(
	'fields' => array('titre', 'auteur'),
	'where' => 'theme = '. $this->parentModule->itemID,
	'orderby' => 'modified DESC'
);
$this->FetchItems($queryParams);

?>