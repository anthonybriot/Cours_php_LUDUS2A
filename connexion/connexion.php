<?php
    session_start();

    $texte = file("fichier.txt");
    foreach($texte as $line=>$valeur){
        $test[$line] = $valeur;
    }
		
    if (isset($_POST['pseudo']) and !empty($_POST['pseudo']) and isset($_POST['mdp']) and !empty($_POST['mdp']))
	{
        if ($_POST['pseudo'] == trim($test[0]) and $_POST['mdp'] == trim($test[1]))
		{
            $_SESSION['PSEUDO'] = $_POST['pseudo'];
			header('Location: index.php');
        }else
		{
			header('Location:index.php');
		}
    }else{
		header('Location:index.php');
	}
    
?>

