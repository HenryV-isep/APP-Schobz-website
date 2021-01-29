<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="profil_gestionnaire_mes_informations.css">
    <link rel="stylesheet" href="profil_gestionnaire_apercu_du_compte.css">
    <link rel="stylesheet" href="../footer_header/footer_header.css">
    <link rel="stylesheet" href="../mentions_legales_et_cgu/mentions_legales_et_cgu.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <meta charset="UTF-8">
    <title>Profil gestionnaire/Mes informations</title>

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

<!--INFORMATION-->

<div class="presentation_information">
    <h1><img class="titreicon" src="../image/information.png" alt=""></h1>
    <h2>MES INFORMATIONS</h2>
    <p> N'hésitez pas à modifier vos coordonnés pour que votre compte soit parfaitement à jour.</p>
</div>

<form class="form_information" action="gestionnaire.php" method="post">

    <p>

        <label for="genre"><br/>Genre :</label><br/>
        <select name="genre" id="genre" class="genre" style="color: #484848">
            <option value="Femme">Femme</option>
            <option value="Homme">Homme</option>
            <option value="Autre">Autre </option>
        </select>

        <br/> <!--Permet de sauter des lignes entre les cases-->
        <br/>
        <label for="name">Nom de famille :</label><br/>
        <input type="text" id="name" name="user_name"
               class="remplissage_text" style="color: #484848"/>


        <br/>
        <br/>
        <label for="prenom">Prénom :</label><br/>
        <input type="text" id="prenom" name="user_prenom"
               class="remplissage_text"/>

        <br/>
        <br/>
        <label for="mail">Adresse mail :</label><br/>
        <input type="email" id="mail" name="user_mail"
               class="remplissage_other"/>

        <br/>
        <br/>
        <label for="pass">Mot de passe actuel :</label><br/>
        <input type="password" name="pass" id="pass"
               class="remplissage_other"/>
        <br/>
        <br/>
        <label for="newpass">Nouveau mot de passe :</label><br/> <!--Permet de mettre des espaces pour aligner avec la zone de texte-->
        <input type="password" name="newpass" id="newpass"
               class="remplissage_other" />

        <br/>
        <br/>
        <label for="tel">Numéro de téléphone :</label><br/>
        <input type="tel" name="tel" id="tel"
               class="remplissage_other"/>

        <br/>
        <br/>
        <label for="autoecole">Nom de l'auto-école :</label><br/>
        <input type="text" name="autoecole" id="autoecole"
               class="remplissage_text"/>

        <br/>
        <br/>
        <label for="date">Date de naissance :</label><br/>
        <input type="date" name="date" id="date"
               class="remplissage_date" />

        <br/>
        <br/> <!--
        <label for="photo">Ajouter une photo :</label><br/>
        <input type="file" name="photo" id="photo"/> -->

        <br/>
        <br/>
        <input type="submit" value="Sauvegarder"
               style="color: #484848"/>

    </p>

</form>

<!--POPUP MENTIONS LEGALES ET CGU-->
<?php require "../mentions_legales_et_cgu/mentions_legales_et_cgu.php" ?>


<!--FOOTER-->

<?php require "../footer_header/footer.php"?>

</body>

</html>