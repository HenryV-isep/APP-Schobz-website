<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="../footer_header/footer_header.css">
    <link rel="stylesheet" href="../profil_utilisateur/profil_utilisateur_apercu_du_compte.css">
    <link rel="stylesheet" href="../profil_utilisateur/profil_utilisateur_mes_informations.css">
    <link rel="stylesheet" href="../profil_utilisateur/profil_utilisateur_mes_resultats.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <title>Manager profile/My result</title>

</head>
<body>

<!--HEADER-->

<?php
require "../footer_header/header_en.php"; ?>

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

<!--LES RESULTATS-->

<div class="presentation_resultat">
    <h1><img class="titreicon" src="../Image/result.png" alt=""></h1>
    <h2>MY RESULTS</h2>
    <p> You can consult your results.</p><br/>
    <div class="containtresults">
        <?php
                $dBHost = "localhost";
                $dBUser = "root";
                $dBPassword = "root";
                $dBDatabase = "schobz_data";
                $port = "3306";
                $conn = mysqli_connect($dBHost, $dBUser, $dBPassword, $dBDatabase, $port);
                if (!$conn) {
                die("Échec de la connexion:" . mysqli_connect_error());
                }
                function table() {
                    global $conn;
                    $affichage = '';
                    $sql = "SELECT periode, nom_du_test, mesure_de_donnee FROM personne JOIN test ON `test`.`cle_etrangere_personne`=`personne`.`id_Personne` JOIN resultats ON `resultats`.`cle_etrangere_Test` = `test`.`id_test` WHERE nom='Cassoulet' ORDER BY periode DESC"; #Normalement, ça fera une liste
                    $resultData = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($resultData)) {
                        $affichage = '
                            <tr>
        <td>'.$row['periode'].'</td>
        <td>'.$row['nom_du_test'].'</td>
        <td>'.$row['mesure_de_donnee'].'</td>
        </tr>';
        }
        return $affichage;
        }

        $sql = "SELECT mesure_de_donnee FROM `resultats` JOIN test ON `resultats`.`cle_etrangere_Test` = `test`.`id_test` JOIN `personne` ON `test`.`cle_etrangere_personne`=`personne`.`id_Personne` WHERE nom='Cassoulet'";
        $resultData = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($resultData);
        if (isset($row)) {
        $affichage = table();
        echo '
        <table id="resulthistory">
            <thead>
            <tr>
                <th>Name of the test</th>
                <th>Date</th>
                <th>Results</th>
            </tr>
            <thead>
            <tbody>
            '.$affichage.'
            </tbody>
        </table>';
        } else {
        echo 'It looks like you didn \'t take a test ';
        }
        ?>
    </div>
</div>
<!-- Partie historique des résultats-->

<br/>
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
<script src="profil_utilisateur_mes_resultats.js"></script>


<!--FOOTER-->
<?php
require "../footer_header/footer.php";
?>


</body>
</html>