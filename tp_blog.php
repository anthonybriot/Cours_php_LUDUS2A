<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Tp_blog</title>
		<link rel="stylesheet" href="style.css">
		<script src="script.js"></script>
	</head>
	
	<body>
		<header>
			<h1>Blog</h1>
		</header>
		
		<form action="#" method="POST">
			<p>
				<label for="nom">Pseudo : </label><input type="text" name="pseudo" />
				<br/>
				<br/>
				<label for="prenom">Titre : </label><input type="text"  name="titre" />
				<br/>
				<br/>
				<label for="prenom">Message : </label><input type="textarea"  name="message" />
				<br/>
				<br/>
				<input type="submit" value="Poster" />
				
			</p>
		</form>
	</body>
	<div class="php">
		<?php

			date_default_timezone_set('Europe/Paris');
				$jour = date('d');
				$mois = date('m');
				$annee = date('y');
				$heure = date('h');
				$minute = date('i');
			
			echo '<h2>'.($_POST['titre'].'</h2>');
			echo '<br/>';
			echo '<h3>'.($_POST['pseudo'].'</h3>');
			echo '<br/>';
			echo 'Le ' .$jour.'/'.$mois.'/'.$annee.' à '.$heure.'h'.$minute.'.';
			echo '<br/>';
			echo ($_POST['message']);
		?>
</div>

</html>









