<!DOCTYPE html>
<meta charset="UTF-8">
<html lang='fr'>
<head>

    <?php

    $bdd = new PDO('mysql:host=localhost;dbname=schobz_data_demo', 'root', 'root'); // nom bdd : bdd, on se connecte à la bdd qui a pour hote localhost + son nom, le user c'est root et mdp root, on actualise, il y a 0 bug

    if (isset($_POST['envoyer'])) {

        $email = $_POST['mailform'];
        $header="Mine-Version: 1.0\r\n";
        $header.='From: "Contact.SCHBOTZ.com"<support@schobtz'."\n";
        $header.='Content-Type:text/html; charset="utf-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        if (isset($email)){
            $message ='
            <!DOCTYPE html>
            <html lang="fr">
                <body>
                    <div style="padding:0;margin:0 auto;font-size:16px;font-weight:normal;line-height:22px"> 
                        Bonjour,. Merci de votre inscription dans la formation. Cependant, il reste une dernière étape avant la validation de votre compte. Il suffit de cliquer sur le lien ci-joint:<br/>
                        <a href="http://localhost/verified.php?verified=1'.'&email='.$email.'">Verify here</a>
                    </div>                
                </body>
            </html>';

            mail($email,"Une dernière étape,".$message,$header);
        } else {
            echo "<p>Merci de bien renseigner vos informations</p>";
        }
    }
    ?>

</head>
<body>
<h1>
    Merci de votre inscription. Cependant, il reste une dernière étape. <br/>
    Il vous reste à vérifier votre adresse mail. Merci de renseigner votre addresse mail.
</h1>
<form method="POST">
    <input type="nom" placeholder="Renseigner votre nom" name="nom">
    <input type="email" placeholder="Recevoir un mail" name="mailform"> <!-- Permet d'envoyer un mail en un click -->
    <input type="submit" name="envoyer">
</form>
</body>
</html>