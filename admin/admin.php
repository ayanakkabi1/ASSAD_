<?php
include "../config/database.php";
echo "Total visiteurs : ".mysqli_num_rows(mysqli_query($conn,"SELECT id FROM utilisateurs"));

?>