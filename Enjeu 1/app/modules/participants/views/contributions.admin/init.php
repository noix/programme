<?php

$queryParams = array(
	'fields' => array('nom, prenom, membre'),
	'where' => 'contribution = '. $this->parentModule->itemID
);
$this->FetchItems($queryParams);

?>