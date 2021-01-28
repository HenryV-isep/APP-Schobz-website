<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="../profil_utilisateur/profil_utilisateur_mes_informations.css">
    <link rel="stylesheet" href="../profil_utilisateur/profil_utilisateur_apercu_du_compte.css">
    <link rel="stylesheet" href="../footer_header/footer_header.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <meta charset="UTF-8">
    <title>Manage profile/My information</title>
</head>
<body>
<!--HEADER-->
<?php require "../footer_header/header_en.php"; ?>
<!--BARRE DE NAVIGATION-->
<nav>
    <ul>
        <li> Hello <br/> </li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_apercu_du_compte_en.php"><img class="image" src="../Image/user.png" alt="">Account overview</a></li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_mes_informations_en.php"><img class="image" src="../image/information.png" alt=""> My information</a></li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_mes_resultats_en.php"><img class="image" src="../Image/result.png" alt="">My results </a></li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_test_en.php"><img class="image" src="../Image/play.png" alt="">Test</a></li>
        <li><a class="lien" href="../page_en/accueil_en.php"><img class="image" src="../Image/deconnexion.png" alt="">Log out</a></li>
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
        <label for="tel">Driving License number :</label><br/>
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
        <input type="submit" value="Sauvegarder"
               style="color: #484848"/>
    </p>
</form>
<!--FOOTER-->
<?php require "../footer_header/footer_en.php";?>
</body>
</html>