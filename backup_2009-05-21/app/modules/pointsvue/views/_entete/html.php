<div id="intro">
	<h3>Réfléchir: <?= $this->item['theme_titreCourt'] ?></h3>
	<h2>Points de vue</h2>
	<p>Les Points de vue sont des contributions qui ont été commandées par l'équipe de programme. Ils vous sont suggérés comme lecture afin d'alimenter votre réflexion sur les enjeux et vous montrer la diversité des opinions, des théories et des tendances des membres de Québec solidaire. Vous pouvez utiliser ces textes comme point de départ et y réagir, ou alors écrire votre contribution en partant d'ailleurs.</p>
</div>

<div id="themes-nav">
	<h3>Les thèmes</h3>
	<div id="themes">
		<? $themesModule->LoadView('entete') ?>
	</div>
</div>

<? $this->DisplayNestedModule('fleche', 2) ?>