<?php
require_once('../db_config.php');

$positie        = $_POST['positie'];
$naam           = $_POST['naam'];
$id             = $_POST['uID'];

if (isset ($_POST['save']) ) {

    $sql = "UPDATE  users
            SET     positie ='$positie',
                    naam    ='$naam'
            WHERE   uID      ='$id'";

    if (!$result = $db->query( $sql )) {
        die( 'There was an error running the query [' . $db->error . ']' );
    }

    header("Location: logged.php?page=edit_user&id=" . $id);
    exit();
} else {
    echo 'Error!';
}
?>