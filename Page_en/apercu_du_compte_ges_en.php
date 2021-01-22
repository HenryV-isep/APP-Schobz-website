<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="../profil_utilisateur/apercu_du_compte.css">
    <link rel="stylesheet"href="../footer_header/styleV3.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <meta charset="UTF-8">
    <title> Profil utilisateur/Apercu du compte</title>
</head>
<body>
<!--HEADER-->
<div class="topbar">
    <span class="menuduhautpartiegauche"> <!-- span c'est pour aligner les liens -->
        <a href="">Home</a>
        <a href="">My account</a>
        <a href="">About us</a>
    </span>
    <span class="menuduhautpartiedroite"> <!-- span c'est pour aligner les liens -->
        <a href="">Advance research</a>
        <a href="">F.A.Q</a>
    </span>
</div>
<div class="container">
    <div class="search-box">
        <input type="text" class="search" placeholder="Rechercher" style="color: #615858">  <!-- style pour le couleur dans le input de la barre de recherche -->
        <button type="submit" class="search-btn">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>
<!--BARRE DE NAVIGATION-->
<nav>
    <ul>
        <li> Hello, <br/> Juliette Sebillotte </li>
        <li><a class="lien" href="Profil%20utilisateur%20Apercu%20du%20compte.html"><img class="image" src="../Image/user.png" alt="">Account overview</a></li>
        <li><a class="lien" href="Profil%20utilisateur%20Mes%20informations.html"><img class="image" src="../Image/information.png" alt=""> My information</a></li>
        <li><a class="lien" href="Profil%20utilisateur%20Mes%20resultats.html"><img class="image" src="../Image/result.png" alt="">My results </a></li>
        <li><a class="lien" href="Profil%20utilisateur%20Test.html"><img class="image" src="../Image/play.png" alt="">Test</a></li>
        <li><a class="lien" href="Profil%20gestionnaire%20Gestion.html"><img class="image" src="../Image/gestion.png" alt="">Gestion</a></li>
        <li><a class="lien" href="Deconnexion.html"><img class="image" src="../Image/deconnexion.png" alt="">Disconnection</a></li>
    </ul>
</nav>
<!--IMAGE DE FOND-->
<img class="welcome" src="../Image/Fond.png" alt="">
<!--FOOTER-->
<link rel="stylesheet" href="../Footer-header/Footer-header.css">
<div class="footer">
    <span class="menudubaspartiegauche">
        <a href="https://twitter.com"> <img id="twitter" src="../Image/twitter.png"></a>
        <a href="https://www.instagram.com"> <img id="instagram" src="../Image/instagram.png"></a>
        <a href="https://www.facebook.com"><img id="facebook" src="../Image/facebook.png"></a>
        <a href="https://www.linkedin.com"><img id="linkedin" src="../Image/linkedin.png"></a>
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
    <img id="maison" src="../Image/maison.png">
    <img id="horloge" src="../Image/horloge.png">
    <img id="telephone" src="../Image/telephone.png">
</div>
</body>
</html>
