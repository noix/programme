<? if ($items): ?>
<dl>
	<? foreach($items as $item): ?>
	<dt><?= a($item['path'], $item['titre']) ?></dt>
	<dd><?= $item['plusieursJours'] ? $item['date']->DateRange($item['duree']) : $item['date']->SmartDateAndTime() ?>, <?= $item['lieu'] ?></dd>
	<? endforeach; ?>
</dl>
<? else: ?>
	<p>Aucun événement n'est actuellement prévu.</p>
<? endif; ?>