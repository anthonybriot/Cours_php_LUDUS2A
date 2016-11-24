<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>Connexion</title>
    </head>
    <body>
        <?php
            if (!empty($_SESSION['PSEUDO'])){
                echo 'Bonjour '.$_SESSION['PSEUDO'].' !';
				echo '<a href="deconnexion.php"> se deconnecter</a>';
            }else{
                ?>
                    <p>
                        Inscription :<br/><br/>
                        <form action="inscription.php" method="POST">
                            <label id="pseudo">Pseudo</label><br/>
                            <input type="text" name="pseudo"/><br/><br/>
                            <label id="mdp">Mot de passe</label><br/><input type="password" name="mdp"/><br/>
                            <input type="submit" value="Valider" />
                        </form><br/><br/>
                        Connexion :<br/><br/>
                        <form action="connexion.php" method="POST">
                            <label id="pseudo">Pseudo</label><br/>
                            <input type="text" name="pseudo"/><br/><br/>
                            <label id="mdp">Mot de passe</label><br/><input type="password" name="mdp"/><br/>
                            <input type="submit" value="Valider" />
                        </form>
                    </p>
                <?php
            }
        ?>
    </body>
</html>