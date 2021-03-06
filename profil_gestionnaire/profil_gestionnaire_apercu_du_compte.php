<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="profil_gestionnaire_apercu_du_compte.css">
    <link rel="stylesheet"href="../footer_header/footer_header.css">
    <link rel="stylesheet" href="../mentions_legales_et_cgu/mentions_legales_et_cgu.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <meta charset="UTF-8">
    <title> Profil gestionnaire/Apercu du compte</title>

</head>

<body>

<!--HEADER-->

<?php require "../footer_header/header.php"?>


<!--BARRE DE NAVIGATION-->

<nav class="naviguation_general">
    <ul>
        <li> Bonjour </li>
        <li><a class="lien" href="../profil_gestionnaire/profil_gestionnaire_apercu_du_compte.php"><img class="image" src="../image/user.png" alt="">Aperçu du compte</a></li>
        <li><a class="lien" href="../profil_gestionnaire/profil_gestionnaire_mes_informations.php"><img class="image" src="../image/information.png" alt=""> Mes informations</a></li>
        <li><a class="lien" href="../profil_gestionnaire/profil_gestionnaire_les_resultats.php"><img class="image" src="../image/result.png" alt="">Les résultats </a></li>
        <li><a class="lien" href="../profil_gestionnaire/profil_gestionnaire_test.php"><img class="image" src="../image/play.png" alt="">Test</a></li>
        <li><a class="lien" href="../profil_gestionnaire/profil_gestionnaire_gestion.php"><img class="image" src="../image/gestion.png" alt="">Gestion</a></li>
        <li><a class="lien" href="../accueil/accueil.php"><img class="image" src="../image/deconnexion.png" alt="">Déconnexion</a></li>
    </ul>
</nav>

<!--IMAGE DE FOND-->

    <img class="welcome" src="../image/fondcompte.png" alt="">

<!--POPUP MENTIONS LEGALES ET CGU-->
<!--POPUP MENTIONS LEGALES ET CGU-->
<?php require "../mentions_legales_et_cgu/mentions_legales_et_cgu.php" ?>
<!--FOOTER-->

    <link rel="stylesheet" href="../footer_header/footer_header.css">
    <?php require "../footer_header/footer.php"?>

</body>

</html>