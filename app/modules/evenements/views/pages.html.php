<? if ($items): ?>
<dl class="participer">
	<? foreach($items as $item): ?>
	<dt>
		<?= a($item['path'], $item['titre']) ?>
	</dt>
	<dd>
		<span class="date"><?= $item['plusieursJours'] ? $item['date']->DateRange($item['duree']) : $item['date']->SmartDate() ?></span>
		<?= $item['lieu'] ?>
	</dd>
	<? endforeach; ?>
</dl>
<? else: ?>
	<p>Aucun événement n'est actuellement prévu.</p>
<? endif; ?>