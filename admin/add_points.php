<?php

require_once('../db_config.php');

$id             = $_POST['uID'];
$wid            = $_POST['wID'];
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

if (isset ($_POST['save']) ) {

    $sql = "SELECT 'wID', 'uID'
            FROM sb_punten
            WHERE wID = '$wid'
            AND uID = '$id'";

    $result = $db->query( $sql );

    if ($result->num_rows < 1) {

        // COMMENT gevaarlijk, zie class.users over sql injection
        $sql = "INSERT INTO sb_punten (gespeeld, cleansheet, gescoord, assist, winst, gelijkspel, geel, rood, tegengoal, eigengoal, jasje, uID, wID)
                VALUES ('$gespeeld', '$cleansheet', '$gescoord', '$assist', '$winst', '$gelijkspel', '$geel', '$rood', '$tegengoal', '$eigengoal', '$jasje', '$id', '$wid')";

        if (!$result = $db->query( $sql )) {
            die( 'There was an error running the query [' . $db->error . ']' );
        }

        } else {

            $sql = "UPDATE sb_punten
            SET gespeeld        ='$gespeeld',
            cleansheet          ='$cleansheet',
            gescoord            ='$gescoord',
            assist              ='$assist',
            winst               ='$winst',
            gelijkspel          ='$gelijkspel',
            geel                ='$geel',
            rood                ='$rood',
            tegengoal           ='$tegengoal',
            eigengoal           ='$eigengoal',
            jasje               ='$jasje'
            WHERE wID           ='$wid'
            AND uID             ='$id'";

            if (!$result = $db->query( $sql )) {
                die( 'There was an error running the query [' . $db->error . ']' );
            }
        }

        header("Location: logged.php?page=add_points&wid=" . $wid . "&id=" . $id);
        exit();
    }
?>