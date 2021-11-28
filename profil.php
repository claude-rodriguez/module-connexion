<?php
session_start();
// $bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion', 'root', '');
$bdd = new PDO('mysql:host=localhost;dbname=claude-rodriguez_moduleconnexion', 'claude', 'rodriguez');
if(isset($_SESSION['id']) && ($_SESSION['id'] > 0)){
    $requtilisateur = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');
    $requtilisateur->execute(array($_SESSION['id']));
    $infoutilisateur = $requtilisateur->fetch();

    if(isset($_POST['newlogin']) && !empty($_POST['newlogin']) && $_POST['newlogin'] != $infoutilisateur['login']){
        $login= $_POST['newlogin']; 
        $requetelogin = $bdd->prepare("SELECT * FROM utilisateurs WHERE login = ?"); // Vérifier encore une fois si le login existe déjà 
        $requetelogin->execute(array($login));
        $loginexist = $requetelogin->rowCount(); 

        if($loginexist !== 0){
            $msg = "Le login existe déjà !";
        }
        else { // Créer une nouvelle session avec le nouveau login
        $newlogin = htmlspecialchars($_POST['newlogin']);
        $insertlogin = $bdd->prepare("UPDATE utilisateurs SET login = ? WHERE id = ?");
        $insertlogin->execute(array($newlogin, $_SESSION['id']));
        $_SESSION['login']=$newlogin; 
        header('Location: profil.php');
        }
    }
    if(isset($_POST['newnom']) && !empty($_POST['newnom']) && $_POST['newnom'] != $infoutilisateur['nom'])
    {
        // Créer une nouvelle session avec le nouveau nom
        $newnom = htmlspecialchars($_POST['newnom']);
        $insertnom = $bdd->prepare("UPDATE utilisateurs SET nom = ? WHERE id = ?");
        $insertnom->execute(array($newnom, $_SESSION['id']));
        header('Location: profil.php');
    }
    if(isset($_POST['newprenom']) && !empty($_POST['newprenom']) && $_POST['newprenom'] != $infoutilisateur['prenom'])
    {
        // Créer une nouvelle session avec le nouveau prenom
        $newprenom = htmlspecialchars($_POST['newprenom']);
        $insertprenom = $bdd->prepare("UPDATE utilisateurs SET prenom = ? WHERE id = ?");
        $insertprenom->execute(array($newprenom, $_SESSION['id']));
        header('Location: profil.php');
    }
    if(isset($_POST['newmdp']) && !empty($_POST['newmdp']) && isset($_POST['newmdp2']) && !empty($_POST['newmdp2'])) { //Confirmation des 2 mdp
    $mdp1 = $_POST['newmdp'];
    $mdp2 = $_POST['newmdp2'];
        
        if($mdp1 == $mdp2)
        {
            $hachage = password_hash($mdp1, PASSWORD_BCRYPT);
            $insertmdp = $bdd->prepare("UPDATE utilisateurs SET password = ? WHERE id = ?");
            $insertmdp->execute(array($hachage, $_SESSION['id']));
            header('Location: profil.php');
        }
        else
        {
            $msg = "Vos mots de passes ne correspondent pas !";
        }
    }
    if(isset($_POST['newlogin']) && $_POST['newlogin'] == $infoutilisateur['login'])
    {
        header('Location: profil.php');
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
                    <li class="liheader"><a href="deconnexion.php">Deconnexion</a></li>
                </ul>
            </nav>
        
        </header>

        <main id="mainco">                  
            <form id="formco" method="post" >
                <div id="divco">                   
                    <h1>CHANGE PASSWORD</h1>                       
                    <p><LAbel class="w" for="newlogin"> NEW LOGIN: </LAbel>
                    <input class="w" id="newlogin" type="text" name="newlogin" required /></p>               
                    <p><LAbel class="w" for="newpassword"> NEW PASSWORD: </LAbel>
                    <input class="w" id="newpassword" type="password" name="newpassword" required /></p>
                    <p><LAbel class="w" for="confirm_newpassword"> CONFIRM NEW PASSWORD: </LAbel>
                    <input class="w" id="confirm_newpassword" type="password" name="confirm_newpassword" required /></p>
                    <P><input class="w" type="submit" value="Envoyer" /></P>                                                    
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
                        <a class="afooter" href="https://github.com/claude-rodriguez/module-connexion"><img class="footerlogo" src="photo/github.png" alt="github">Git Hub</a>                                                
                    </li>
                </ul>
            </nav>
        </footer>
            
    </body>
</html>
<?php
}
else 
{
header("Location: connexion.php"); //Si l'utilisateur n'est pas connecté, alors il sera renvoyé sur connexion.php
}
?>