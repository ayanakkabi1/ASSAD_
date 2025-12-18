<?php
include "../config/database.php";

if(isset($_POST['add'])){
 mysqli_query($conn,"INSERT INTO visitesguidees
 (titre,description,dateheure,langue,capacite_max,duree,prix,statut,id_guide)
 VALUES ('$_POST[titre]','$_POST[desc]','$_POST[date]',
 '$_POST[langue]',$_POST[cap],$_POST[duree],$_POST[prix],'active',".$_SESSION['id'].")");
}

?>