<?php

require_once('../db_config.php');

$id             = $_POST['id'];
$wid            = $_POST['wid'];
$gespeeld       = $_POST['gespeeld'];
$cleansheet     = $_POST['cleansheet'];
$gescoord       = $_POST['gescoord'];
$assist         = $_POST['assist'];
$winst          = $_POST['winst'];
$gelijkspel     = $_POST['gelijkspel'];
$geel           = $_POST['geel'];
$rood           = $_POST['rood'];
$tegengoal      = $_POST['tegengoal'];
$eigengoal      = $_POST['eigengoal'];
$jasje          = $_POST['jasje'];
$positie        = $_POST['positie'];

if (isset ($_POST['save']) ) {

    // COMMENT gevaarlijk, zie class.users over sql injection
    $sql = "UPDATE punten
            SET gespeeld='$gespeeld',
            cleansheet='$cleansheet',
            gescoord='$gescoord',
            assist='$assist',
            winst='$winst',
            gelijkspel='$gelijkspel',
            geel='$geel', rood='$rood',
            tegengoal='$tegengoal',
            eigengoal='$eigengoal',
            jasje='$jasje',
            positie='$positie'
            WHERE uID=$id AND wID=$wid";

    if (!$result = $db->query( $sql )) {
        die( 'There was an error running the query [' . $db->error . ']' );
    }

    header("Location: logged.php?page=edit_user&id=" . $id);
    exit();
} else {
    echo 'Error!';
}
?>