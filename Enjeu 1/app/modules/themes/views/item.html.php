<?= YouTube::GetPlayerFromURL($adresseVideo, 'videotheme', 237, 203) ?>
<div class="sous-boite">
<?= $questions ?>
<? $this->DisplayNestedModule('lexique') ?>
</div>

<div class="dynamique themes">
<? $this->DisplayNestedModule('refs') ?>
<? $this->DisplayNestedModule('pointsvue') ?>
<? $this->DisplayNestedModule('contributions') ?>

<div class="bloc-dyn">
<h2>Téléchargements</h2>
<? $this->DisplayNestedModule('telechargements') ?>
</div>
</div>