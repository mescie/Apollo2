<?php

$db = new mysqli('svapollo69.nl', 'kevin', 'apollo69', 'apollo69');

if($db->connect_errno > 0) {
    die( 'Unable to connect to database [' . $db->connect_error . ']' );
}

?>