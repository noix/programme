<ul class="perspectives-formulaire">
<? if ($this->items): ?>
<? foreach($this->items as $id => $item): ?>
<li id="perspective-<?= $id ?>">
	<div class="numero"><?= $item['numero'] ?></div>
	<div class="texte"><?= TextRenderer::FormatText($item['texte']) ?></div>
</li>
<? endforeach; ?>
<? endif; ?>
</ul>