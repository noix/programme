<div id="big-bloc">
<? $this->DisplayNewModule('fleche') ?>
<div class="clear">&nbsp;</div>
<div class="colonne">
	<h3>Contributions d’associations</h3>
	<? $contributions->LoadView('homeAsso') ?>
	<h3>Cahier de perspectives</h3>
	<ul>
		<li><?= a('sinformer', 'Consulter les perspectives en ligne') ?></li>
		<li><a href="<?= ROOT ?>documents/Perspectives.pdf">Télécharger en format PDF (122 ko)</a></li>
		<li><a href="<?= ROOT ?>documents/lettre_pres_4.pdf">Lettre de présentation – Fichier PDF (88 ko)</a></li>
	</ul>
</div>
<div class="colonne">
	<h3>Contributions citoyennes</h3>
	<? $this->DisplayNestedModule('contributions') ?>
</div>
<div class="colonne">
	<h3>Événements</h3>
	<? $this->DisplayNestedModule('evenements') ?>
</div>
</div>
