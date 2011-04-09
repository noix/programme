<? if ($items): ?>
<div id="lexique">
	<? foreach ($items as $item): ?>
		<p id="definition<?= $item['id'] ?>"><?= $item['definition'] ?></p>
	<? endforeach; ?>
</div>
<? endif; ?>