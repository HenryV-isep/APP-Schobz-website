<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="profil_gestionnaire_gestion_capteurs.css">
    <link rel="stylesheet" href="../footer_header/footer_header.css">
    <link rel="stylesheet" href="../mentions_legales_et_cgu/mentions_legales_et_cgu.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="profil_gestionnaire_apercu_du_compte.css">
    <link rel="stylesheet" href="profil_gestionnaire_gestion.css">
    <script src="profil_gestionnaire_gestion_utilisateurs.js"></script>
    <meta charset="UTF-8">
    <title> Profil gestionnaire/Capteurs</title>

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

<!--GESTION-->

<div class="presentation_gestion">
    <h1><img class="titreicon" src="../image/gestion.png" alt=""></h1>
    <h2>GESTION</h2>
    <p> Vous pouvez gérer les utilisateurs, les capteurs, la FAQ et la rubrique A propos de nous.</p>
    <nav class="naviguation_gestion">
        <ul>
            <li><a class="lien_gestion" href="profil_gestionnaire_gestion_utilisateurs.php">Les utilisateurs </a></li>
            <li><a class="lien_gestion" href="profil_gestionnaire_gestion_capteurs.php">Les capteurs </a></li>
            <li><a class="lien_gestion" href="../faq/faq.php">La FAQ </a></li>
            <li><a class="lien_gestion" href="../a_propos_de_nous/a_propos_de_nous.php">A propos de nous</a></li>
        </ul>
    </nav>

    <div id="list_capteur">
        <button class="profil_capteur" onclick="openModal1()">
            <img class="battery" src="../image/battery.svg"/>
            <p2>Numéro 1</p2>

        </button>
        <button class="profil_capteur" onclick="openModal2()">
            <img class="battery" src="../image/battery.svg"/>
            <p2>Numéro 2</p2>

        </button>
        <button class="profil_capteur" onclick="openModal3()">
            <img class="battery" src="../image/battery.svg"/>
            <p2>Numéro 3</p2>

        </button>
        <button class="profil_capteur" onclick="openModal4()">
            <img class="battery" src="../image/battery.svg"/>
            <p2>Numéro 4</p2>

        </button>
        <button class="profil_capteur" onclick="openModal5()">
            <img class="battery" src="../image/battery.svg"/>
            <p2>Numéro 5</p2>

        </button>
        <button class="profil_capteur" onclick="openModal6()">
            <img class="battery" src="../image/battery.svg"/>
            <p2>Numéro 6</p2>

        </button>
    </div>

    <div class="modal" id="modal1">
        <h2>Numéro 1</h2>
        <p1>Texte numéro 1</p1>
        <button class="close" onclick="closeModal1()">close</button>
    </div>

    <div class="modal" id="modal2">
        <h2>Numéro 2</h2>
        <p1>Texte numéro 2</p1>
        <button class="close" onclick="closeModal2()">close</button>
    </div>

    <div class="modal" id="modal3">
        <h2>Numéro 3</h2>
        <p1>Texte numéro 3</p1>
        <button class="close" onclick="closeModal3()">close</button>
    </div>

    <div class="modal" id="modal4">
        <h2>Numéro 4</h2>
        <p1>Texte numéro 4</p1>
        <button class="close" onclick="closeModal4()">close</button>
    </div>

    <div class="modal" id="modal5">
        <h2>Numéro 5</h2>
        <p1>Texte numéro 5</p1>
        <button class="close" onclick="closeModal5()">close</button>
    </div>

    <div class="modal" id="modal6">
        <h2>Numéro 6</h2>
        <p1>Texte numéro 6</p1>
        <button class="close" onclick="closeModal6()">close</button>
    </div>

</div>


<!--
<form class="form_information" method="post">

    <p>
        <br/>
        <br/>
        <input type="submit" value="Les utilisateurs"
               class="bouton" style="color: #484848"/>

        <br/>
        <br/>
        <input type="submit" value="Les capteurs"
               class="bouton" style="color: #484848"/>

        <br/>
        <br/>
        <input type="submit" value="La FAQ"
               class="bouton" style="color: #484848"/>

        <br/>
        <br/>
        <input type="submit" value="A propos de nous"
               class="bouton" style="color: #484848"/>

    </p>

</form>
-->

<!--POPUP MENTIONS LEGALES ET CGU-->
<?php require "../mentions_legales_et_cgu/mentions_legales_et_cgu.php" ?>


<!--FOOTER-->

<link rel="stylesheet" href="../footer_header/footer_header.css">
<?php require "../footer_header/footer.php"?>

</body>

</html>