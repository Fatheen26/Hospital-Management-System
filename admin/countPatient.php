<?php 
    include 'connection.php';
    $sql = "SELECT * FROM patient";
    $query = $db->query($sql);

    echo "$query->num_rows";

?>