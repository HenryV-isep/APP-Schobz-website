<?php

$pages = scandir('pages/');

if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages)){
    $page = $_GET['page'];
}else{
    $page='home';
}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Schobz</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="footer_header.css"> <!-- Pour lier la page css et html -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>

<body>
<?php include 'body/topbar.php'; ?>
<?php include 'body/footer.php'; ?>
<?php include 'body/contenu.php'; ?>
<?php include 'body/fond.php'; ?>

<div class="container">
    <div class="search-box">
        <input type="text" class="search" placeholder="rechercher" style="color: #615858">  <!-- style pour le couleur dans le input de la barre de recherche -->
        <button type="submit" class="search-btn">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>

</body>
</html>