<? if ($items): ?>
<div class="bloc-dyn">
<h2>Textes de références</h2>
<dl>
<? foreach($items as $item): ?>
	<? if ($item['type'] == 1): ?>
		<? $lien = $item['url'] ?>
	<? else: ?>
		<? $lien = $item['pdf']->item['path']; ?>
	<? endif; ?>
	<dt><?= a($lien, $item['titre']) ?></dt>
	<dd>par <?= $item['auteur'] ?></dd>
<? endforeach; ?>
</dl>
</div>
<? endif; ?>