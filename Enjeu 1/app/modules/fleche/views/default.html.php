<ul id="etapes"<?= $etape ? ' class="etape'. $etape .'"' : '' ?>>
	<li id="etape1"<?= $etape == 1 ? ' class="selected"' : '' ?>>
		<div class="digit">
			<span>1</span>
		</div>
		<div class="description">
			<?= a('sinformer', 'S’informer') ?>
			<p>Lire les perspectives</p>
		</div>
	</li>
	<li id="etape2"<?= $etape == 2 ? ' class="selected"' : '' ?>>
		<div class="digit">
			<span>2</span>
		</div>
		<div class="description">
			<?= a('contribuer', 'Contribuer') ?>
			<p>Proposer un amendement</p>
		</div>
	</li>
	<li id="etape3"<?= $etape == 3 ? ' class="selected"' : '' ?>>
		<div class="digit">
			<span>3</span>
		</div>
		<div class="description">
			<?= a('participer', 'Participer') ?>
			<p>Décider ensemble</p>
		</div>
	</li>
</ul>
