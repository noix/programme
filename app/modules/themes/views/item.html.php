<?= YouTube::GetPlayerFromURL($adresseVideo, 'videotheme', 237, 203) ?> 
<div class="sous-boite">
<div class="questions"><?= $questions ?></div>
<? $this->DisplayNestedModule('lexique') ?>
</div>

<div class="dynamique themes">

  <? if($cahier): ?>
  <div class="bloc-dyn">
    <h2>Cahier de formation</h2>
    <div class="downl">
    	<? $path = $cahier->item['path'] ?>
    	<?= a($path, i('assets/images/download.png', 'Télécharger')) ?>
    	<p><?= a($path, 'Télécharger le cahier de formation') ?></p>
    	<p>Fichier PDF (<?= String::BytesToString($cahier->item['filesize']) ?>)</p>
    </div>
  </div>
  <? endif; ?>


<? $this->DisplayNestedModule('refs') ?>
<? $this->DisplayNestedModule('pointsvue') ?>
<? $this->DisplayNestedModule('contributions') ?>

<div class="bloc-dyn">
<h2>Téléchargements</h2>
<? $this->DisplayNestedModule('telechargements') ?>
</div>

</div>
