<?php

require_once('../db_config.php');

$naam           = $_POST['naam'];
$positie        = $_POST['positie'];

if (isset($_POST['save']) && !empty($_POST['naam'])) {

    $sql = "INSERT INTO sb_users (naam, positie)
            VALUES ('$naam', '$positie')";

    if (!$result = $db->query( $sql )) {
        die( 'There was an error running the query [' . $db->error . ']' );
    }

    header("Location: logged.php");
    exit();
} else {
    echo 'Error!';
}
?>