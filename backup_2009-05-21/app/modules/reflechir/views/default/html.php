<div id="ref-themes">
			<h3>Les thèmes</h3>
			<p>L'enjeu est divisé en quatre thèmes. Chacun contient une vidéo explicative, des textes de référence, des pistes de réflexion et des événements pertinents.</p>

<? $themes = $this->NestModule('themes') ?>
<? $themes->LoadView('entete') ?>

		</div>

		<div id="ressources">
			<h3>Ressources</h3>
			<p>Des <strong>personnes ressources</strong> sont prêtes à animer une activité d'un cercle ou d'une association qui voudrait l'organiser. Pour profiter de leur soutien, écrire à <a href="mailto: programme@quebecsolidaire.net">programme@quebecsolidaire.net</a></p>
			<p>Les <strong>associations locales et régionales</strong> peuvent vous soutenir dans l'organistion et l'animation des cercles citoyens. Consultez le <a href="http://quebecsolidaire.net">site web national de Québec solidaire</a> pour connaître les associations près de chez-vous.</p>
			<p>Sur chacune des pages thématiques, vous retrouvez des <strong>textes de références</strong> qui présentent des <strong>points de vue différents</strong> sur les questions abordées. Vous pourrez y consulter également une <strong>bibliographie commentée</strong> et un <strong>lexique</strong>.</p> 
			<p>Il est possible de <strong>commander du matériel</strong> en s'adressant au bureau national de Québec solidaire:</p>
			<ul>
				<li>Un <strong>DVD</strong> rassemblant tous les vidéos explicatifs et l'ensemble du cahier de participation</li>
				<li>Des <strong>formats papier</strong> de tout le matériel disponible sur ce site web</li>	
			</ul>
			<p id="adresse">S'adresser à :<br/>
			Québec solidaire, 7105, St-Hubert bureau 304<br/>
			Montréal (QC) H2S 2N1<br/>
			514.278.9014 / 1 866 278.9014</p>
		</div>

		<div id="telechargement">
			<h3>Téléchargement</h3>
			<? $this->DisplayNestedModule('telechargements') ?>
		</div>		
