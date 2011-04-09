<?php

$queryParams = array(
	'fields' => array('titre', 'type', 'auteur', 'url', 'pdf'),
	'where' => 'theme = '. $this->parentModule->itemID,
	'orderby' => 'modified DESC'
);
$this->FetchItems($queryParams);

?>