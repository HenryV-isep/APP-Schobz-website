<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=schobz_data_demo', 'root', 'root'); // nom bdd : bdd, on se connecte à la bdd qui a pour hote localhost + son nom, le user c'est root et mdp root, on actualise, il y a 0 bug

    if(isset($_POST['forminscription'])) { //si l'utilisateur clique sur 'Valider'

        $genre = $_POST['choixgenre'];
        $nom = htmlspecialchars($_POST['nom']); //Pour éviter que du code soit mis dans les cases à remplir (c'est une sécurité)
        $prenom = htmlspecialchars($_POST['prenom']);
        $date_de_naissance = htmlspecialchars($_POST['date_de_naissance']);
        $mail = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['password']); //md5,sha1 etc sont des méthodes pour hacher les mdp si qq arrive à pénétrer notre bdd
        $mdp2 = sha1($_POST['confirm_password']); //idem sauf que c'est pour la confirmation du mdp
        $numero_de_permis = $_POST['numero_de_permis'];
        $num_autoecole = $_POST['numero_auto_ecole'];

        if($mdp == $mdp2) {
            $insertmbr = $bdd->prepare("INSERT INTO personne_inscription(genre, nom, prenom, datedenaissance, mail, motdepasse, numerodepermis, numeroautoecole) VALUES (?, ?, ?, ?, ?, ?, ?, ?)"); //on prépare les champs de notre bdd dans phpmyadmin
            $insertmbr->execute(array($genre, $nom, $prenom, $date_de_naissance, $mail, $mdp, $numero_de_permis, $num_autoecole)); //on excute la préparation par rapport aux variables qu'on a initialis









            if(isset($_POST['bouton_envoyer_verifmail'])){

                $emailverif = htmlspecialchars($_POST['emailverif']);

                



                    }

                }










    else{
    $erreur = "vos mots de passe ne correspondent pas";
        }
    }


    if(isset($_POST['formconnexion'])) { //si l'utilisateur clique sur 'Connexion'

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

<div class="topbar">

    <span class="menuduhautpartiegauche"> <!-- span c'est pour aligner les liens -->
        <a href="../accueil/accueil.php">Accueil</a>
        <a href="/page_inscription.php">Mon compte</a>
        <a href="../a_propos_de_nous/a_propos_de_nous.php">A propos de nous</a>
    </span>
    <span>
        <a class="middle"> DriverPsychotechniqueTest.fr</a>
    </span>
    <span class="menuduhautpartiedroite"> <!-- span c'est pour aligner les liens -->
        <a class="link_CGU" href=#popup_CGU>Mentions légales et CGU</a>
        <a href="../faq/faq.php">F.A.Q</a>
    </span>
</div>


<!--CONNEXION-->
<div class="fond">
    <div class="form-box">

        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="Connexion()">Connexion</button>
            <button type="button" class="toggle-btn" onclick="Inscription()">Inscription</button>
        </div>
        <form  id="connexion" class="Connexion" method="post">
            <label>
                <input type='text' name='username' class="identif"
                       placeholder="Identifiant" required="required">
            </label>

            <label>
                <input type="password" name="password" class="identif"
                       placeholder="Mot de passe" required="required">
            </label>

            <label>
                <input type="checkbox" class="check-box1"/> Sauvegarder le mot de passe
            </label>

            <button type="submit" name ="formconnexion" class="connex1">Connexion</button>
            <input type="button" class="Motdepasseoubliee" onclick="window.location.href='#mdp_oublie';" value="Mot de passe oublié">
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
        </div>




        <!--INSCRIPTION-->
        <form id="Inscription" class="Identification" method="post">
            <label>
                <select name="choixgenre" class="genre">
                    <option>Homme</option>
                    <option>Femme</option>
                    <option>Autre</option>
                </select>
            </label>
            <label>
                <input name="nom" class="identif2" type="text" placeholder="Nom" required="required"/>
            </label>
            <label>
                <input name="prenom" class="identif2" type="text" placeholder="Prénom" required="required"/>
            </label>
            <label>
                <input name="date_de_naissance" class="identif2" type="date" placeholder="Date de naissance" required="required"/>
            </label>

            <label>
                <input name="email" class="identif2" type="email" placeholder="Adresse email" required="required"/>
            </label>
            <label>
                <input name="password" class="identif2" type="password" placeholder="Mot de passe" required="required"/>
            </label>
            <label>
                <input name="confirm_password" class="identif2" type="password" placeholder="Confirmez votre mot de passe" required="required"/>
            </label>
            <label>
                <input name="numero_de_permis" class="identif2" type="text" placeholder="Numéro de permis"/>
            </label>
            <label>
                <input name="numero_auto_ecole" class="identif2" type="number" placeholder="Numéro auto école" required="required"/>
            </label>
            <label><input type="radio" class="CGU" name="choice" value="oui" required="required"/> J'ai lu et j'accepte les <a class="link_CGU" href=#popup_CGU>mentions légales & CGU </a>
            </label>
            <button type="submit" name ="forminscription" class="valider" onclick="window.location.href='#confirmation';">Valider </button>
        </form>







        <!--POPUP CONFIRMATION EMAIL-->
        <div id="confirmation" class="overlay">
            <div class="popup">
                <h2>
                    Merci de renseigner votre adresse email pour procéder à la vérification.
                </h2>
                <a class="close" href="#">&times;</a>
                <span class="content">
                   <br/> <input class="confirmation_imput" type="text" name="emailverif" placeholder="adresse email">
                </span>
                <button name="bouton_envoyer_verifmail" type="submit" class="envoyer">Envoyer </button>
            </div>
        </div>











<!--POPUP MENTIONS LEGALES ET CGU-->
        <div id="popup_CGU" class="overlay">
            <div class="popup">
                <h2>Mentions légales et CGU</h2>
                <a class="close" href="#">&times;</a>
                <span class="content">
                    <p class="p_cgu">Téléphone : 0781066685<br/><br/>
                    <b>Edition du site : </b><br/><br/>
                    Le site ‘driverpsychotechniquetest.fr’ est édité par la société SCHOBZ Corporation. Capital social de 60 euros, dont le siège social est situé 10 rue de vanves, 92130 Issy-les-moulineaux <br/><br/>
                    <b>Responsable de rédaction :</b><br/><br/>
                    Schobz Corporation <br/><br/>

                    <b>Hébergeur : </b><br/><br/>
                    Le site ‘DriverPsychotechniqueTest.fr’ est hébergé par la société ISEP Paris <br/>
                    Adresse : 28 rue Notre Dame des Champs, 75006 Paris<br/><br/>

                    <b>L’utilisation des données personnelles : </b><br/><br/>
                    Aucune information personnelle ne sera collectée à votre insu. les informations que vous nous communiquez lors de l’inscription, renseignement, ou d’une demande de devis transmise par courrier, téléphone, e-mail ou par formulaire sont uniquement destinées à un traitement administratif et commercial de votre demande par la société ISEP Paris.
                    Conformément à la loi “ Informatique et Libertés”  n 78-17 du 6 janvier 1978, vous disposez d’un droit d'accès, de rectification et d’opposition aux données personnelles vous concernant.
                    Afin de l’exercer, il suffit de nous en faire la demande par écrit à la coordonnée suivante : <br/>
                    ( mettre une adresse mail ou adresse postale ) <br/><br/>

                    <b>Droit d’auteur : </b><br/><br/>
                    L’ensemble du contenu du présent site Internet, est la propriété de la société ISEP Paris, il est protégé par les lois en vigueur de la législation française sur la propriété intellectuelle.<br/><br/>
                    Aucun élément de ce site ne peut être copié, reproduit, détourné ou dénaturé, sur quelque support que ce soit, sans constituer un acte de contrefaçon au sens des articles L 335-2 et suivants du code de la propriété intellectuelle.<br/><br/>

                     <b>Article 1 : Objet</b><br/><br/>
                        <b style="font-weight: lighter">Les présentes CGU ou Conditions Générales d’Utilisation encadrent juridiquement l’utilisateur des services du site Drivepsychotechniquetest ( ci-après dénommé “le site”).
                        Constituant le contrat entre la société ISEP Paris, l’Utilisateur, l'accès à cette plateforme signifie l’acceptation des présentes CGU.
                     </b><br/><br/>
                     <b>Article 2 : Mentions légales</b><br/><br/>
                        <b style="font-weight: lighter">L'édition du site Drivepsychotechniquetest est assurée par la société SCHOBZ Corporation, dont le siège social est localisée au 10 rue de vanves 92130 Issy les Moulineaux, France.
                        L'hébergeur du site Drivepsychotechniquetest.fr est la société ISEP Paris, au 28 rue Notre Dame des Champs, 75006 Paris, France.
                     </b><br/><br/>
                     <b>Article 3 : Accès au site</b><br/><br/>
                        <b style="font-weight: lighter">Le site Divepsychotechniquetest.fr permet aux utilisateurs d'accéder aux services suivants :
                        Effectuer des tests psychotechniques.
                        Consulter les résultats des tests.
                        Le site est accessible depuis n’importe quelle plateforme par tout utilisateur inscrit dans une auto-école et disposant d’un accès à Internet. Tous les frais nécessaires pour l'accès aux services sont à la charge de l’utilisateur ou de l'auto-école ou ce dernier est inscrit.
                        L'accès aux services dédiés aux membres s’effectue à l’aide d’un identifiant et d’un mot de passe créés au préalable dans une auto-école.
                        L'éditeur s’efforce de permettre l'accès au site 24 heures sur 24, 7 jours sur 7, sauf en cas de force majeure ou d’un événement hors du contrôle de celui-ci, et sous réserve des éventuelles pannes et interventions de maintenance nécessaires au bon fonctionnement du site et des services proposés.
                        Il n’est prévu aucune assistance technique vis-à-vis de l’utilisateur que ce soit par des moyens électroniques ou téléphoniques.
                        Par ailleurs, l'accès au site peut être interrompu ou suspendu pour des raisons de maintenance et cela sans préavis.
                     </b><br/><br/>
                     <b>Article 4 : Liens hypertextes</b><br/><br/>
                        <b style="font-weight: lighter">Le site peut contenir des liens hypertextes vers d’autres sites présents sur le réseau Internet.
                     </b><br/><br/>
                     <b>Article 5 : Responsabilité</b><br/><br/>
                        <b style="font-weight: lighter">Les informations et/ou documents diffusés sur le site par l’EDITEUR proviennent majoritairement de sources fiables, le site se réserve la faculté d’une non-garantie de la fiabilité des sources.
                        Toutefois, il est fortement conseillé de vérifier l’exactitude des informations et/ou documents présents sur le site.
                        Il faut savoir que, les informations et/ou documents mis à disposition sur le site sont susceptibles d'être modifiés à tout moment.
                        L’utilisateur est le seul responsable de la manière avec laquelle il va utiliser les informations et/ou documents disponibles sur le site, sans que l’EDITEUR puisse être recherché à ce titre, et sans recours contre ce dernier.
                     </b><br/><br/>
                     <b>Article 6 : Propriete intellectuelle</b><br/><br/>
                        <b style="font-weight: lighter">Les marques, logos ainsi que le contenu du site sont protégés par le code de la propriété intellectuelle et par le droit d’auteur.</b><br/><br/>
                        <b>Article 7:  Collecte des données</b><br/><br/>
                        <b style="font-weight: lighter">Pour la création du compte de l’utilisateur ou du gestionnaire, la collecte des informations au moment de l’inscription sur le site est nécessaire et obligatoire pour la réalisation des tests.
                        Conformément à la loi n 78-17 du 6 janvier relative à l’informatique, aux fichiers et aux libertés, la collecte et le traitement d’informations personnelles s'effectuent dans le respect de la vie privée.
                        Suivant la loi informatique et Libertés en date du 6 janvier 1978, articles 39 et 40, l’Utilisateur dispose du droit d'accéder, de rectifier, de supprimer ses données personnelles.
                     </b><br/><br/>
                    </p>
                </span>
            </div>
        </div>
    </div>
</div>
<!--BOUTON LIAISON CONNEXION ET INSCRIPTION-->
<script>
    var x = document.getElementById("connexion");
    var y = document.getElementById("Inscription");
    var z = document.getElementById("btn");
    function  Inscription(){
        x.style.left= "-400px";
        y.style.left= "50px";
        z.style.left= "110px";
    }
    function  Connexion(){
        x.style.left= "50px";
        y.style.left= "450px";
        z.style.left= "0";
    }

</script>

<!--FOOTER-->

<div class="footer">

    <span class="menudubaspartiegauche">
        <a href="https://twitter.com"> <img id="twitter" src="../image/twitter.png" alt=""></a>
        <a href="https://www.instagram.com"> <img id="instagram" src="../image/instagram.png" alt=""></a>
        <a href="https://www.facebook.com"><img id="facebook" src="../image/facebook.png" alt=""></a>
        <a href="https://www.linkedin.com"><img id="linkedin" src="../image/linkedin.png" alt=""></a>
    </span>

    <form class="menudubaspartiecentre">
        <span class="Nous_contacter_titre">
        Nous contacter
        </span>
        <div class="Nous_contacter_collect" data-validate="Merci de renseigner votre nom et prénom">
            <label>
                <input class="Nous_contacter_imput" type="text" name="name" placeholder="Nom et Prénom">
            </label>
            <span class="focus-Nous_contacter"></span>
            <span></span></div>
        <div class="Nous_contacter_collect" data-validate="Merci de renseigner votre adresse mail valide: e@a.x">
            <label>
                <input class="Nous_contacter_imput" type="text" name="email" placeholder="E-mail" >
            </label>
            <span class="focus-Nous_contacter"></span>
            <span></span></div>
        <div class="Nous_contacter_collect_imput_textarea" data-validate="Merci de renseigner votre message.">
            <label>
                <textarea class="Nous_contacter_imput_textarea" name="message" placeholder="Votre message"></textarea>
            </label>
            <span class="focus-Nous_contacter"></span>
        </div>
        <input type="submit" value="Envoyer"
               class="Nous_contacter_bouton" style="color: #484848"/>
    </form>

    <div class="adresse_premierepartie">
        <a href="">10 rue de vanves, 92130</a>
    </div>
    <div class="adresse_deuxiemepartie">
        <a href="">Issy-Les-Moulineaux, France</a>
    </div>
    <div class="horaire">
        <a href="">8h30-12h, 13h-18h</a>
    </div>
    <div class="telephone">
        <a href="">07 81 06 65 85</a>
    </div>
    <img id="maison" src="../image/maison.png" alt="">
    <img id="horloge" src="../image/horloge.png" alt="">
    <img id="telephone" src="../image/telephone.png" alt="">
</div>

</body>
</html>