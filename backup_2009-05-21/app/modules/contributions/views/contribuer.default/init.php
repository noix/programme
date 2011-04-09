<?php

$form = $this->GetForm();

$themes = Module::GetNewModule('themes');
$queryParams = array(
	'fields' => 'titreCourt',
	'orderby' => 'sortIndex'
);
$themes->FetchItems($queryParams);

$this->template['themes'] = $themes->items;

?>