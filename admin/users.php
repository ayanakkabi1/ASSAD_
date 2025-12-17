<?php
include "../config/database.php";
$res = mysqli_query($conn,"SELECT * FROM utilisateurs");

while($u=mysqli_fetch_assoc($res)){
 echo $u['nom']." - ".$u['role'];
 echo "<a href='?ok=".$u['id']."'>Approuver</a><br>";
}

if(isset($_GET['ok'])){
 mysqli_query($conn,"UPDATE utilisateurs SET statut=1 WHERE id=".$_GET['ok']);
}

?>