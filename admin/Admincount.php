<?php 
    include 'connection.php';
    $sql = "SELECT * FROM admin";
    $query = $db->query($sql);

    echo "$query->num_rows";

?>