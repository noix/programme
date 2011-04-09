<? if ($items): ?>
<ul>
	<? foreach($items as $id => $item): ?>
	<li><a href="participants?a=edit&amp;id=<?= $id ?>"><?= $item['prenom'] ?> <?= $item['nom'] ?></a>&nbsp; <?= $item['membre'] ? '<span class="disabled">Membre</span>' : '' ?></li>
	<? endforeach; ?>
</ul>
<? else: ?>
<span class="disabled">Aucun·e participant·e n'est associé·e à cette contribution.</span>
<? endif; ?>