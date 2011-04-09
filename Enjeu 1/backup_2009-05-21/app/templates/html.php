<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?= $_JAG['title'] ? $_JAG['title'] .' – ' : '' ?>Programme de Québec solidaire</title>
	<link rel="stylesheet" href="<?= ROOT ?>assets/css/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?= ROOT ?>assets/css/screen.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?= ROOT ?>assets/js/jquery.js"> </script>
	<script type="text/javascript" src="<?= ROOT ?>assets/js/swfobject.js"> </script></head>
	<script type="text/javascript" src="<?= ROOT ?>assets/js/qs.js"> </script>
	<script type="text/javascript" src="<?= ROOT ?>assets/js/fckeditor/fckeditor.js"> </script>
</head>
<body>

	<div id="top" class="boite">
		<div id="logo">
			<a href="<?= ROOT ?>"><img src="<?= ROOT ?>assets/images/logo.png" alt="Logo"/></a>
			<p>Vers notre programme</p>
		</div>
		<div id="presentation">
			<h1>Bâtir ensemble un Québec solidaire</h1>
			<?= $_JAG['superviews']['presentation'] ?>
			<ul class="menu">
				<li><a href="<?= ROOT ?>accueil"<?= $_JAG['request'] == 'accueil' ? ' class="actif"' : '' ?>>Accueil</a></li>
				<li><a href="<?= ROOT ?>demarche"<?= $_JAG['request'] == 'demarche' ? ' class="actif"' : '' ?>>La démarche</a></li>
				<li><a href="<?= ROOT ?>enjeu"<?= $_JAG['request'] == 'enjeu' ? ' class="actif"' : '' ?>>À propos de l'enjeu</a></li>
				<li><a href="http://www.quebecsolidaire.net/">Site officiel du parti</a></li>
			</ul>
		</div>
	</div>

	<div class="couleur">
		<div class="boite">
			<?= $_JAG['superviews']['entete'] ?>
			<div class="clear">&nbsp;</div>
		</div>
	</div>
	
	<? if ($_JAG['snippets']['titre']): ?>
	<div id="titre">
		<div class="boite">
			<h2><?= $_JAG['snippets']['titre'] ?></h2>
		</div>
	</div>
	<? endif; ?>
	<div class="navigation">
		<div class="boite">
			<?= $_JAG['body'] ?>	
			<div class="clear">&nbsp;</div>
		</div>
	</div>
</body>
</html>
