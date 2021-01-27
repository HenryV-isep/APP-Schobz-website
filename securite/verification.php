<?php
require "../securite/bd-setup.php";
$mail = $_GET['email'];

$sql = "UPDATE `personne_inscription` SET `accountConfirned`= 1 WHERE `mail`='$mail'";

if (mysqli_query($conn,$sql) === TRUE) {
    header("location: ../accueil/accueil.php?confirmed=oui");
} else {
    header("location: ../accueil/accueil.php?goConfirmed=non");
}
mysqli_close($conn);