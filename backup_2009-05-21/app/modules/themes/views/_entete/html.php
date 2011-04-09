<div id="intro">
<h3>Réfléchir : <?= $titreCourt ?></h3>
<h2><?= $titreLong ?></h2>
<div class="themes">
	<p class="themes"><?= $intro ?></p>
	<div class="video themes">
		<div id="videotheme"></div>
	</div>
</div>
</div>

<?= YouTube::GetPlayerFromURL($adresseVideo, 'videotheme', 237, 203) ?>

<div id="themes-nav">
	<h3>Les thèmes</h3>
	<div id="themes">
		<? $this->LoadView('entete') ?>
	</div>
</div>

<? $this->DisplayNestedModule('fleche', 1) ?>