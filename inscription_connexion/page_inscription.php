<?php require "../securite/bd-setup.php"; require "../securite/functions.php"; createSession();

    
    if(isset($_POST['formconnexion'])) { //si l'utilisateur clique sur 'Connexion'
        $bdd = new PDO('mysql:host=localhost;dbname=schobz_data_demo', 'root', 'root');
        $mailconnect = htmlspecialchars($_POST['username']);
        $mdpconnect = sha1($_POST['password']);

        if (!empty($mailconnect) AND !empty($mdpconnect)) {

            $requser = $bdd->prepare("SELECT * FROM personne_inscription WHERE mail = ? AND motdepasse = ?");
            $requser->execute(array($mailconnect, $mdpconnect));
            $userexist = $requser->rowCount(); //ca va compter le nombre de colonnes qui existent avec les informations qui ont été mises

            if($userexist == 1){
                $userinfo = $requser->fetch();

                $_SESSION['userinfototal'] = $userinfo;
                $_SESSION['mail'] = $userinfo ['mail'];
                $_SESSION['password'] = $userinfo ['password'];
                $_SESSION['prenom'] = $userinfo ['prenom'];
                $_SESSION['nom'] = $userinfo ['nom'];
                $_SESSION['date_de_naissance'] = $userinfo ['date_de_naissance'];
                $_SESSION['numerodepermis'] = $userinfo ['numerodepermis'];
                $_SESSION['numeroautoecole'] = $userinfo ['numeroautoecole'];


                echo '<script language="Javascript">
                 document.location.replace("../profil_utilisateur/profil_utilisateur_apercu_du_compte.php");
                 </script>';

            }

            else {
                echo $erreur = "Vous avez rentré un mauvais mail ou mot de passe";
            }
        }
        else{
            $erreur = "tous les champs doivent être complétés";
        }
    }

?>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="page_inscription.css">
        <link rel='stylesheet' type='text/css' href='../footer_header/footer_header.css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <title>Inscription et connexion</title>

    </head>

    <body>
        <!--HEADER-->
        <?php
        require "../footer_header/header.php"; 
        ?>

        <div class="fond">
            <div class="form-box">
                <?php 
                    echo '
                        <form method="POST" class="button-box">
                            <input type="submit" id="selectPage" name="connexion" class="toggleBTN toggleBTNGauche" value="Connexion"/>
                            <input type="submit" id="selectPage" name="inscription" class="toggleBTN toggleBTNDroite" value="Inscription"/>
                        </form>';

                if (isset($_POST['inscription']) OR $_GET['goConfirmed']) {
                    displayInscription(chooseDisplayInscription());
                } else {
                    echo '
                        <!--CONNEXION-->
                        <form  id="connexion" class="Connexion" method="post" >
                            <label>
                                <input type="text" name="username" class="identif"
                                    placeholder="Identifiant" required>
                            </label>
        
                            <label>
                                <input type="password" name="password" class="identif"
                                    placeholder="Mot de passe" required>
                            </label>
        
                            <label>
                                <input type="checkbox" class="check-box1"/> Sauvegarder le mot de passe
                            </label>
        
                            <button type="submit" name ="formconnexion" class="connex1">Connexion</button>
                            <input type="button" class="Motdepasseoubliee" onclick="window.location.href="#mdp_oublie";" value="Mot de passe oublié">
                        </form>
        
                        <!--POPUP MOT DE PASSE OUBLIE-->
                        <div id="mdp_oublie" class="overlay">
                            <div class="popup">
                                <h2>
                                    Merci de renseigner votre adresse mail.
                                    <br/> Nous vous y enverrons un email pour réinitialiser votre mot de passe.
                                </h2>
                                <a class="close" href="#">&times;</a>
                                <span class="content">
                                <br/> <input class="mdp_mail_imput" type="text" name="email" placeholder="E-mail" >
                                </span>
                                <button type="submit" class="valider">Valider </button>
                            </div>
                        </div>';
                }
               ?>

                <!--POPUP MENTIONS LEGALES ET CGU-->
                <?php require "../mentions_legales_et_cgu/mentions_legales_et_cgu.php"; ?>
            </div>
        </div>

        <!--FOOTER-->
        <?php 
        require "../footer_header/footer.php";
        ?>
        <script src="inscription.js"></script>
    </body>
</html>