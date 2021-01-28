<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=schobz_data_demo', 'root', 'root'); // nom bdd : bdd, on se connecte à la bdd qui a pour hote localhost + son nom, le user c'est root et mdp root, on actualise, il y a 0 bug

    $mailconnect = $_SESSION['mail'];
    $mdpconnect = $_SESSION['password'];

    $requser = $bdd->prepare("SELECT * FROM personne_inscription WHERE mail = ? AND motdepasse = ?");
    $requser->execute(array($mailconnect, $mdpconnect));
    $userinfo = $requser->fetch(); //il recupere le reponse de bdd et transforme sous forme de tableau php

    if(isset($_POST['formsauvegarder'])) {

        $nouveaumdp = sha1($_POST['newpass']);

        if (!empty($nouveaumdp)){

            $requser = $bdd->prepare('UPDATE personne_inscription SET motdepasse = ? WHERE mail = ?');
            $requser->execute(array($nouveaumdp,$_SESSION['mail']));
            $requser->closeCursor();

        }
    }
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="profil_utilisateur_mes_informations.css">
    <link rel="stylesheet" href="profil_utilisateur_apercu_du_compte.css">
    <link rel="stylesheet" href="../footer_header/footer_header.css">
    <link rel="stylesheet" href="../mentions_legales_et_cgu/mentions_legales_et_cgu.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <meta charset="UTF-8">
    <title>Profil utilisateur/Mes informations</title>

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

<!--INFORMATION-->

<div class="presentation_information">
    <h1><img class="titreicon" src="../image/information.png" alt=""></h1>
    <h2>MES INFORMATIONS</h2>
    <p> N'hésitez pas à modifier vos coordonnés pour que votre compte soit parfaitement à jour.</p>
</div>

<form class="form_information" method="post">


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
               class="remplissage_text" value =" <?php if(isset($_SESSION["nom"])){echo $_SESSION["nom"];} ?>" >


        <br/>
        <br/>
        <label for="prenom">Prénom :</label><br/>
        <input type="text" id="prenom" name="user_prenom"
               class="remplissage_text" value =" <?php if(isset($_SESSION["prenom"])){echo $_SESSION["prenom"];} ?>"/>

        <br/>
        <br/>
        <label for="mail">Adresse mail :</label><br/>
        <input type="email" id="mail" name="user_mail"
               class="remplissage_text" value ="<?php if(isset($_SESSION["mail"])){echo $_SESSION["mail"];} ?>"/>

        <br/>
        <br/>
        <label for="pass">Mot de passe actuel :</label><br/>
        <input type="password" name="pass" id="pass"
               class="remplissage_text" value ="<?php if(isset($_SESSION["password"])){echo $_SESSION["password"];} ?>"/>
        <br/>



        <br/>
        <label for="newpass">Nouveau mot de passe :</label><br/> <!--Permet de mettre des espaces pour aligner avec la zone de texte-->
        <input type="password" name="newpass" id="newpass"
               class="remplissage_other"/>





        <br/>
        <br/>
        <label for="tel">Numéro de téléphone :</label><br/>
        <input type="tel" name="tel" id="tel"
               class="remplissage_other"/>

        <br/>
        <br/>
        <label for="tel">Numéro de permis :</label><br/>
        <input type="text" name="permis" id="permis"
               class="remplissage_text" value ="<?php if(isset($_SESSION["numerodepermis"])){echo $_SESSION["numerodepermis"];} ?>"/>


        <br/>
        <br/>
        <label for="autoecole">Nom de l'auto-école :</label><br/>
        <input type="text" name="autoecole" id="autoecole"
               class="remplissage_text" value = "<?php if(isset($_SESSION["numerodepermis"])){echo $_SESSION["numerodepermis"];} ?>"/>

        <br/>
        <br/>
        <label for="date">Date de naissance :</label><br/>
        <input type="date" name="date" id="date"
               class="remplissage_text" value ="<?php if(isset($_SESSION["date_de_naissance"])){echo $_SESSION["date_de_naissance"];} ?>"/>

        <br/>
        <br/>
        <!--
        <label for="photo">Ajouter une photo :</label><br/>
        <input type="file" name="photo" id="photo"/> -->

        <br/>
        <br/>

        <input name ="formsauvegarder" type="submit" value="Sauvegarder"
               style="color: #484848"/>

    </p>

</form>


<!--POPUP MENTIONS LEGALES ET CGU-->
<?php require "../mentions_legales_et_cgu/mentions_legales_et_cgu.php"; ?>

<!--FOOTER-->

<?php require "../footer_header/footer.php"; ?>

</body>

</html>