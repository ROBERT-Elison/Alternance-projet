
<?php
/* parametre par default (user 'root' with no password) */
define('DB_SERVER', 'phpmyadmin');
define('DB_USERNAME', 'Simplon974');
define('DB_PASSWORD', '');
define('DB_NAME', 'Astrocoffee');
 
/*connexion a la basedone avec MySQL */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

    
