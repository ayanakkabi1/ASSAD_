<?php 
include "../config/database.php";

if(isset($_POST['reserve'])){
 mysqli_query($conn,"INSERT INTO reservations
 (idvisite,idutilisateur,nbpersonnes,datereservation)
 VALUES ($_POST[idvisite],".$_SESSION['id'].",$_POST[nb],NOW())");
 echo "Réservation confirmée";
}

?>