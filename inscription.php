<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Estonia&family=Noto+Sans+KR:wght@100&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="connexion.css">
    <title>ACCUEIL</title>
</head>

    <body>

        <header>

            <div>
                <div id="titre">               
                    <h1 id="titre1"><a href="index.php"> MICRO-INFORMATIQUE</a></h1>
                </div>              
            </div>
            <nav id="navheader">
                <ul id="ulheader">
                    <li class="liheader"><a href="index.php">Accueil</a></li>
                    <li class="liheader"><a href="profil.php">Profil</a></li>
                    <li class="liheader"><a href="connexion.php">Connexion</a></li>
                    <li class="liheader"><a href="index.php">Deconnexion</a></li>
                </ul>
            </nav>
        
        </header>

        <main id="mainco">
            
            <form id="formco" method="POST" action= "inscription.php">
                <div id="divco">
                    <h1>INSCRIPTION</h1>  
                    <p><LAbel class="w" for="login">LOGIN: </LAbel>
                    <input id="login" class="w" type="text" name="login" minlength="5" required  /></p>
                    <p><LAbel class="w" for="prenom">PRENOM: </LAbel>
                    <input id="prenom" class="w" type="text" name="prenom" required  /></p>
                    <p><LAbel class="w" for="nom">NOM: </LAbel>
                    <input id="nom" class="w" type="text" name="nom" required  /></p>
                    <p><LAbel class="w" for="password"> PASSWORD: </LAbel>
                    <input id="password" class="w" type="password" name="password" minlength="5" required /></p>
                    <p><LAbel class="w" for="password1"> CONFIRM PASSWORD: </LAbel>
                    <input id="password1" class="w" type="password" name="password1"required /></p>
                    <P><button class="w" type="submit" name="Envoyer" value="Envoyer">Envoyer </button> </P>
                </div>   
            </form>
                <?php
                    //   connexion à la base de donnée
                    $db = mysqli_connect ("localhost", "root", "", "moduleconnexion"); 

                    //   indiquer l'insertion dans la base de donnée    
                    if (isset($_POST['login'], $_POST['password'])){
                        $sql = "INSERT INTO utilisateurs (login, prenom, nom, password) VALUES ('$_POST[login]','$_POST[prenom]','$_POST[nom]','$_POST[password]')";

                    // si on utilise envoyer et si password est identique à password 1

                    if ($_POST["Envoyer"] == "Envoyer" and $_POST["password"] == $_POST["password1"]) {

                    //   instruction à la base de donnée
                    mysqli_query ($db, $sql);

                    //   si requete ok rediriger sur page de connexion
                    header ('Location:connexion.php');
                    }
                    //   si requete pas ok indiquer que le password est invalide
                    elseif ($_POST["Envoyer"] == "Envoyer" and $_POST["password"] !== $_POST["password1"]){
                        echo  "<p class=\"w\">ATTENTION MOT DE PASSE INVALIDE</p>";
                    }
                    }
                    //   fermeture connection avec database
                    mysqli_close($db);

                ?>
                        
        </main>
        <footer>
            <nav id="navfooter">
                <ul id="ulfooter1">
                    <h2 id="h2contactfooter1">Contact:</h2>
                    <li><a class="afooter" href="">Qui Sommes Nous ?</a></li>
                    <li><a class="afooter" href="">FAQ</a></li>
                    <li><a class="afooter" href="">Conditions générales</a></li>
                </ul>
                <ul id="ulfooter2">
                    <h2 ID="h2contactfooter2">BESOIN D'AIDE ?</h2>
                    <li><a class="afooter" href="">Questions Fréquentes</a></li>
                    <li><a class="afooter" href="">Modes De Livraison</a></li>
                    <li><a class="afooter" href="">Modes De Règlement</a></li>
                </ul>
                <ul id="ulfooter3">
                    <h2 id="h2contactfooter3">Réseaux-Social:</h2>
                    <li id="socialfooter">
                        <a class="afooter" href=""><img class="footerlogo" src="photo/twitter.png" alt="Twitter">Twitter</a>
                        <a class="afooter" href=""><img class="footerlogo" src="photo/logofacebook.jpg" alt="Facebook">Facebook</a>
                        <a class="afooter" href=""><img class="footerlogo" src="photo/Instagram.png" alt="Instagram">Instagram</a>                        
                    </li>
                </ul>
            </nav>
        </footer>
            
    </body>
</html>
