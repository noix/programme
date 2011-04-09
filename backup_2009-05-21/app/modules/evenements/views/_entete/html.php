<div id="intro">
	<h3>Événement</h3>
	<h2><?= $this->item['titre'] ?></h2>
	<div class="details">
	<p>
	<? if ($this->item['plusieursJours']): ?>
		<?= $this->item['date']->DateRange($this->item['duree']) ?>
	<? else: ?>
		<?= $this->item['date']->SmartDateAndTime() ?>
	<? endif; ?>
	</p>
	<p><?= $this->item['lieu'] ?></p>
	</div>
	<p><?= $this->item['description'] ?></p>

</div>
			
<? $this->DisplayNestedModule('fleche', 2) ?>
