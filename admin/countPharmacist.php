<?php 
    include 'connection.php';
    $sql = "SELECT * FROM pharmacist";
    $query = $db->query($sql);

    echo "$query->num_rows";

?>