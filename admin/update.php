<?php
require_once('../db_config.php');

$positie        = $_POST['positie'];
$naam           = $_POST['naam'];
$id             = $_POST['uID'];
$goals          = $_POST['doelpunten'];

if (isset ($_POST['save']) ) {

    $sql = "UPDATE  sb_users u, sb_topscoorders t
            SET     u.positie       ='$positie',
                    u.naam          ='$naam',
                    t.doelpunten    ='$goals'
            WHERE   u.uID = $id AND t.uID = $id";

    if (!$result = $db->query( $sql )) {
        die( 'There was an error running the query [' . $db->error . ']' );
    }

    header("Location: logged.php?page=edit_user&id=" . $id);
    exit();
} else {
    echo 'Error!';
}
?>