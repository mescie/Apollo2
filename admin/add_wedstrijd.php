<?php

require_once('../db_config.php');

$tegenstander           = $_POST['tegenstander'];
$datum                  = $_POST['datum'];
$winst                  = $_POST['winst'];
$eindstand              = $_POST['doelpunt_voor'] . "-" . $_POST['doelpunt_tegen'];

if (isset($_POST['save']) && !empty($_POST['tegenstander'])) {

    $sql = "INSERT INTO wedstrijden (tegenstander, datum, winst, stand)
            VALUES ('$tegenstander', '$datum', '$winst', '$eindstand')";

    if (!$result = $db->query( $sql )) {
        die( 'There was an error running the query [' . $db->error . ']' );
    }

    header("Location: logged.php");
    exit();
} else {
    echo 'Error!';
}
?>