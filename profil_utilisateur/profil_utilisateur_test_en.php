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
    <title> Manage profile/Test</title>

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

<!--TEST-->

<div class="presentation_test">
    <h1><img class="titreicon" src="../image/play.png" alt=""></h1>
    <h2>TEST</h2>
    <p> You can launch, modify and create a test.</p>
</div>

<form class="form_information" action="gestionnaire.php" method="post">

    <p>
        <br/>
        <br/>
        <input type="submit" value="Start a test "
               class="remplissage" style="color: #484848" />

    </p>

</form>


<!--POPUP MENTIONS LEGALES ET CGU-->
<?php
require "../mentions_legales_et_cgu/mentions_legales_et_cgu.php";
?>

<!--FOOTER-->

<link rel="stylesheet" href="../footer_header/footer_header.css">
<?php require "../footer_header/footer_en.php";?>

</body>
</html>