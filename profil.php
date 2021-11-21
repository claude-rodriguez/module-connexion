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
                    <li class="liheader"><a href="">Deconnexion</a></li>
                </ul>
            </nav>
        
        </header>

        <main>
        <main id="mainco">               
        <?php                       
            $db = mysqli_connect ("localhost", "root", "", "livreor");
            if (isset($_SESSION["username"])){ 
                if (isset($_POST["newlogin"])and isset($_POST["newpassword"])){
                    if($_POST["newlogin"]==""or $_POST["newpassword"]==""){
                    echo"conditions non remplies";
            }
                    else{
                    mysqli_query ($db, "UPDATE utilisateurs SET login = '$_POST[newlogin]',password = '$_POST[newpassword]'WHERE id = '$_SESSION[id]'");
                    $_SESSION["username"] = $_POST["newlogin"];
                    echo "modification réussi";}
                    if(isset($_POST["deconnexion"])){
                    session_destroy() ;
                    header('location:index.php');
            }
            }                             
            }
        ?>
            <form id="formco" method="post" >
                <div id="divco">                   
                    <h1>CHANGE PASSWORD</h1>                       
                    <p><LAbel class="w" for="newlogin"> NEW LOGIN: </LAbel>
                    <input class="w" id="newlogin" type="text" name="newlogin" required /></p>               
                    <p><LAbel class="w" for="newpassword"> NEW PASSWORD: </LAbel>
                    <input class="w" id="newpassword" type="password" name="newpassword" required /></p>
                    <p><LAbel class="w" for="confirm_newpassword"> CONFIRM NEW PASSWORD: </LAbel>
                    <input class="w" id="confirm_newpassword" type="password" name="confirm_newpassword" required /></p>
                    <P><input class="w" type="submit" value="Envoyer" /> </P>                                                    
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
