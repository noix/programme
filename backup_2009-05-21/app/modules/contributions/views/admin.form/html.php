<? $form->Open() ?>
<?= $form->AutoItem('theme', $this->strings['fields']['theme']) ?>
<?= $form->AutoItem('cercle', $this->strings['fields']['cercle']) ?>
<?= $form->AutoItem('courriel', $this->strings['fields']['courriel']) ?>
<? if ($this->itemID): ?>
<div>
	<label>Participant·e·s</label>
	<div>
		<? $participants = $this->NestModule('participants') ?>
		<? $participants->LoadView('admin') ?>
	</div>
</div>
<? endif; ?>
<?= $form->AutoItem('type', $this->strings['fields']['type']) ?>
<?= $form->AutoItem('typePerspective', $this->strings['fields']['typePerspective']) ?>
<?= $form->AutoItem('titre', $this->strings['fields']['titre']) ?>
<?= $form->AutoItem('contribution', $this->strings['fields']['contribution']) ?>
<script type="text/javascript">
var oFCKeditor = new FCKeditor('form_contribution');
oFCKeditor.Width = '550';
oFCKeditor.Height = '512';
oFCKeditor.BasePath = "<?= ROOT ?>assets/js/fckeditor/";
oFCKeditor.ReplaceTextarea() ;
</script>
<?= $form->AutoItem('publier', $this->strings['fields']['publier']) ?>
<?= $form->Submit() ?>
<? $form->Close() ?>