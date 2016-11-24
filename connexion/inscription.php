<?php
    session_start();
	
	//vérification des champs remplis
    if (isset($_POST['pseudo']) and isset($_POST['mdp']) and !empty($_POST['pseudo']) and !empty($_POST['mdp'])){
        if(!$f = fopen("fichier.txt","a+")){ //écriture
	
			
            header('Location:index.php');
            exit();    
        }else{
			$texte = file("fichier.txt");
			foreach($texte as $line=>$valeur)
			{
				$test[$line] = $valeur;
			}
			if (empty($test[0]))
			{
				fwrite($f,htmlspecialchars($_POST['pseudo'])."\n".htmlspecialchars($_POST['mdp']));
				fclose($f);
				header('Location:index.php');
			}else
				{
					header('Location:index.php');
				}
        }
    }else{
        header('Location: index.php');
        exit();     
    }
?>