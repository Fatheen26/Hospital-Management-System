<?php 
    include 'connection.php';
    $sql = "SELECT * FROM doctor";
    $query = $db->query($sql);

    echo "$query->num_rows";

?>