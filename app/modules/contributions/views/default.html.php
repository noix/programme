<div class="sous-boite">
  <div class="autresContributions">
  <? if ($asso): ?>
  <?= a('contributions', 'Voir les contributions citoyennes') ?>
  <? else: ?>
  <?= a('contributions?type=asso', 'Voir les contributions d’associations') ?>
  <? endif; ?>
  </div>
  
	<? if ($this->items): ?>
	<dl class="contributions">
		<? foreach ($this->items as $item): ?>
			<? if ($item['perspective'] != $previousPerspective): ?>
				<? if($previousPerspective): ?>
					</ul>
				</dd>
				<? endif; ?>
			<dt><p><?= $item['perspective_numero'] ?></p></dt>
			<dd>
				<ul>
			<? endif; ?>
			<li>
				<p class="titre"><?= a($item['path'], $item['titre']) ?></p>
				<p class="auteur">par <?= $item['cercle'] ?></p>
			</li>
			<? $previousPerspective = $item['perspective'] ?>
		<? endforeach; ?>
		</ul>
		</dd>
	</dl>
	<? else: ?>
	<? endif; ?>
</div>
<? $commentaires->LoadView('commentaires'); ?>