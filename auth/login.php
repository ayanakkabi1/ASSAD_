<?php
include "../config/database.php";
$res = mysqli_query($conn,"SELECT * FROM utilisateurs WHERE email='$_POST[email]'");
$user = mysqli_fetch_assoc($res);

if($user && password_verify($_POST['password'],$user['motpasse_hash'])){
 if($user['role']=="guide" && $user['statut']==0){
   die("Compte guide non approuvé");
 }
 $_SESSION['id']=$user['id'];
 $_SESSION['role']=$user['role'];
 header("Location: ../index.php");
}
?>