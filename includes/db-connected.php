<?php

$servername = "dedi1047.jnb1.host-h.net";
$username = "reunecnfes_1";
$password = "s8ixkuAcxAqmmpjb5zt8";
$dbname = "reunecnfes_db1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


    $customerID = 118;

?>