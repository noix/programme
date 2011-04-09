<? if ($items): ?>
<div id="grosses-boites">
	<? $i = 1; ?>
	<? foreach($items as $item): ?>
	<div class="theme<?= $i++ ?> coinsronds">
		<?= a($item['path'], $item['titreCourt']) ?>
		<p><?= $item['titreLong'] ?></p>
	</div>
	<? endforeach; ?>
</div>
<? endif; ?>
