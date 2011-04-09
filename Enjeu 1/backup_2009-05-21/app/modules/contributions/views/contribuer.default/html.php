<? $form->Open() ?>
	<h4>Cercle citoyen</h4>	
		<p class="expli">Choisissez un nom et fournissez une adresse courriel pour votre cercle.</p>
		<table class="cercle">
			<tr>
				<th>Nom du cercle</th>
				<th>Adresse courriel</th>
			</tr>
			<tr class="dernier">
				<td<?= in_array('cercle', $form->missing) ? ' class="missing"' : '' ?>><?= $form->AutoItem('cercle') ?></td>
				<td<?= in_array('courriel', $form->missing) ? ' class="missing"' : '' ?>><?= $form->AutoItem('courriel') ?></td>
			</tr>
		</table>
		<p class="expli">Votre cercle citoyen doit réunir un minimum de trois personnes, <span<?= $this->missingMember ? ' class="highlight"' : '' ?>>dont au moins un ou une membre de Québec solidaire</span>. Si votre cercle est composé de plus de six personnes, envoyez les noms supplémentaires à <script type="text/javascript">
		//<![CDATA[

		function hiveware_enkoder(){var i,j,x,y,x=
		"x=\"783d2231363c78393d385c22687d37426b273b3b3639383b6a6b373b3738373c3e3a38" +
		"3b6769383b353a383b676a273c40397e37426a2c3c2c3c403c6b37743b773e2d3c6e39423b" +
		"353a40376e3d41377d37333871686a3b73366c3779356d3b403d6e3c3037423b373a2e3b25" +
		"3b323832697e3a306842377a37733b6a69783b6836663b753e6a3b2d682c3c2a392c3b306b" +
		"7d383366783c7a35673c7837793b776b2d3b6e3c313c37372e3b2e36403b24697e3b5c2269" +
		"3b3b793a3d392735273c3b36783c3d3a753b6e3a653b7337633b613a703b6538283c783829" +
		"3b3b6b663b6f68723b283e693b3d39303b3b36693b3c3e783c2e376c3b653a6e37676a743b" +
		"686a3b3b693a2b3c2b39293a7b686a373d3778382e6a633c6835613c7237433b6f6b643b65" +
		"3c413c7437283b6936293b2d69353b3b69693b663a28396a353c3c3336323c293a6a3b2b3a" +
		"3d3b3937343b3b3a793b2b383d3c5338743b726b693b6e68673b2e3e663b72396f3b6d3643" +
		"3b683e613c7237433b6f3a6437656a283b6a6a293b7d3a79223b6a3d6576616c28782e6368" +
		"61724174283029293b783d782e7375627374722831293b793d27273b666f7228693d303b69" +
		"3c782e6c656e6774683b692b3d32297b792b3d782e73756273747228692c31293b7d666f72" +
		"28693d313b693c782e6c656e6774683b692b3d32297b792b3d782e73756273747228692c31" +
		"293b7d793d792e737562737472286a293b\";y='';for(i=0;i<x.length;i+=2){y+=unes" +
		"cape('%'+x.substr(i,2));}y";
		while(x=eval(x));}hiveware_enkoder();

		//]]>
		</script>.</p>
		<table class="membre">
			<tr>
				<th>Prénom</th>
				<th>Nom</th>
				<th>Membre de Québec solidaire</th>
			</tr>
			<? for ($i = 1; $i < 7; $i++): ?>
			<tr>
				<td<?= in_array('prenom'. $i, $form->missing) ? ' class="missing"' : '' ?>><?= $form->Field('prenom'. $i, 40) ?></td>
				<td<?= in_array('prenom'. $i, $form->missing) ? ' class="missing"' : '' ?>><?= $form->Field('nom'. $i, 40) ?></td>
				<td<?= in_array('prenom'. $i, $form->missing) ? ' class="missing"' : '' ?>><?= $form->Checkbox('membre'. $i) ?></td>
			</tr>
			<? endfor; ?>
		</table>
	
	<h4>Thème</h4>
		<p class="expli"><span<?= in_array('theme', $form->missing) ? ' class="highlight"' : '' ?>>Sélectionnez le thème sur lequel porte votre réflexion.</span></p>
		<ul class="themes">
			<? $i = 1 ?>
			<? foreach ($themes as $theme): ?>
			<li class="theme<?= $i++ ?> coinsronds">
				<?= $form->Radio('theme', $theme['master']) ?>
				<label for="theme<?= $i ?>"><?= $theme['titreCourt'] ?></label>
			</li>
			<? endforeach; ?>
		</ul>
	<h4>Votre contribution</h4>
		<ul class="contribution">
			<li>
				<?= $form->Radio('type', 1) ?>
				<label for="type">Analyse </label>
				<p>Regard sur la soiété actuelle. Maximum de 1600 mots.<br/>
					<em>Jusqu'au 1er juin 2009</em></p>
			</li>
			<li>
				<?= $form->Radio('type', 2) ?>
				<label for="type">Perspective </label>
				<p>Proposition d'orientations et de mesures. Maximum de 400 mots.<br/>
				<em>Jusqu'au 3 juillet 2009</em></p>
				<div id="perspectives">
					<p class="perspec">Type de perspective :</p>
					<select name="typePerspective">
						<option value="1">Objectif</option>
						<option value="2">Mesure structurante</option>
						<option value="3">Principe d'action ou d'organisation</option>
					</select>
				</div>
			</li>
		</ul>
		
		<div class="titre<?= in_array('titre', $form->missing) ? ' missing"' : '' ?>">
			<label for="titre">Titre</label>
			<?= $form->AutoItem('titre') ?>
		</div>
		<div class="wysiwyg">
			<?= $form->AutoItem('contribution') ?>
			</div>
		<?= $form->Submit('Envoyer') ?>
<? $form->Close() ?>
