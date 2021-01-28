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
    <title>Profil gestionnaire/Les resultats</title>

</head>
<body>

<!--HEADER-->

<div class="topbar">

    <span class="menuduhautpartiegauche"> <!-- span c'est pour aligner les liens -->
        <a href="">Accueil</a>
        <a href="">Mon compte</a>
        <a href="">A propos de nous</a>
    </span>
    <span class="menuduhautpartiedroite"> <!-- span c'est pour aligner les liens -->
        <a href="">Recherche avancée</a>
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
        <li> Bonjour,  </li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_apercu_du_compte.php"><img class="image" src="../Image/user.png" alt="">Aperçu du compte</a></li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_mes_informations.php"><img class="image" src="../Image/information.png" alt=""> Mes informations</a></li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_mes_resultats.php"><img class="image" src="../Image/result.png" alt="">Mes résultats </a></li>
        <li><a class="lien" href="../profil_utilisateur/profil_utilisateur_utilisateur_test.php"><img class="image" src="../Image/play.png" alt="">Test</a></li>
        <li><a class="lien" href="../profil_utilisateur/accueil/accueil.php"><img class="image" src="../Image/deconnexion.png" alt="">Déconnexion</a></li>
    </ul>
</nav>

<!--LES RESULTATS-->


<!-- Partie historique des résultats-->


<button onclick="historique()" style="position: absolute; left: 70%; top: 30%;z-index: 10;"> Historique des résultats </button>
<div class="presentation_resultat">
    <h1><img class="titreicon" src="../Image/result.png" alt=""></h1>
    <h2>LES RESULTATS</h2>
    <p> Vous pouvez consulter vos résultats.</p>
    <div class="containtresults">
    <?php
                //tu fais sa nomalement sur un autre page php, faut arreté du mettre tout le code sur la même page
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
                                    <th>Nom du test</th>
                                    <th>Date</th>
                                    <th>Résultats</th>
                                </tr>
                            <thead>
                            <tbody>
                                '.$affichage.'
                            </tbody>
                        </table>';
                } else {
                        echo 'Il semblerait que vous n\'avez pas passé de test ';
                }
            ?>
    </div>
</div>

<div class="chart" id="graph">
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
<script src="../profil_utilisateur/profil_utilisateur_mes_resultats.js"></script>


<!--FOOTER-->

<link rel="stylesheet" href="../Footer-header/Footer-header.css">
<div class="footer">

    <span class="menudubaspartiegauche">
        <a href="https://twitter.com"> <img id="twitter" src="../image/twitter.png"></a>
        <a href="https://www.instagram.com"> <img id="instagram" src="../image/instagram.png"></a>
        <a href="https://www.facebook.com"><img id="facebook" src="../image/facebook.png"></a>
        <a href="https://www.linkedin.com"><img id="linkedin" src="../image/linkedin.png"></a>
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
               class="Nous_contacter_bouton" style="color: #484848" />
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