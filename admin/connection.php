<?php
 $db = mysqli_connect('sql301.epizy.com', 'epiz_33081549', 'cpjsVi4KrQE') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'epiz_33081549_store' ) or die(mysqli_error($db));
?>