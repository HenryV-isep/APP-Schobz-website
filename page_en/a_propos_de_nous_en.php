<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A propos de nous</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../a_propos_de_nous/a_propos_de_nous.css">
    <link rel="stylesheet" href="../footer_header/footer_header.css">
    <script src="../a_propos_de_nous/a_propos_de_nous.js"></script>
</head>
<body>

<?php 
require "../footer_header/header_en.php";
?>

<div class="page">
    <div id="photo">
        <h1>Presentation of the team</h1>
        <div id="images">
            <button class="profil" onclick="openModal1()">
                <img class="tete" src="../image/utilisateur.png"/>
                <p2>Number 1</p2>

            </button>
            <button class="profil" onclick="openModal2()">
                <img class="tete" src="../image/utilisateur.png" />
                <p2>Number 2</p2>

            </button>
            <button class="profil" onclick="openModal3()">
                <img class="tete" src="../image/utilisateur.png" >
                <p2>Number 3</p2>

            </button>
            <button class="profil" onclick="openModal4()">
                <img class="tete" src="../image/utilisateur.png" />
                <p2>Number 4</p2>

            </button>
            <button class="profil" onclick="openModal5()">
                <img class="tete" src="../image/utilisateur.png" />
                <p2>Number 5</p2>

            </button>
            <button class="profil" onclick="openModal6()">
                <img class="tete" src="../image/utilisateur.png"/>
                <p2>Number 6</p2>

            </button>
        </div>
    </div>

    <div id="texte">

        <h1 id="titre">
            About us
        </h1>

        <h3>
            Driving School ****
        </h3>

        <p id="pa">
            Presentation of the driving school
        </p>

    </div>
</div>

<div class="modal" id="modal1">
    <h2>Number 1</h2>
    <p1>Text number 1</p1>
    <button class="close" onclick="closeModal1()">close</button>
</div>

<div class="modal" id="modal2">
    <h2>Number 2</h2>
    <p1>Text number 2</p1>
    <button class="close" onclick="closeModal2()">close</button>
</div>

<div class="modal" id="modal3">
    <h2>Number 3</h2>
    <p1>Text number 3</p1>
    <button class="close" onclick="closeModal3()">close</button>
</div>

<div class="modal" id="modal4">
    <h2>Number 4</h2>
    <p1>Text number 4</p1>
    <button class="close" onclick="closeModal4()">close</button>
</div>

<div class="modal" id="modal5">
    <h2>Number 5</h2>
    <p1>Text number 5</p1>
    <button class="close" onclick="closeModal5()">close</button>
</div>

<div class="modal" id="modal6">
    <h2>Number 6</h2>
    <p1>Text number 6</p1>
    <button class="close" onclick="closeModal6()">close</button>
</div>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Schobz</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css"> <!-- Pour lier la page css et html -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>

<body>
<?php include 'body/topbar.php'; ?>
<?php include 'body/footer.php'; ?>
<?php include 'body/contenu.php'; ?>
<?php include 'body/fond.php'; ?>


<link rel="stylesheet" href="Footer-header.css">
<?php require "../footer_header/footer_en.php";
?>

</body>
</html>


</body>
</html>