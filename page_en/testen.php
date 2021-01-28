<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=schobz_data_demo', 'root', 'root'); // nom bdd : bdd, on se connecte à la bdd qui a pour hote localhost + son nom, le user c'est root et mdp root, on actualise, il y a 0 bug

if (isset($_POST[formconnexion])) { //si l'utilisateur clique sur 'Connexion'

    $mailconnect = htmlspecialchars($_POST['username']);
    $mdpconnect = sha1($_POST['password']);

    if (!empty($mailconnect) and !empty($mdpconnect)) {

        $requser = $bdd->prepare("SELECT * FROM personne_inscription WHERE mail = ? AND motdepasse = ?");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount(); //ca va compter le nombre de colonnes qui existent avec les informations qui ont été mises

        if ($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo ['id'];
            $_SESSION['prenom'] = $userinfo ['prenom'];
            $_SESSION['mail'] = $userinfo ['mail'];
            header("Location : profil.php?id=" . $_SESSION['id']); //Ca va rediger l'utilisateur vers son prfil / la page thml profil.php
        } else {
            echo $erreur = "You have entered a wrong email address ou password";
        }
    } else {
        $erreur = "All fields must be completed";
    }

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="test.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel='stylesheet' type='text/css' href='../footer_header/footer_header.css'>
    <link rel='stylesheet' type='text/css' href='inscription2.css'>
    <title>Inscription et connexion</title>

</head>

<body>

<!--HEADER-->

<div class="topbar">

    <span class="menuduhautpartiegauche"> <!-- span c'est pour aligner les liens -->
        <a href="">Home</a>
        <a href="">My Account</a>
        <a href="">About us</a>
    </span>
    <span class="menuduhautpartiedroite"> <!-- span c'est pour aligner les liens -->
        <a href="">advanced research</a>
        <a href="">F.A.Q</a>
    </span>
</div>


<div class="container">
    <div class="search-box">
        <label>
            <input type="text" class="search" placeholder="Rechercher" style="color: #615858">
        </label>  <!-- style pour le couleur dans le input de la barre de recherche -->
        <button type="submit" class="search-btn">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>

<!--INSCRIPTION ET CONNEXION-->
<div class="fond">
    <div class="form-box">

        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="Connexion()">Connection</button>
            <button type="button" class="toggle-btn" onclick="Inscription()">Inscription</button>
        </div>
        <form id="connexion" class="Connexion" method="post">
            <label>
                <input type='text' name='username' class="identif" 3
                       placeholder="Identifiant" required="required">
            </label>

            <label>
                <input type="password" name="password" class="identif"
                       placeholder="Mot de passe" required="required">
            </label>

            <label>
                <input type="checkbox" class="check-box1" required="required"/> Remember Password
            </label>

            <button type="submit" class="connex1">Connexion</button>
            <input type="button" class="Motdepasseoubliee" onclick="window.location.href='#mdp_oublie';"
                   value="Mot de passe oublié">
        </form>

        <form id="Inscription" class="Identification" method="post">
            <label>
                <select name="choixgenre" class="genre">
                    <option>Man</option>
                    <option>Woman</option>
                    <option>Other</option>
                </select>
            </label>
            <label>
                <input name="nom" class="identif2" type="text" placeholder="Nom" required="required"/>
            </label>
            <label>
                <input name="prenom" class="identif2" type="text" placeholder="Prénoms" required="required"/>
            </label>
            <label>
                <input name="date_de_naissance" class="identif2" type="date" placeholder="Date de Naissance"
                       required="required"/>
            </label>
            <label>
                <input name="email" class="identif2" type="email" placeholder="Adresse email" required="required"/>
            </label>
            <label>
                <input name="password" class="identif2" type="password" placeholder="Mot de Passe" required="required"/>
            </label>
            <label>
                <input name="confirm_password" class="identif2" type="password"
                       placeholder="Confirmez votre Mot de Passe" required="required"/>
            </label>
            <label>
                <input name="numero_de_permis" class="identif2" type="number" placeholder="Numéro de Permis"
                       required="required"/>
            </label>
            <label>
                <input name="numero_auto_ecole" class="identif2" type="number" placeholder="Numéro Auto école"
                       required="required"/>
            </label>
            <label><input type="radio" class="CGU" name="choice" value="oui" required="required"/> J'ai lu et j'accepte
                les <a class="link_CGU" href=#popup_CGU>mentions legales & CGU </a>
            </label>
            <button type="submit" class="valider">Valider</button>
        </form>

        <div id="popup_CGU" class="overlay">
            <div class="popup">
                <h2>Legal Notice et CGU</h2>
                <a class="close" href="#">&times;</a>
                <span class="content">
                    <p class="p_cgu">Phone : 0781066685<br/><br/>
                    <b> Site edition: </b> <br/> <br/>
                    The "driverpsychotechniquetest.fr" site is published by SCHOBZ Corporation. Share capital of 60 euros, headquartered at 10 rue de vanves, 92130 Issy-les-moulineaux <br/> <br/>
                    <b> Editorial manager: </b> <br/> <br/>
                    Schobz Corporation <br/>

                   <b> Host: </b> <br/> <br/>
                    The "driverpsychotechniquetest.fr" site is hosted by the company ISEP Paris <br/>
                    Address: 28 rue Notre Dame des Champs, 75006 Paris <br/> <br/>
                    <b> The use of personal data: </b> <br/> <br/>
                    No personal information will be collected without your knowledge. the information that you communicate to us during registration, information, or a request for an estimate sent by mail, telephone, e-mail or form are only intended for administrative and commercial processing of your request by the company ISEP Paris .
                    In accordance with the “Informatique et Libertés” law n 78-17 of January 6, 1978, you have the right to access, rectify and oppose your personal data.
                    In order to exercise it, all you have to do is send us a written request to the following address: <br/>
                    (put an email or postal address) <br/> <br/>

                    <b> Copyright / copyright </b> <br/> <br/>
                    All the content of this website is the property of ISEP Paris, it is protected by the laws in force of French legislation on intellectual property. <br/> <br/>
                    No element of this site may be copied, reproduced, diverted or distorted, on any medium whatsoever, without constituting an act of infringement within the meaning of articles L 335-2 and following of the intellectual property code.
                    <b> Article 1: Object </b> <br/> <br/>
                        <b> These T & Cs or General Conditions of Use legally govern the user of the services of the Drivepsychotechniquetest site (hereinafter referred to as "the site").

Constituting the contract between the company ISEP Paris, the User, access to this platform signifies acceptance of these T & Cs.
                        </b><br/><br/>
                        <b> Article 2: Legal notices </b> <br/> <br/>
                        <b> The Drivepsychotechniquetest site is edited by the company SCHOBZ Corporation, whose head office is located at 10 rue de vanves 92130 Issy les Moulineaux, France.

The host of the Drivepsychotechniquetest.fr site is ISEP Paris, at 28 rue Notre Dame des Champs, 75006 Paris, France.
</b> <br/> <br/>
                        <b> Article 3: Access to the site </b> <br/> <br/>
                        <b> The Divepsychotechniquetest.fr site allows users to access the following services:
Perform psychotechnical tests.
View test results.

The site can be accessed from any platform by any user registered with a driving school and having Internet access. All costs necessary for access to the services are the responsibility of the user or the driving school where the latter is registered.

Access to services dedicated to members is made using a username and password previously created in a driving school.

The publisher strives to allow access to the site 24 hours a day, 7 days a week, except in cases of force majeure or an event beyond its control, and subject to possible breakdowns and interventions. maintenance necessary for the proper functioning of the site and the services offered.

There is no provision for technical assistance to the user, whether by electronic or telephone means.

In addition, access to the site may be interrupted or suspended for maintenance reasons without notice.
</b> <br/> <br/>
                        <b> Article 4: Hypertext links </b> <br/> <br/>
                        <b> The site may contain hypertext links to other sites on the Internet.
                        </b> <br/> <br/>
                        <b> Article 5: Liability </b> <br/> <br/>
                        <b> The information and / or documents published on the site by the PUBLISHER mainly come from reliable sources, the site reserves the right to not guarantee the reliability of the sources.


However, it is strongly recommended that you check the accuracy of the information and / or documents on the site.

You should know that the information and / or documents made available on the site are subject to change at any time.

The user is solely responsible for the way in which he will use the information and / or documents available on the site, without the PUBLISHER being able to be sought as such, and without recourse against the latter.
</b> <br/> <br/>
                        <b> Article 6: Intellectual property </b> <br/> <br/>
                        <b> The brands, logos and the content of the site are protected by the code of intellectual property and by copyright. </b> <br/> <br/>
                        <b> Article 7: Data collection </b> <br/> <br/>
                        <b> For the creation of the user or manager's account, the collection of information when registering on the site is necessary and mandatory for the performance of the tests.
In accordance with Law No. 78-17 of 6 January relating to computers, files and freedoms, the collection and processing of personal information is carried out with respect for private life.

According to the Data Protection Act dated January 6, 1978, articles 39 and 40, the User has the right to access, rectify or delete his personal data.
 </b> <br/> <br/>
                    </p>
                </span>
            </div>
        </div>
        <div id="mdp_oublie" class="overlay">
            <div class="popup">
                <h2>
                    Please enter your email address. We will send you a message there to reset the word
                    password.
                </h2>
                <a class="close" href="#">&times;</a>
                <span class="content">
                    <input class="mdp_mail_imput" type="text" name="email" placeholder="E-mail">
                </span>
            </div>
        </div>

    </div>
</div>

<script>
    var x = document.getElementById("connexion");
    var y = document.getElementById("Inscription");
    var z = document.getElementById("btn");

    function Inscription() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }

    function Connexion() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
    }

</script>

<!--FOOTER-->

<link rel="stylesheet" href="style.css">
<div class="footer">

    <span class="menudubaspartiegauche">
        <a href="https://twitter.com"> <img id="twitter" src="twitterT.png" alt=""></a>
        <a href="https://www.instagram.com"> <img id="instagram" src="instagramT.png" alt=""></a>
        <a href="https://www.facebook.com"><img id="facebook" src="facebookT.png" alt=""></a>
        <a href="https://www.linkedin.com"><img id="linkedin" src="linkedinT.png" alt=""></a>
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
                <input class="Nous_contacter_imput" type="text" name="email" placeholder="E-mail">
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
    <img id="maison" src="maisonT.png" alt="">
    <img id="horloge" src="horlogeT.png" alt="">
    <img id="telephone" src="telephoneT.png" alt="">
</div>

</body>
</html>