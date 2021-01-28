<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="profil_utilisateur_test.css">
    <link rel="stylesheet" href="../footer_header/footer_header.css">
    <link rel="stylesheet" href="../mentions_legales_et_cgu/mentions_legales_et_cgu.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="profil_utilisateur_apercu_du_compte.css">
    <meta charset="UTF-8">
    <title> Profil utilisateur/Test</title>

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

<!--TEST-->

<div class="presentation_test">
    <h1><img class="titreicon" src="../image/play.png" alt=""></h1>
    <h2>TEST</h2>
    <p> Vous pouvez lancer un test, en modifier un ou un créer un.</p>
</div>

<form class="form_information" action="gestionnaire.php" method="post">

    <p>
        <br/>
        <br/>
        <input type="submit" value="Lancer un test "
               class="remplissage" style="color: #484848" />

    </p>

</form>


<!--POPUP MENTIONS LEGALES ET CGU-->
<?php
require "../mentions_legales_et_cgu/mentions_legales_et_cgu.php";
?>

<!--FOOTER-->

<link rel="stylesheet" href="../footer_header/footer_header.css">
<?php 
require "../footer_header/footer.php";
?>

</body>
</html>