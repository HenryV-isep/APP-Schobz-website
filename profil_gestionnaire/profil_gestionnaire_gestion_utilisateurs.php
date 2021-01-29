<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="profil_gestionnaire_gestion_utilisateurs.css">
    <link rel="stylesheet" href="../footer_header/footer_header.css">
    <link rel="stylesheet" href="../mentions_legales_et_cgu/mentions_legales_et_cgu.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="profil_gestionnaire_apercu_du_compte.css">
    <link rel="stylesheet" href="profil_gestionnaire_gestion.css">
    <script src="profil_gestionnaire_gestion_utilisateurs.js"></script>
    <meta charset="UTF-8">
    <title> Profil gestionnaire/Gestion</title>

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
    <div class="recherche_utilisateur">
        <div class="container">
            <div class="search-box">
                <input type="text" class="search" placeholder="Recherchez un utilisateur" style="color: #615858">  <!-- style pour le couleur dans le input de la barre de recherche -->
                <button type="submit" class="search-btn">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <div id="list_utilisateur">
        <button class="profil_utilisateur" onclick="openModal1()">
            <img class="tete" src="../image/utilisateur.png"/>
            <p2>Jean Dupont</p2>

        </button>
        <button class="profil_utilisateur" onclick="openModal2()">
            <img class="tete" src="../image/utilisateur.png" />
            <p2>Jean Dupont</p2>

        </button>
        <button class="profil_utilisateur" onclick="openModal3()">
            <img class="tete" src="../image/utilisateur.png" >
            <p2>Jean Dupont</p2>

        </button>
        <button class="profil_utilisateur" onclick="openModal4()">
            <img class="tete" src="../image/utilisateur.png" />
            <p2>Jean Dupont</p2>

        </button>
        <button class="profil_utilisateur" onclick="openModal5()">
            <img class="tete" src="../image/utilisateur.png" />
            <p2>Jean Dupont</p2>

        </button>
        <button class="profil_utilisateur" onclick="openModal6()">
            <img class="tete" src="../image/utilisateur.png"/>
            <p2>Jean Dupont</p2>

        </button>
    </div>

    <div class="modal" id="modal1">
        <h2>Jean Dupont</h2>
        <p1>Adresse mail
        </br> Numéro de téléphone
        </br> Numéro de permis
        </br> Date de naissance
        </br> Résultat des test
        </p1>
        <button class="close" onclick="closeModal1()">close</button>
    </div>

    <div class="modal" id="modal2">
        <h2>Jean Dupont</h2>
        <h2>Jean Dupont</h2>
        <p1>Adresse mail
            </br> Numéro de téléphone
            </br> Numéro de permis
            </br> Date de naissance
            </br> Résultat des test
        </p1>
        <button class="close" onclick="closeModal2()">close</button>
    </div>

    <div class="modal" id="modal3">
        <h2>Jean Dupont</h2>
        <h2>Jean Dupont</h2>
        <p1>Adresse mail
            </br> Numéro de téléphone
            </br> Numéro de permis
            </br> Date de naissance
            </br> Résultat des test
        </p1>
        <button class="close" onclick="closeModal3()">close</button>
    </div>

    <div class="modal" id="modal4">
        <h2>Jean Dupont</h2>
        <h2>Jean Dupont</h2>
        <p1>Adresse mail
            </br> Numéro de téléphone
            </br> Numéro de permis
            </br> Date de naissance
            </br> Résultat des test
        </p1>
        <button class="close" onclick="closeModal4()">close</button>
    </div>

    <div class="modal" id="modal5">
        <h2>Jean Dupont</h2>
        <h2>Jean Dupont</h2>
        <p1>Adresse mail
            </br> Numéro de téléphone
            </br> Numéro de permis
            </br> Date de naissance
            </br> Résultat des test
        </p1>
        <button class="close" onclick="closeModal5()">close</button>
    </div>

    <div class="modal" id="modal6">
        <h2>Jean Dupont</h2>
        <h2>Jean Dupont</h2>
        <p1>Adresse mail
            </br> Numéro de téléphone
            </br> Numéro de permis
            </br> Date de naissance
            </br> Résultat des test
        </p1>
        <button class="close" onclick="closeModal6()">close</button>
    </div>

</div>

<!--POPUP MENTIONS LEGALES ET CGU-->
<?php require "../mentions_legales_et_cgu/mentions_legales_et_cgu.php" ?>

<!--FOOTER-->

<link rel="stylesheet" href="../footer_header/footer_header.css">
<?php require "../footer_header/footer.php"?>

</body>

</html>