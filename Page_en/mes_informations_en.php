<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="../profil_utilisateur/mes_informations.css">
    <link rel="stylesheet" href="../profil_utilisateur/apercu_du_compte.css">
    <link rel="stylesheet" href="../footer_header/styleV3.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <meta charset="UTF-8">
    <title>User profil/My information</title>
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
        <li><a class="lien" href="Profil%20utilisateur%20Apercu%20du%20compte.html"><img class="image" src="../Image/user.png" alt="">Aperçu du compte</a></li>
        <li><a class="lien" href="Profil%20utilisateur%20Mes%20informations.html"><img class="image" src="../Image/information.png" alt=""> Mes informations</a></li>
        <li><a class="lien" href="Profil%20utilisateur%20Mes%20resultats.html"><img class="image" src="../Image/result.png" alt="">Mes résultats </a></li>
        <li><a class="lien" href="Profil%20utilisateur%20Test.html"><img class="image" src="../Image/play.png" alt="">Test</a></li>
        <li><a class="lien" href="Deconnexion.html"><img class="image" src="../Image/deconnexion.png" alt="">Déconnexion</a></li>
    </ul>
</nav>
<!--INFORMATION-->
<div class="presentation_information">
    <h1><img class="titreicon" src="../Image/information.png" alt=""></h1>
    <h2>MY INFORMATION</h2>
    <p> Do not hesitate to modify your details so that your account is perfectly up to date. </p>
</div>
<form class="form_information" action="gestionnaire.php" method="post">
    <p>
        <label for="genre"><br/>Genre :</label><br/>
        <select name="genre" id="genre" class="genre" style="color: #484848">
            <option value="Femme">Women</option>
            <option value="Homme">Men</option>
            <option value="Autre">other </option>
        </select>
        <br/> <!--Permet de sauter des lignes entre les cases-->
        <br/>
        <label for="name">Last Name :</label><br/>
        <input type="text" id="name" name="user_name"
               class="remplissage_text" style="color: #484848"/>
        <br/>
        <br/>
        <label for="prenom">First Name :</label><br/>
        <input type="text" id="prenom" name="user_prenom"
               class="remplissage_text"/>
        <br/>
        <br/>
        <label for="mail">Mail :</label><br/>
        <input type="email" id="mail" name="user_mail"
               class="remplissage_other"/>
        <br/>
        <br/>
        <label for="pass">current password :</label><br/>
        <input type="password" name="pass" id="pass"
               class="remplissage_other"/>
        <br/>
        <br/>
        <label for="newpass">New password:</label><br/> <!--Permet de mettre des espaces pour aligner avec la zone de texte-->
        <input type="password" name="newpass" id="newpass"
               class="remplissage_other"/>
        <br/>
        <br/>
        <label for="tel">Phone number :</label><br/>
        <input type="tel" name="tel" id="tel"
               class="remplissage_other"/>
        <br/>
        <br/>
        <label for="tel">Numéro de permis :</label><br/>
        <input type="number" name="permis" id="permis"
               class="remplissage_other"/>
        <br/>
        <br/>
        <label for="autoecole">Name of the driving school :</label><br/>
        <input type="text" name="autoecole" id="autoecole"
               class="remplissage_text"/>
        <br/>
        <br/>
        <label for="date">Date of Birth :</label><br/>
        <input type="date" name="date" id="date"
               class="remplissage_other"/>
        <br/>
        <br/>
        <label for="photo">Add a photo :</label><br/>
        <input type="file" name="photo" id="photo"/>
        <br/>
        <br/>
        <input type="submit" value="Sauvegarder"
               style="color: #484848"/>
    </p>
</form>
<!--FOOTER-->
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
