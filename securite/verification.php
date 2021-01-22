<DOCTYPE html>
    <html>
    <body>
    <?php
    $verification = $_GET['verified'];
    if ($verification == 1) {
        $nom =$_GET['nom'];
        $dBHost = "localhost";
        $dBUser = "root";
        $dBPassword = "root";
        $dBDatabase = "schobz_data";
        $port = "3306";

        $conn = mysqli_connect($dBHost, $dBUser, $dBPassword, $dBDatabase, $port);

        if (!$conn) {
            die("Échec de la connexion:" . mysqli_connect_error());
        }

        $sql = "UPDATE personne SET verified=1 WHERE nom='$nom'";

        if (mysqli_query($conn,$sql) === TRUE) {
            echo "Compte vérifié";
        } else {
            echo "Une erreur s'est produite lors de la vérification du compte: " . $conn->error;
        }
        mysqli_close($conn);
    } else {
        echo "Nous sommes désolés. Il semble y avoir une erreur lors de la vérification. Merci de réessayer";
    }

    ?>
    </body>
    </html>