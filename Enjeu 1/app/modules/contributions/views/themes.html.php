<? if ($items): ?>
<div class="bloc-dyn">
<h2>Contributions</h2>
<dl>
<? foreach($items as $item): ?>
	<dt><?= a($item['path'], $item['titre']) ?></dt>
	<dd>par <?= $item['cercle'] ?></dd>
<? endforeach; ?>
</dl>
</div>
<? endif; ?>