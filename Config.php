
<?php 

$server = "sql301.epizy.com";
$user = "epiz_33081549";
$pass = "cpjsVi4KrQE";
$database = "epiz_33081549_store";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>