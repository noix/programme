<? if ($publier): ?>
<p class="auteur">par <?= $cercle ?></p>
<div class="sous-boite">
<? if ($phase == 2): ?>
	<? if ($typeModification != 4): ?>
	<? switch ($typeModification):
		case 1:
			$typeString = 'est un amendement à';
			break;
		case 2:
			$typeString = 's’inscrit immédiatement avant';
			break;
		case 3:
			$typeString = 's’inscrit immédiatement après';
			break;
	endswitch; ?>
	<p>Cette contribution <?= $typeString ?> la perspective <strong><?= $perspective_numero ?></strong>:</p>
	<div class="perspective">
		<div class="texte"><?= TextRenderer::FormatText($perspective_texte) ?></div>
	</div>
	<? else: ?>
	<p>Cette contribution est un commentaire général sur l’ensemble des perspectives.</p>
	<? endif; ?>
<? endif; ?>
<?= $contribution ?>
</div>
<div id="autresContributions">
	<h3>Contributions reliées</h3>
	<? if ($autresContributions): ?>
	<dl>
		<? foreach ($autresContributions as $contribution): ?>
		<dt><?= a($contribution['path'], $contribution['titre']) ?></dt>
		<dd>
			<p class="auteur"><?= $contribution['cercle'] ?></p>
		</dd>
		<? endforeach; ?>
	</dl>
	<? else: ?>
	<p class="vide">Aucune autre contribution <?= $asso ? 'd’association' : 'citoyenne' ?> n’a été publiée pour la perspective <?= $perspective_numero ?>.</p>
	<? endif; ?>
	<? if ($asso): ?>
	<?= a('contributions?type=asso', 'Toutes les contributions d’associations', array('class' => 'tout')) ?>
	<? else: ?>
	<?= a('contributions', 'Toutes les contributions citoyennes', array('class' => 'tout')) ?>
	<? endif; ?>
</div>
<? endif; ?>