<div class="sous-boite">
<?= $questions ?>
<? $this->DisplayNestedModule('lexique') ?>
</div>

<div class="dynamique themes">
<? $this->DisplayNestedModule('refs') ?>

<? $this->DisplayNestedModule('pointsvue') ?>

<div class="bloc-dyn">
<h2>Téléchargements</h2>
<? $this->DisplayNestedModule('telechargements') ?>
</div>
</div>