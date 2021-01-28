<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="profil_utilisateur_apercu_du_compte.css">
    <link rel="stylesheet" href="../footer_header/footer_header.css">
    <link rel="stylesheet" href="../mentions_legales_et_cgu/mentions_legales_et_cgu.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <meta charset="UTF-8">
    <title> Profil utilisateur/Apercu du compte</title>

</head>

<body>

<!--HEADER-->

<?php require "../footer_header/header.php"; ?>

<!--BARRE DE NAVIGATION-->

<nav>
    <ul>

        
        <li> Bonjour <br/> </li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_apercu_du_compte.php"><img class="image" src="../image/user.png" alt="">Aperçu du compte</a></li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_mes_informations.php"><img class="image" src="../image/information.png" alt=""> Mes informations</a></li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_mes_resultats.php"><img class="image" src="../image/result.png" alt="">Mes résultats </a></li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_test.php"><img class="image" src="../image/play.png" alt="">Test</a></li>
        <li><a class="lien" href="../inscription_connexion/deco.php"><img class="image" src="../image/deconnexion.png" alt="">Déconnexion</a></li>
    </ul>
</nav>

<!--IMAGE DE FOND-->
<!--
<img class="welcome" src="../Image/Fondcompte.png" alt="">
-->

<!--POPUP MENTIONS LEGALES ET CGU-->
<?php require "../mentions_legales_et_cgu/mentions_legales_et_cgu.php"; ?>

<!--FOOTER-->

<link rel="stylesheet" href="../footer_header/footer_header.css">
<div class="footer">

    <span class="menudubaspartiegauche">
        <a href="https://twitter.com"> <img id="twitter" src="../image/twitter.png"></a>
        <a href="https://www.instagram.com"> <img id="instagram" src="../image/instagram.png"></a>
        <a href="https://www.facebook.com"><img id="facebook" src="../image/facebook.png"></a>
        <a href="https://www.linkedin.com"><img id="linkedin" src="../image/linkedin.png"></a>
    </span>

    <form class="menudubaspartiecentre">
        <span class="Nous_contacter_titre">
        Nous contacter
        </span>
        <div class="Nous_contacter_collect" data-validate="Merci de renseigner votre nom et prénom">
            <input class="Nous_contacter_imput" type="text" name="name" placeholder="Nom et Prénom">
            <span class="focus-Nous_contacter"></span>
            <span></span></div>
        <div class="Nous_contacter_collect" data-validate="Merci de renseigner votre adresse mail valide: e@a.x">
            <input class="Nous_contacter_imput" type="text" name="email" placeholder="E-mail" >
            <span class="focus-Nous_contacter"></span>
            <span></span></div>
        <div class="Nous_contacter_collect_imput_textarea" data-validate="Merci de renseigner votre message.">
            <textarea class="Nous_contacter_imput_textarea" name="message" placeholder="Votre message"></textarea>
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
    <img id="maison" src="../image/maison.png">
    <img id="horloge" src="../image/horloge.png">
    <img id="telephone" src="../image/telephone.png">
</div>

</body>

</html>