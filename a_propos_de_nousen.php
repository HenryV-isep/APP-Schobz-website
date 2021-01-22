<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About us</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="testcss.css">
    <link rel="stylesheet" href="A  propos de nous.css">
    <script src="pop.js"></script>
</head>
<body>

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

<div class="page">
    <div id="photo">
        <h1>Presentation of the team</h1>
        <div id="images">
            <button class="profil" onclick="openModal1()">
                <img class="tete" src="../image/icons8-utilisateur-50.png"/>
                <p2>Number 1</p2>

            </button>
            <button class="profil" onclick="openModal2()">
                <img class="tete" src="../image/icons8-utilisateur-50.png" />
                <p2>Number 2</p2>

            </button>
            <button class="profil" onclick="openModal3()">
                <img class="tete" src="../image/icons8-utilisateur-50.png" >
                <p2>Number 3</p2>

            </button>
            <button class="profil" onclick="openModal4()">
                <img class="tete" src="../image/icons8-utilisateur-50.png" />
                <p2>Number 4</p2>

            </button>
            <button class="profil" onclick="openModal5()">
                <img class="tete" src="../image/icons8-utilisateur-50.png" />
                <p2>Number 5</p2>

            </button>
            <button class="profil" onclick="openModal6()">
                <img class="tete" src="../image/icons8-utilisateur-50.png"/>
                <p2>Number 6</p2>

            </button>
        </div>
    </div>

    <div id="texte">

        <h1 id="titre">
            About us
        </h1>

        <h3>
            Driving School ****
        </h3>

        <p id="pa">
            Presentation of the driving school
        </p>

    </div>
</div>

<div class="modal" id="modal1">
    <h2>Number 1</h2>
    <p1>Text number 1</p1>
    <button class="close" onclick="closeModal1()">close</button>
</div>

<div class="modal" id="modal2">
    <h2>Number 2</h2>
    <p1>Text number 2</p1>
    <button class="close" onclick="closeModal2()">close</button>
</div>

<div class="modal" id="modal3">
    <h2>Number 3</h2>
    <p1>Text number 3</p1>
    <button class="close" onclick="closeModal3()">close</button>
</div>

<div class="modal" id="modal4">
    <h2>Number 4</h2>
    <p1>Text number 4</p1>
    <button class="close" onclick="closeModal4()">close</button>
</div>

<div class="modal" id="modal5">
    <h2>Number 5</h2>
    <p1>Text number 5</p1>
    <button class="close" onclick="closeModal5()">close</button>
</div>

<div class="modal" id="modal6">
    <h2>Number 6</h2>
    <p1>Text number 6</p1>
    <button class="close" onclick="closeModal6()">close</button>
</div>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Schobz</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css"> <!-- Pour lier la page css et html -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>

<body>
<?php include 'body/topbar.php'; ?>
<?php include 'body/footer.php'; ?>
<?php include 'body/contenu.php'; ?>
<?php include 'body/fond.php'; ?>

<div class="container">
    <div class="search-box">
        <input type="text" class="search" placeholder="rechercher" style="color: #615858">  <!-- style pour le couleur dans le input de la barre de recherche -->
        <button type="submit" class="search-btn">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>

<link rel="stylesheet" href="Footer-header.css">
<div class="footer">
    <span class="menudubaspartiegauche">
        <a href="https://twitter.com"> <img id="twitter" src="../image/twitter.png" /></a>
        <a href="https://www.instagram.com"> <img id="instagram" src="../image/instagram.png"/></a>
        <a href="https://www.facebook.com"><img id="facebook" src="../image/facebook.png" /></a>
        <a href="https://www.linkedin.com"><img id="linkedin" src="../image/linkedin.png" /></a>
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
    <img id="maison" src="../image/maison.png"/>
    <img id="horloge" src="../image/horloge.png" />
    <img id="telephone" src="../image/telephone.png" />
</div>

</body>
</html>


</body>
</html>
