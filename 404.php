<html>
<head>
    <title><?php wp_title('|',true,'left'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body id="messtyles">
<?php
get_header();
?>
<div class="contenuprincipal">
	<hr class="divider">
	<h1 id="titreh1" class="text-center">La page demandée n'existe pas</h1>
	<hr class="divider bas">

	<div class="contenu">
		<p>La page demandée n'existe pas. Voici les pages disponibles sur Apical&nbsp;:</p>
		<ul>
			<li><a href="https://apical.xyz">Accueil</a></li>
			<li><a href="https://apical.xyz/formations">Formations</a></li>
			<li><a href="https://apical.xyz/articles">Blogue</a></li>
			<li><a href="https://apical.xyz/apropos">À propos</a></li>
			<li><a href="https://apical.xyz/contact">Contact</a></li>
		</ul>
	</div>

	<div class="push"></div>
</div>

<?php
get_footer();
?>
</body>
</html>
