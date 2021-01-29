<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="../footer_header/footer_header.css">
    <link rel="stylesheet" href="profil_gestionnaire_apercu_du_compte.css">
    <link rel="stylesheet" type="text/css"  href="profil_gestionnaire_les_resultats.css">
    <link rel="stylesheet" href="../mentions_legales_et_cgu/mentions_legales_et_cgu.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <title>Profil gestionnaire/Les resultats</title>

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

<!--LES RESULTATS-->

<div class="presentation_resultat">
    <h1><img class="titreicon" src="../image/result.png" alt=""></h1>
    <h2>LES RESULTATS</h2>
    <p> Vous pouvez consulter les résultats des utilisateurs.</p>
</div>
<!--
<img class="tableau" src= "../Image/tableau.png" alt="photo"/> <br>
-->
<div class="chart">
    <div class="row">
        <div class="chart1">
            <canvas id="myChart" width="200" height="150"></canvas>
        </div>
        <div class="chart2">
            <canvas id="myChart2" width="200" height="150"></canvas>
        </div>
    </div>
    <div class="row">
        <div class="chart3">
            <canvas id="myChart3" width="200" height="150"></canvas>
        </div>
        <div class="chart4">
            <canvas id="myChart4" width="200" height="150"></canvas>
        </div>
    </div>
</div>
<script src="profil_gestionnaire_les_resultats.js"></script>


<!--POPUP MENTIONS LEGALES ET CGU-->
<?php require "../mentions_legales_et_cgu/mentions_legales_et_cgu.php" ?>

<!--FOOTER-->

<link rel="stylesheet" href="../footer_header/footer_header.css">
<?php require "../footer_header/footer.php"?>


</body>
</html>