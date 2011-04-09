<? if ($items): ?>
<div class="bloc-dyn">
<h2>Points de vue</h2>
<dl>
<? foreach($items as $item): ?>
	<dt><?= a($item['path'], $item['titre']) ?></dt>
	<dd>par <?= $item['auteur'] ?></dd>
<? endforeach; ?>
</dl>
</div>
<? endif; ?>