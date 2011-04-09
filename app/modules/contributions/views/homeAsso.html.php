<? if ($items): ?>
<dl>
<? foreach($items as $item): ?>
	<dt>
		<p class="type"><?= $this->strings['typesModificationFrontend'][$item['typeModification']] ?> <?= $item['perspective_numero'] ?></p>
		<p class="titre brun"><?= a($item['path'], $item['titre']) ?></p>
	</dt>
	<dd>
		<p class="auteur">par <?= $item['cercle'] ?></p>
	</dd>
<? endforeach; ?>
</dl>
<?= a('contributions?type=asso', 'Voir toutes les contributions d’associations', array('class' => 'tout')) ?>
<? endif; ?>
