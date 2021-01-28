<?php require "../securite/bd-setup.php"; require "../securite/functions_en.php"; createSession();


    if(isset($_POST['formconnexion'])) { //si l'utilisateur clique sur 'Connexion'
        $bdd = new PDO('mysql:host=localhost;dbname=schobz_data_demo', 'root', 'root');
        $mailconnect = htmlspecialchars($_POST['username']);
        $mdpconnect = sha1($_POST['password']);

        if (!empty($mailconnect) AND !empty($mdpconnect)) {

            $requser = $bdd->prepare("SELECT * FROM personne_inscription WHERE mail = ? AND motdepasse = ?");
            $requser->execute(array($mailconnect, $mdpconnect));
            $userexist = $requser->rowCount(); //ca va compter le nombre de colonnes qui existent avec les informations qui ont été mises

            if($userexist == 1){
                $userinfo = $requser->fetch();

                $_SESSION['userinfototal'] = $userinfo;
                $_SESSION['mail'] = $userinfo ['mail'];
                $_SESSION['password'] = $userinfo ['password'];
                $_SESSION['prenom'] = $userinfo ['prenom'];
                $_SESSION['nom'] = $userinfo ['nom'];
                $_SESSION['date_de_naissance'] = $userinfo ['date_de_naissance'];
                $_SESSION['numerodepermis'] = $userinfo ['numerodepermis'];
                $_SESSION['numeroautoecole'] = $userinfo ['numeroautoecole'];


                echo '<script language="Javascript">
                 document.location.replace("../profil_utilisateur/profil_utilisateur_apercu_du_compte_en.php");
                 </script>';

            }

            else {
                echo $erreur = "You have entered a wrong passord or email adress";
            }
        }
        else{
            $erreur = "All the fileds must be completed";
        }
    }

?>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../inscription_connexion/page_inscription.css">
        <link rel='stylesheet' type='text/css' href='../footer_header/footer_header.css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <title>Inscription et connexion</title>

    </head>

    <body>
        <!--HEADER-->
        <?php
        require "../footer_header/header_en.php";
        ?>

        <div class="fond">
            <div class="form-box">
                <?php
                    echo '
                        <form method="POST" class="button-box">
                            <input type="submit" id="selectPage" name="connexion" class="toggleBTN toggleBTNGauche" value="Log in"/>
                            <input type="submit" id="selectPage" name="inscription" class="toggleBTN toggleBTNDroite" value="Sign up"/>
                        </form>';

                if (isset($_POST['inscription']) OR $_GET['goConfirmed']) {
                    displayInscription(chooseDisplayInscription());
                } else {
                    echo '
                        <!--CONNEXION-->
                        <form  id="connexion" class="Connexion" method="post" >
                            <label>
                                <input type="text" name="username" class="identif"
                                    placeholder="Username" required>
                            </label>
        
                            <label>
                                <input type="password" name="password" class="identif"
                                    placeholder="Password" required>
                            </label>
        
                            <label>
                                <input type="checkbox" class="check-box1"/> Save your passeword
                            </label>
        
                            <button type="submit" name ="formconnexion" class="connex1">Connection</button>
                            <input type="button" class="Motdepasseoubliee" onclick="window.location.href="#mdp_oublie";" value="Forgotten password">
                        </form>
        
                        <!--POPUP MOT DE PASSE OUBLIE-->
                        <div id="mdp_oublie" class="overlay">
                            <div class="popup">
                                <h2>
                                    Please enter your email adress.
                                    <br/> We will send you an email to reinitialise your password.
                                </h2>
                                <a class="close" href="#">&times;</a>
                                <span class="content">
                                <br/> <input class="mdp_mail_imput" type="text" name="email" placeholder="E-mail" >
                                </span>
                                <button type="submit" class="valider">Validate </button>
                            </div>
                        </div>';
                }
               ?>

                <!--POPUP MENTIONS LEGALES ET CGU-->
                <div id="popup_CGU" class="overlay">
                    <div class="popup">
                        <h2>Legal Notice et CGU</h2>
                        <a class="close" href="#">&times;</a>
                        <span class="content">

                    <p class="p_cgu">Phone : 0781066685<br/><br/>
                    <b> Site edition: </b> <br/> <br/>
                    The "driverpsychotechniquetest.fr" site is published by SCHOBZ Corporation. Share capital of 60 euros, headquartered at 10 rue de vanves, 92130 Issy-les-moulineaux <br/> <br/>
                    <b> Editorial manager: </b> <br/> <br/>
                    Schobz Corporation <br/>

                   <b> Host: </b> <br/> <br/>
                    The "driverpsychotechniquetest.fr" site is hosted by the company ISEP Paris <br/>
                    Address: 28 rue Notre Dame des Champs, 75006 Paris <br/> <br/>
                    <b> The use of personal data: </b> <br/> <br/>
                    No personal information will be collected without your knowledge. the information that you communicate to us during registration, information, or a request for an estimate sent by mail, telephone, e-mail or form are only intended for administrative and commercial processing of your request by the company ISEP Paris .
                    In accordance with the “Informatique et Libertés” law n 78-17 of January 6, 1978, you have the right to access, rectify and oppose your personal data.
                    In order to exercise it, all you have to do is send us a written request to the following address: <br/>
                    (put an email or postal address) <br/> <br/>

                    <b> Copyright / copyright </b> <br/> <br/>
                    All the content of this website is the property of ISEP Paris, it is protected by the laws in force of French legislation on intellectual property. <br/> <br/>
                    No element of this site may be copied, reproduced, diverted or distorted, on any medium whatsoever, without constituting an act of infringement within the meaning of articles L 335-2 and following of the intellectual property code.
                    <b> Article 1: Object </b> <br/> <br/>
                        <b> These T & Cs or General Conditions of Use legally govern the user of the services of the Drivepsychotechniquetest site (hereinafter referred to as "the site").

Constituting the contract between the company ISEP Paris, the User, access to this platform signifies acceptance of these T & Cs.
                        </b><br/><br/>
                        <b> Article 2: Legal notices </b> <br/> <br/>
                        <b> The Drivepsychotechniquetest site is edited by the company SCHOBZ Corporation, whose head office is located at 10 rue de vanves 92130 Issy les Moulineaux, France.

The host of the Drivepsychotechniquetest.fr site is ISEP Paris, at 28 rue Notre Dame des Champs, 75006 Paris, France.
</b> <br/> <br/>
                        <b> Article 3: Access to the site </b> <br/> <br/>
                        <b> The Divepsychotechniquetest.fr site allows users to access the following services:
Perform psychotechnical tests.
View test results.

The site can be accessed from any platform by any user registered with a driving school and having Internet access. All costs necessary for access to the services are the responsibility of the user or the driving school where the latter is registered.

Access to services dedicated to members is made using a username and password previously created in a driving school.

The publisher strives to allow access to the site 24 hours a day, 7 days a week, except in cases of force majeure or an event beyond its control, and subject to possible breakdowns and interventions. maintenance necessary for the proper functioning of the site and the services offered.

There is no provision for technical assistance to the user, whether by electronic or telephone means.

In addition, access to the site may be interrupted or suspended for maintenance reasons without notice.
</b> <br/> <br/>
                        <b> Article 4: Hypertext links </b> <br/> <br/>
                        <b> The site may contain hypertext links to other sites on the Internet.
                        </b> <br/> <br/>
                        <b> Article 5: Liability </b> <br/> <br/>
                        <b> The information and / or documents published on the site by the PUBLISHER mainly come from reliable sources, the site reserves the right to not guarantee the reliability of the sources.


However, it is strongly recommended that you check the accuracy of the information and / or documents on the site.

You should know that the information and / or documents made available on the site are subject to change at any time.

The user is solely responsible for the way in which he will use the information and / or documents available on the site, without the PUBLISHER being able to be sought as such, and without recourse against the latter.
</b> <br/> <br/>
                        <b> Article 6: Intellectual property </b> <br/> <br/>
                        <b> The brands, logos and the content of the site are protected by the code of intellectual property and by copyright. </b> <br/> <br/>
                        <b> Article 7: Data collection </b> <br/> <br/>
                        <b> For the creation of the user or manager's account, the collection of information when registering on the site is necessary and mandatory for the performance of the tests.
In accordance with Law No. 78-17 of 6 January relating to computers, files and freedoms, the collection and processing of personal information is carried out with respect for private life.

According to the Data Protection Act dated January 6, 1978, articles 39 and 40, the User has the right to access, rectify or delete his personal data.
 </b> <br/> <br/>
            </p>
        </span>
    </div>
</div>
</div>
        </div>

        <!--FOOTER-->
        <?php
        require "../footer_header/footer_en.php"
        ?>
        <script src="inscription.js"></script>
    </body>
</html>