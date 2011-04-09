<? $this->DisplayNestedModule('blocs', 'Accueil') ?>
<div class="video">
	<div id="videoaccueil">
	Désolé, le visionnement de ce vidéo nécessite <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Flash 8</a>.
	</div>
</div>

<?= YouTube::GetPlayerFromURL($youTubeURL, 'videoaccueil', 237, 203) ?>