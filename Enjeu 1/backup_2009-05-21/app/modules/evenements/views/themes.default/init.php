<?php

$queryParams = array(
	'fields' => array('titre', 'date', 'lieu'),
	'where' => array('date > NOW()', 'theme = '. $this->parentModule->itemID),
	'orderby' => 'date ASC'
);
$this->FetchItems($queryParams);

?>