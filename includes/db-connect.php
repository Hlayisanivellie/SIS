<?php

$servername = "dedi262.jnb2.host-h.net";
$username = "cmsvok_1";
$password = "HZ8f4e1K45m67POyt30O";
$dbname = "cmsvok_db1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


    $customerID = 118;

?>