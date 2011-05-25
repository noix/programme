<? if ($items): ?>
<div id="lexique">
	<? foreach ($items as $item): ?>
		<div id="definition<?= $item['id'] ?>"><?= $item['definition'] ?></div>
	<? endforeach; ?>
</div>
<? endif; ?>