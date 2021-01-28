<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="../profil_utilisateur/profil_utilisateur_apercu_du_compte.css">
    <link rel="stylesheet" href="../footer_header/footer_header.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <meta charset="UTF-8">
    <title> Profil utilisateur/Apercu du compte</title>
</head>
<body>
<!--HEADER-->
<?php
    require "../footer_header/header_en.php";
?>
<!--BARRE DE NAVIGATION-->
<nav>
    <ul>
        <li> Hello <br/> </li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_apercu_du_compte_en.php"><img class="image" src="../Image/user.png" alt="">Account overview</a></li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_mes_informations_en.php"><img class="image" src="../image/information.png" alt=""> My information</a></li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_mes_resultats_en.php"><img class="image" src="../Image/result.png" alt="">My results </a></li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_apercu_du_compte.php"><img class="image" src="../Image/play.png" alt="">Test</a></li>
        <li><a class="lien" href="../accueil/accueil.php"><img class="image" src="../Image/deconnexion.png" alt="">Log out</a></li>
    </ul>
</nav>
<!--IMAGE DE FOND-->
<img class="welcome" src="../image/fondcompte.png" alt="">
<!--FOOTER-->
<link rel="stylesheet" href="../Footer-header/Footer-header.css">
<?php require "../footer_header/footer_en.php"; ?>
</body>
</html>