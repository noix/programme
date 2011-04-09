<? if ($items): ?>
<? foreach($items as $item): ?>
<div class="downl">
	<? $path = $item['fichier']->item['path'] ?>
	<?= a($path, i('assets/images/download.png', 'Télécharger')) ?>
	<p><?= a($path, $item['titre']) ?></p>
	<p>Fichier PDF (<?= String::BytesToString($item['fichier']->item['filesize']) ?>)</p>
</div>
<? endforeach; ?>
<? endif; ?>
