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
                    <li class="liheader"><a href="deconnexion.php">Deconnexion</a></li>
                    <li class="liheader"><a href="inscription.php">Inscription</a></li>
                </ul>
            </nav>
        
        </header>

        <main>
            <h2 id="h2main"><a href="">NOS PC GAMING</a></h2>
            <nav id="navmain">
                <ul id="ulmain">                   
                    <li class="mainli"><img class="imgmain" src="photo/pcgaming1.jfif" alt="pcgaming1"></a><a href=""><h3 class="h3main">Entrée de gamme</h3></a></li>
                    <li class="mainli"><img class="imgmain" src="photo/pcgaming2.jfif" alt="pcgaming2"></a><a href=""><h3 class="h3main">Milieu de gamme</h3></a></li>
                    <li class="mainli"><img class="imgmain" src="photo/pcgaming3.jfif" alt="pcgaming3"></a><a href=""><h3 class="h3main">Professionnel</h3></a></li>
                </ul>
            </nav>
            <h2 id="h2main"><a href="">NOS PC DE BUREAU</a></h2>
            <nav id="navmain">
                <ul id="ulmain">                   
                    <li class="mainli"><img class="imgmain" src="photo/pcbureau1.jfif" alt="pcbureau1"></a><a href=""><h3 class="h3main">Entrée de gamme</h3></a></li>
                    <li class="mainli"><img class="imgmain" src="photo/pcbureau2.jfif" alt="pcbureau2"></a><a href=""><h3 class="h3main">Milieu de gamme</h3></a></li>
                    <li class="mainli"><img class="imgmain" src="photo/pcbureau3.jfif" alt="pcbureau3"></a><a href=""><h3 class="h3main">Professionnel</h3></a></li>
                </ul>
            </nav>
            <h2 id="h2main"><a href="">NOS PC PORTABLE</a></h2>
            <nav id="navmain">
                <ul id="ulmain">                   
                    <li class="mainli"><img class="imgmain" src="photo/portable1.jfif" alt="portable1"></a><a href=""><h3 class="h3main">Entrée de gamme</h3></a></li>
                    <li class="mainli"><img class="imgmain" src="photo/portable2.jfif" alt="portable2"></a><a href=""><h3 class="h3main">Milieu de gamme</h3></a></li>
                    <li class="mainli"><img class="imgmain" src="photo/portable3.jfif" alt="portable3"></a><a href=""><h3 class="h3main">Professionnel</h3></a></li>
                </ul>
            </nav>

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
