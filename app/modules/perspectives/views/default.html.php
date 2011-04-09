<? if ($this->items): ?>
<ul class="tdm" id="table-des-matieres">
<? foreach ($this->items as $item): ?>
<? if ($item['header']): ?>
	<? if ($item['soustitre']): ?>
	<li class="header"><?= $item['soustitre'] ?></li>
	<? endif; ?>
	<li>
		<span class="numero"><?= $item['numero'] ?></span>
		<div><a href="#perspective-<?= $item['id'] ?>"><?= $item['texte'] ?></a></div>
	</li>
<? endif; ?>
<? endforeach; ?>
</ul>

<ul class="perspectives">
<? foreach ($this->items as $item): ?>
<? if ($item['soustitre']): ?>
<li class="entete<?= $item['first'] ? ' section' : '' ?>"><?= $item['soustitre'] ?></li>
<? endif ?>
<? if ($item['header'] && !$item['veryFirst']): ?>
	</ul>
</li>
<li id="perspective-<?= $item['id'] ?>">
<a class="top" href="#table-des-matieres">Retour à la table des matières</a>
<? else: ?>
<li id="perspective-<?= $item['id'] ?>">
<? endif; ?>
	<div class="numero"><?= $item['numero'] ?></div>
	<div class="texte">
		<?= TextRenderer::FormatText($item['texte']) ?>
		<? if (!$item['header']): ?>
		<p><?= a('contribuer?perspective='. $item['id'], 'Proposer un amendement') ?></p>
		<? endif; ?>
	</div>
<? if ($item['header']): ?>
	<ul>
<? else: ?>
</li>
<? endif; ?>
<? endforeach; ?>
	</ul>
</li>
</ul>
<? endif; ?>
