<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="./faq.css">
    <link rel="stylesheet" type="text/css" href="../footer_header/footer_header.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>FAQ</title>
</head>
<body>

<!-- Header à ajouter -->
<?php require "../footer_header/header_en.php" ?>

<!-- Corps principal -->
<div class="regroupement">
    <div class="categorie-QT">
        <a class="entête" href="#popup_QT">
            Technical questions
        </a>
        <p class="Talk">
            For all questions concerning the operation of the site, the reading of the results or the statement of measurements.
        </p>
    </div>
    <div class="categorie-InfoCap">
        <a class="entête" href="#popup_InfoCap">
            Information sensor
        </a>
        <p class="Talk">
            For all questions concerning the measuring device


        </p>
    </div>
    <div class="categorie-ProbCap">
        <a class="entête" href="#popup_ProbCap">
            Sensor Problem
        </a>
        <p class="Talk">
            For any damage to the system, please report it to your driving school.
        </p>
    </div>
    <div class="categorie-QF">
        <a class="entête" href="#popup_QF">
            Frequent questions
        </a>
        <p class="Talk">
            For all general questions concerning the operation of the service.
        </p>
    </div>
    <div class="categorie-AddF">
        <a class="entête" href="#popup_AddF">
            Add a question
        </a>
        <p class="Talk">
            For any other requests
        </p>
    </div>
</div>


<!-- Popup -->
<div id="popup_QT" class="overlay">
    <div class="popup">
        <h2>
            Technicals Questions
        </h2>
        <a class="close" href="#">&times;</a>
        <span class="content">
                    <h3>How to  read the results ?</h3>
                    <p>It is possible to read the results via the profile, section My Results. You will be able to follow your progress.</p>
                    <h3>How to follow the measurement record ?</h3>
                    <p>You have access to the measurements from your profile. Your monitoring can then be done directly by graphics.</p>
                </span>
    </div>
</div>

<div id="popup_InfoCap" class="overlay">
    <div class="popup">
        <h2>
            Sensor Information
        </h2>
        <a class="close" href="#">&times;</a>
        <span class="content">
                    <h3>What do measuring devices do ?</h3>
                    <h3>What are they for ?</h3>
                    <h3>How do they work ?</h3>
                </span>
    </div>
</div>

<div id="popup_ProbCap" class="overlay">
    <div class="popup">
        <h2>
            Problem with the sensor
        </h2>
        <a class="close" href="#">&times;</a>
        <span class="content">
                    <h3>What to do when a device does not activate?</h3>
                </span>
    </div>
</div>

<div id="popup_QF" class="overlay">
    <div class="popup">
        <h2>
            Frequent Questions
        </h2>
        <a class="close" href="#">&times;</a>
        <span class="content">
                   For all general questions about the operation of the service.
                    <h3>How to access his profile?</h3>
                    <p>The profile is accessible via the "Profile" button at the top of the page.</p>
                </span>
    </div>
</div>

<div id="popup_AddF" class="overlay">
    <div class="popup">
        <h2>Add a question</h2>
        <a class="close" href="#">&times;</a>
        <span class="content">
                    <h3>For any other request, please refer to the Contact Us section at the bottom of the page to send a message.</h3>
                </span>
    </div>
</div>

<!-- Bas de page à ajouter - Footer-->
<?php require "../mentions_legales_et_cgu/mentions_legales_et_cgu_en.php" ?>

<?php require "../footer_header/footer_en.php" ?>


</body>
</html>