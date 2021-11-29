<?php
session_start();
// $bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion', 'root', '');
$bdd = new PDO('mysql:host=localhost;dbname=claude-rodriguez_moduleconnexion', 'claude', 'rodriguez');
$bdd ->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_WARNING);
if (isset($_POST['Envoyer'])){
    $erreur = "";
    $login = htmlspecialchars($_POST['login']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $password = htmlspecialchars($_POST['password']);
    $confirmation = htmlspecialchars ($_POST['password1']);

if (!empty($_POST['login']) AND !empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['password']) AND !empty($_POST['password1'])){
    $loginlenght = strlen($login);
    $requete=$bdd->prepare("SELECT * FROM utilisateurs WHERE login = ? ");
    $requete->execute(array($login));
    $loginexist= $requete->rowCount();


    if ($loginlenght > 255)
    $erreur= "Votre pseudo ne doit pas depasser 255 caractères !";
    elseif($password !== $confirmation)
            $erreur="Les mots de passes sont differents !";
    if($loginexist !== 0)
    $erreur = "Login deja pris !";
    if($erreur == ""){
        $hashage = password_hash($password, PASSWORD_BCRYPT);
        $insertmbr= $bdd->prepare("INSERT INTO utilisateurs(login, prenom, nom, password) VALUES(?, ?, ?, ?)");
        $insertmbr->execute(array($login, $prenom, $nom, $hashage));
        header('location:connexion.php');
    }
}
    else{
        $erreur="Tout les champs doivent etre remplis !";
    }
}

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
                </ul>
            </nav>
        
        </header>

        <main id="mainco">
                    <?php
                    echo $erreur;
                    ?>
            
            <form id="formco" method="POST" action= "inscription.php">
                <div id="divco">                
                    <h1>INSCRIPTION</h1>  
                    <p><LAbel class="w" for="login">LOGIN: </LAbel>
                    <input id="login" class="w" type="text" name="login"  required  /></p>
                    <p><LAbel class="w" for="prenom">PRENOM: </LAbel>
                    <input id="prenom" class="w" type="text" name="prenom" required  /></p>
                    <p><LAbel class="w" for="nom">NOM: </LAbel>
                    <input id="nom" class="w" type="text" name="nom" required  /></p>
                    <p><LAbel class="w" for="password"> PASSWORD: </LAbel>
                    <input id="password" class="w" type="password" name="password"  required /></p>
                    <p><LAbel class="w" for="password1"> CONFIRM PASSWORD: </LAbel>
                    <input id="password1" class="w" type="password" name="password1"required /></p>
                    <P><button class="w" type="submit" name="Envoyer" value="">Envoyer </button> </P>
                </div>   
            </form>
            
                        
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
