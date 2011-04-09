<? if ($themes): ?>
<ul class="themes">
	<? $i = 1; ?>
	<? foreach ($themes as $item): ?>
	<li><?= a(
		$item['path'],
		e('span', array('class' => 'titre'), $item['titreCourt']),
		array('class' => 'theme'. $i++ .' coinsronds'. ($_JAM->rootModule->layout->variables['theme'] == $item['master'] ? ' selected' : ''))
	) ?></li>
	<? endforeach; ?>
</ul>
<? endif; ?>