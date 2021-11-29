<?php
$bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion', 'root', '');
// $bdd = new PDO('mysql:host=localhost;dbname=claude-rodriguez_moduleconnexion', 'claude', 'rodriguez');
$bdd ->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_WARNING);
$membres = $bdd->query('SELECT * FROM utilisateurs ORDER BY id DESC LIMIT 0,5'); //requete pour récuperer les informations des membres

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
                    <li class="liheader"><a href="deconnexion.php">Deconnexion</a></li>
                </ul>
            </nav>
        
        </header>

        <main id="mainadmin">
            <div id="divadmin">
                <h2>Administration</h2> <br>
                    <ul>
                        <?php while($m = $membres->fetch()) { ?>
                        <li class="liadmin"><?= $m['id'] ?>- LOGIN : <?= $m['login'] ?> PRENOM :<?= $m['prenom'] ?> NOM :<?= $m['nom'] ?></a></li>
                        <?php } ?>
                    </ul><br>
            </div>
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
                        <a class="afooter" href=""><img class="footerlogo" src="photo/github.png" alt="github">Git Hub</a>                                               
                    </li>
                </ul>
            </nav>
        </footer>
            
    </body>
</html>
