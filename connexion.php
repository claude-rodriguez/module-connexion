<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion', 'root', '');
// $bdd = new PDO('mysql:host=localhost;dbname=claude-rodriguez_moduleconnexion', 'claude', 'rodriguez');
if(isset($_POST['Envoyer'])){
    $login = htmlspecialchars($_POST['login']);
    $password = $_POST['password'];

    if(!empty($login) AND !empty($password)){
        $requeteutilisateur = $bdd->prepare("SELECT * FROM utilisateurs WHERE login = ?"); // Vérifier si le login est le même que dans la base de données
        $requeteutilisateur->execute(array($login));
        $result = $requeteutilisateur->fetchAll();
                if (count($result) > 0){  // S'il n'y a pas de login trouvé dans la bdd, alors ça retourne "Mauvais Login"
                    $sqlPassword = $result[0]['password'];
                    if(password_verify($password, $sqlPassword)){ // Permet de vérifier si les 2 mots de passes sont identiques
                        $_SESSION['id'] = $result[0]['id'];  //créé une session avec les éléments de la table utilisateurs
                        $_SESSION['login'] = $result[0]['login'];
                        $_SESSION['nom'] = $result[0]['nom'];
                        $_SESSION['prenom'] = $result[0]['prenom'];
                        header("Location: index.php");   //Redirige sur la page accueil
                    }
                    else{ $erreur = "Mauvais login !"; }
                }
                    else{ $erreur = "Mauvais mot de passe !"; }

                    if ($_SESSION['login'] == 'admin'){  //Si le login et le mdp rentré est "admin" alors ça redirige sur la page admin à la place de profil.php
                        header("Location: admin.php");
                    }
    }
                    else{ $erreur = "Tous les champs doivent être remplis !"; }
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
                    <li class="liheader"><a href="inscription.php">Inscription</a></li>
                </ul>
            </nav>
        
        </header>

        <main id="mainco">   
            <?php
            $db = mysqli_connect ("localhost", "root", "", "moduleconnexion"); 
            if (isset($_POST["login"])and isset( $_POST["password"])){
                $sql = "SELECT * FROM utilisateurs WHERE login LIKE '$_POST[login]'AND'$_POST[login]'";
                $query = mysqli_query ($db, $sql);
                $result = mysqli_fetch_array($query);
                
                    if($result == NULL ){
                    echo "login or password not correct";                                
                    }
                    else{  
                        if($_POST["password"]==$result["password"]){
                        $_SESSION["username"] = $_POST["login"];
                        $_SESSION["id"] = $result[0];
                        $_SESSION["password"] = $_POST["password"];
                        echo ("Bonjour". $_POST["login"]);
                        $_SESSION['id']=$result['id'];
                        header ('Location:index.php');
                    } 
                        echo ("Bonjour". $_POST["login"]);
                    }
            mysqli_close($db);
            }
            ?>
            <form id="formco" method="post" action="connexion.php">
                <div id="divco">
                    <h1>CONNEXION</h1>
                
                    <p><LAbel class="w" for="newlogin">LOGIN: </LAbel>
                    <input id="newlogin" class="w" type="text" name="login"required  /></p>
                    <p><LAbel class="w" for="password"> PASSWORD: </LAbel>
                    <input id="password" class="w" type="password" name="password"required /></p>
                    <P><button class="w" type="submit" name="Envoyer" value="Envoyer">Envoyer </button> </P>

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
                        <a class="afooter" href=""><img class="footerlogo" src="photo/Instagram.png" alt="Instagram">Instagram</a>                        
                    </li>
                </ul>
            </nav>
        </footer>
            
    </body>
</html>
