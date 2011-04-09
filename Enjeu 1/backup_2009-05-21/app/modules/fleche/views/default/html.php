<ul id="etapes"<?= $etape ? ' class="etape'. $etape .'"' : '' ?>>
	<li id="etape1"<?= $etape == 1 ? ' class="selected"' : '' ?>>
		<div class="digit">
			<span>1</span>
		</div>
		<div class="description">
			<?= a('reflechir', 'Réfléchir') ?>
			<p>S'informer sur les thèmes</p>
		</div>
	</li>
	<li id="etape2"<?= $etape == 2 ? ' class="selected"' : '' ?>>
		<div class="digit">
			<span>2</span>
		</div>
		<div class="description">
			<?= a('echanger', 'Échanger') ?>
			<p>Participer aux débats</p>
		</div>
	</li>
	<li id="etape3"<?= $etape == 3 ? ' class="selected"' : '' ?>>
		<div class="digit">
			<span>3</span>
		</div>
		<div class="description">
			<?= a('contribuer', 'Contribuer') ?>
			<p>Remplir le formulaire</p>
		</div>
	</li>
</ul>
