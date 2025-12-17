<?php
include "../config/database.php";

if(isset($_POST['register'])){
 $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
 mysqli_query($conn,"INSERT INTO utilisateurs 
 (nom,email,role,motpasse_hash,statut)
 VALUES ('$_POST[nom]','$_POST[email]','$_POST[role]','$pass',0)");
 echo "Inscription réussie";
}
?>