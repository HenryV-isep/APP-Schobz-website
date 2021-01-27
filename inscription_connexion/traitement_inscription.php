
<?php
require "../securite/bd-setup.php";
    $genre = $_POST['choixgenre'];
    $nom = htmlspecialchars($_POST['nom']); //Pour éviter que du code soit mis dans les cases à remplir (c'est une sécurité)
    $prenom = htmlspecialchars($_POST['prenom']);
    $date_de_naissance = htmlspecialchars($_POST['date_de_naissance']);
    $mail = htmlspecialchars($_POST['email']);
    $hashedPwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $numero_de_permis = $_POST['numero_de_permis'];
    $num_autoecole = $_POST['numero_auto_ecole'];

    $sql = "INSERT INTO personne_inscription(genre, nom, prenom, datedenaissance, mail, motdepasse, numerodepermis, numeroautoecole) VALUES ('$genre','$nom','$prenom', '$date_de_naissance', '$mail', '$hashedPwd', '$numero_de_permis', '$num_autoecole')";
    $resultData = mysqli_query($conn,$sql);
    mysqli_close($conn);

    $header="Mine-Version: 1.0\r\n";
    $header.='From: "Contact.SCHBOTZ.com"<support@schobtz'."\n";
    $header.='Content-Type:text/html; charset="utf-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';
    $message ='
        <!DOCTYPE html>
        <html lang="fr">
            <body>
                <div style="padding:0;margin:0 auto;font-size:16px;font-weight:normal;line-height:22px"> 
                    Bonjour,. Merci de votre inscription dans la formation. Cependant, il reste une dernière étape avant la validation de votre compte. Il suffit de cliquer sur le lien ci-joint:<br/>
                    <a href="http://localhost/APP-Schobz-website/securite/verification.php?confirmed=1'.'&email='.$mail.'">Verify here</a>
                </div>                
            </body>
        </html>';

    mail($mail,"Confirmation de votre adresse mail",$message,$header);

    header("location: page_inscription.php?goConfirmed=go");