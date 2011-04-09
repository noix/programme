<?php

$queryParams = array(
	'fields' => 'titreCourt',
	'orderby' => 'sortIndex'
);

$this->template['themes'] = $this->FetchItems($queryParams);

?>