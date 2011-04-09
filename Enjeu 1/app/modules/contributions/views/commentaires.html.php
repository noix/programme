<? if ($this->items): ?>
<div id="commentaires">
	<h3>Commentaires généraux</h3>
	<ul>
	<? foreach ($this->items as $item): ?>
		<li>
			<p><?= a($item['path'], $item['titre']) ?></p>
			<p class="auteur"><?= $item['cercle'] ?></p>
		</li>
	<? endforeach; ?>
	</ul>
</div>
<? endif; ?>
