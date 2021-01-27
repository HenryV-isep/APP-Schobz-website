<?php
// ========================================================================== //
// Function for create session
function createSession  () {
    if (!isset($_SESSION['start'])) {
        session_start();
        $_SESSION['start'] = 'start';
    }
}

// ========================================================================== //
// Funtion to display inscription
function displayInscription ($affichage) {
    switch ($affichage) {
        case 2 : 
            echo '
            Merci de votre inscription. Cependant, il reste une dernière étape.
            Il vous reste à vérifier votre adresse mail.';
            break;
        default : 
            $maxYear= date("Y") - 18;
            $minYear= date("Y") - 100;
            $nowDay= date("d");
            $nowMonth= date("m");
            $maxDate=date("Y-m-d", strtotime("".$maxYear."-".$nowMonth."-".$nowDay.""));
            $minDate=date("Y-m-d", strtotime("".$minYear."-".$nowMonth."-".$nowDay.""));
            echo '
                <!--INSCRIPTION-->
                <form id="Inscription" class="Identification" method="post" action="traitement_inscription.php">
                    <label>
                        <select name="choixgenre" class="genre" required>
                            <option value="'.null.'">-- Genre --</option>
                            <option>Homme</option>
                            <option>Femme</option>
                            <option>Autre</option>
                        </select>
                    </label>
                    <label>
                        <input name="nom" class="identif2" type="text" placeholder="Nom*" required/>
                    </label>
                    <label>
                        <input name="prenom" class="identif2" type="text" placeholder="Prénom*" required/>
                    </label>
                    <label>
                        <input name="date_de_naissance" class="identif2" type="date" placeholder="Date de naissance*" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" max="'.$maxDate.'" min="'.$minDate.'" required/>
                    </label>
                    <label>
                        <input name="email" class="identif2" type="email" placeholder="Adresse email*" required/>
                    </label>
                    <label>
                        <input name="password" class="identif2" id="new_password" type="password" placeholder="Mot de passe*" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir au mois 8 caractère, dont une majuscule, un chiffre" required/>
                    </label>
                    <label>
                        <input name="confirm_password" class="identif2" id="confirm_password"  type="password" placeholder="Confirmez votre mot de passe*" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir au mois 8 caractère, dont une majuscule, un chiffre" required/>
                    </label>
                    <label>
                        <input name="numero_de_permis" class="identif2" type="text" placeholder="Numéro de permis"/>
                    </label>
                    <label>
                        <input name="numero_auto_ecole" class="identif2" type="text" placeholder="Numéro d\'auto école* (Nombre à 4 chirffres)" pattern="[0-9]{4}" title="Nombre à 4 chirffres" required/>
                    </label>
                    <label>
                        <input type="radio" class="CGU" name="choice" value="oui" required/> J\'ai lu et j\'accepte les <br/><a class="link_CGU" href=#popup_CGU>mentions légales & CGU </a>
                    </label>
                    <button type="submit" name ="forminscription" class="valider">Valider</button>
                </form>';
                break;
            
    }
}

// ========================================================================== //
// Function to choose the display of inscriptio
function chooseDisplayInscription () {
    if (isset($_POST['inscription'])) {
        $affichage = 1;
    } elseif ($_GET['goConfirmed']) {
        $affichage = 2;
    }
    return $affichage;
}




// ========================================================================== //
// Function to display Header-C
function linkHeaderConnected () {
    global $lang;
    $page = getUrl (); 
    if (isset($_SESSION['accountType'])){
        if ($_SESSION['accountType'] == 'conducteur') {
        switch ($page) {
            case "http://localhost/app_info/php/PAGE/accueil.php" :
                $afficher2 = '
                <div>
                    <a href="prise_de_rdv.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['PDRDV'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="resultats_conducteur.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['RC'].'
                    </a>
                </div>
                <div class="point"></div>
                ';
                break;
            case "http://localhost/app_info/php/PAGE/prise_de_rdv.php" :
                $afficher2 = '
                <div>
                    <a href="accueil.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['Accueil'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="resultats_conducteur.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['RC'].'
                    </a>
                </div>
                <div class="point"></div>
                ';
                break;
            case "http://localhost/app_info/php/PAGE/resultats_conducteur.php" :
                $afficher2 = '
                <div>
                    <a href="accueil.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['Accueil'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="prise_de_rdv.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['PDRDV'].'
                    </a>
                </div>
                <div class="point"></div>
                ';
                break;
            default :
                $afficher2 = '
                <div>
                    <a href="accueil.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['Accueil'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="prise_de_rdv.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['PDRDV'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="resultats_conducteur.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['RC'].'
                    </a>
                </div>
                <div class="point"></div>
                ';
                break;
        };
    } else if ($_SESSION['accountType'] == 'examinateur') {
        switch ($page) {
            case "http://localhost/app_info/php/PAGE/accueil.php" :
                $afficher2 = '
                <div>
                    <a href="gerer-tests.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['Gerer-tests'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="liste_des_rdvs.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['LDRDV'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="resultats_examinateur.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['RC'].'
                    </a>
                </div>
                <div class="point"></div>
                ';
                break;
            case "http://localhost/app_info/php/PAGE/liste_des_rdvs.php" :
                $afficher2 = '
                <div>
                    <a href="accueil.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['Accueil'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="gerer-tests.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['Gerer-tests'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="resultats_examinateur.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['RC'].'
                    </a>
                </div>
                <div class="point"></div>
                ';
                break;
            case "http://localhost/app_info/php/PAGE/resultats_examinateur.php" :
                $afficher2 = '
                <div>
                    <a href="accueil.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['Accueil'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="gerer-tests.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['Gerer-tests'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="liste_des_rdvs.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['LDRDV'].'
                    </a>
                </div>
                <div class="point"></div>
                ';
                break;
            //A enlever après la demo
            case "http://localhost/app_info/php/PAGE/gerer-tests.php" :
                $afficher2 = '
                <div>
                    <a href="accueil.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['Accueil'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="resultats_examinateur.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['RC'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="liste_des_rdvs.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['LDRDV'].'
                    </a>
                </div>
                <div class="point"></div>
                ';
                break;
            default :
                $afficher2 = '
                <div>
                    <a href="accueil.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['Accueil'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="gerer-tests.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['Gerer-tests'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="liste_des_rdvs.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['LDRDV'].'
                    </a>
                </div>
                <div class="point"></div>
                <div>
                    <a href="resultats_examinateur.php?'.choose_lien_lang().'" class="text-link-header">
                        '.$lang['RC'].'
                    </a>
                </div>
                <div class="point"></div>
                ';
                break;
        };
    }  elseif ($_SESSION['accountType'] == 'admin') {
        switch ($page) {
            case "http://localhost/app_info/php/PAGE/accueil.php" :
                $afficher2 = '
                    <div>
                        <a href="admin.php?'.choose_lien_lang().'" class="text-link-header">
                            '.$lang['Gestion'].'
                        </a>
                    </div>
                    <div class="point"></div>';
                break;
            case "http://localhost/app_info/php/PAGE/admin.php" :
                $afficher2 = '
                    <div>
                        <a href="accueil.php?'.choose_lien_lang().'" class="text-link-header">
                            '.$lang['Accueil'].'
                        </a>
                    </div>
                    <div class="point"></div>';
                break;
            default :
                $afficher2 = '
                    <div>
                        <a href="accueil.php?'.choose_lien_lang().'" class="text-link-header">
                            '.$lang['Accueil'].'
                        </a>
                    </div>
                    <div class="point"></div>
                    <div>
                        <a href="admin.php?'.choose_lien_lang().'" class="text-link-header">
                            '.$lang['Gestion'].'
                        </a>
                    </div>
                    <div class="point"></div>';
                break;
            };
        }
    }
    else {
        header("location: connexion.php?".choose_lien_lang());
    }
    return $afficher2;
}

// ========================================================================== //
// Function to get URL without language
function getUrl () {
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on') {
        $url = "https"; 
    } else {
        $url = "http";
    }
    return $url."://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
}