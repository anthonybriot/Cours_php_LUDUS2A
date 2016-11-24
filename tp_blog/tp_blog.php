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
		
		<div class="php">
			<?php
			date_default_timezone_set('Europe/Paris');
					$jour = date('d');
					$mois = date('m');
					$annee = date('y');
					$heure = date('h');
					$minute = date('i');
					
					
				//On vérifie que le formulaire est rempli	
				if (isset($_POST['titre']) and isset($_POST['pseudo']) and isset($_POST['message']) and !empty($_POST['titre']) and !empty($_POST['pseudo']) 
					and !empty($_POST['message'])){
						//On ouvre le fichier avec a+ pour écrire dedans et le créer s'il n'existe pas
						$f = (fopen("fichier.txt", 'a+'));
						//On écrit sur une ligne du fichier
						fputs($f, '<h2>'.$_POST['titre'].'</h2><br> <h3>'.$_POST['pseudo'].'</h3><br> Le ' .$jour.'/'.$mois.'/'.$annee.' à '.$heure.'h'.$minute.'. <br>' .$_POST['message'].'<br><br>');
						//On ferme le fichier
						fclose($f);
					}
				//On ré-ouvre le fichier, cette fois en mode lecture	
				$f = (fopen("fichier.txt", 'r+'));
				//On choisis de lire une ligne du fichier texte
				$message = fgets($f);
				//On affiche le message
				echo $message;
				//On ferme à nouveau le fichier texte
				fclose($f);
				
				/* // test d'affichage de chaque valeur
				
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
				*/
			?>
		</div>

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
</html>









