<?php
require_once( 'db_config.php' );


class users
{

    public $data = '';

    public function getPoints($id)
    {

        global $db;

        // COMMENT Het gebruik van een global binnen een klasse is niet echt netjes, beter: maak een constructor waar je
        // een private field $_db maakt.

            if (is_numeric($id)) {
                $sql = "SELECT naam,
                    SUM(p.gespeeld) as gespeeld,
                    SUM(p.cleansheet) as cleansheet,
                    SUM(p.gescoord) as gescoord,
                    SUM(p.assist) as assist,
                    SUM(p.winst) as winst,
                    SUM(p.gelijkspel) as gelijkspel,
                    SUM(p.geel) as geel,
                    SUM(p.rood) as rood,
                    SUM(p.tegengoal) as tegengoal,
                    SUM(p.eigengoal) as eigengoal,
                    SUM(p.jasje) as jasje
                    FROM 		sb_punten p
                    INNER JOIN 	sb_users u ON p.uID = u.uID
                    WHERE       u.uID = $id";

                if (!$result = $db->query( $sql )) {
                    // COMMENT die is niet echt netjes, zie ook puntentelling.php
                    die( 'There was an error running the query [' . $db->error . ']' );
                }

                while ($row = $result->fetch_assoc()) {
                    $data = $row;
                }
            }

        return $data;
    }

    public function getPointsByGame($id, $wid)
    {
        global $db;

        if(is_numeric($id) && (is_numeric($wid))) {
            $sql = "SELECT *
                FROM sb_punten
                WHERE uID = $id
                AND wID = $wid";

            if (!$result = $db->query( $sql )) {
                // COMMENT die is niet echt netjes, zie ook puntentelling.php
                die( 'There was an error running the query [' . $db->error . ']' );
            }

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data = $row;
                }
            } else {
                $data = [
                    "gespeeld" => 0,
                    "cleansheet" => 0,
                    "gescoord" => 0,
                    "assist" => 0,
                    "winst" => 0,
                    "gelijkspel" => 0,
                    "geel" => 0,
                    "rood" => 0,
                    "tegengoal" => 0,
                    "eigengoal" => 0,
                    "jasje" => 0
                ];
            }
        }
        return $data;
    }

    public function getTotalPoints($id)
    {

        global $db;

        if (is_numeric($id)) {
            $sql = "SELECT naam,
                    SUM(p.gespeeld) as gespeeld,
                    SUM(p.cleansheet) as cleansheet,
                    SUM(p.gescoord) as gescoord,
                    SUM(p.assist) as assist,
                    SUM(p.winst) as winst,
                    SUM(p.gelijkspel) as gelijkspel,
                    SUM(p.geel) as geel,
                    SUM(p.rood) as rood,
                    SUM(p.tegengoal) as tegengoal,
                    SUM(p.eigengoal) as eigengoal,
                    SUM(p.jasje) as jasje
                    FROM 		sb_punten p
                    INNER JOIN 	sb_users u ON p.uID = u.uID
                    WHERE       u.uID = $id";

            if (!$result = $db->query( $sql )) {
                // COMMENT die is niet echt netjes, zie ook puntentelling.php
                die( 'There was an error running the query [' . $db->error . ']' );
            }

            while ($row = $result->fetch_assoc()) {
                $totaal = $gespeeld = $row[ 'gespeeld' ];
                $totaal += $cleansheet = $row[ 'cleansheet' ];
                $totaal += $gescoord = $row[ 'gescoord' ];
                $totaal += $assist = $row[ 'assist' ];
                $totaal += $winst = $row[ 'winst' ];
                $totaal += $gelijkspel = $row[ 'gelijkspel' ];
                $totaal += $geel = $row[ 'geel' ];
                $totaal += $rood = $row[ 'rood' ];
                $totaal += $tegengoal = $row[ 'tegengoal' ];
                $totaal += $eigengoal = $row[ 'eigengoal' ];
                $totaal += $jasje = $row[ 'jasje' ];
            }
        }

        return $totaal;
    }

    // returns array with total points per game
    public function getTotalPointsPerGame($id)
    {

        global $db;

        if (is_numeric($id)) {
            $sql = "SELECT p.gespeeld +
                    p.cleansheet +
                    p.gescoord +
                    p.assist +
                    p.winst +
                    p.gelijkspel +
                    p.geel +
                    p.rood +
                    p.tegengoal +
                    p.eigengoal +
                    p.jasje AS total
                    FROM 		sb_punten p
                    INNER JOIN 	sb_users u ON p.uID = u.uID
                    WHERE       u.uID = $id";

            if (!$result = $db->query( $sql )) {
                // COMMENT die is niet echt netjes, zie ook puntentelling.php
                die( 'There was an error running the query [' . $db->error . ']' );
            }

            $results = array();
            while ($row = $result->fetch_array()) {
                $results[] = $row[0];
            }
        }

        return $results;
    }

    public function getNaam($id)
    {
        global $db;

        if(is_numeric($id)) {
            $sql = "SELECT  naam
                    FROM    sb_users
                    WHERE   uID = $id";
        } else {
            echo 'Error! Het id is geen nummer.';
        }

        if (!$result = $db->query( $sql )) {
            die( 'There was an error running the query [' . $db->error . ']' );
        }

        $datarow = $result->fetch_array();

        return $datarow[0];

    }

    public function playerPosition($id)
    {
        // hier pak je weer de global; daarom in een constructor een private field $_db maken.
        global $db;

        if(is_numeric($id)) {
            $sql = "SELECT positie
                    FROM sb_users
                    WHERE uID = $id";
        } else {
            echo 'Error! Het id is geen nummer.';
        }


        if (!$result = $db->query( $sql )) {
            die( 'There was an error running the query [' . $db->error . ']' );
        }

        while ($row = $result->fetch_assoc()) {

            $rows = $row;

        }

        // Ook hier verhaal van de limit 0,1
        return $rows;

    }

    // Huh, deze functie snap ik even niet.. Je wilt een nieuw ID retourneren?
    public function nextPlayer($id)
    {
        global $db;

        if(is_numeric($id)){
            $sql = "SELECT COUNT(*)
                FROM sb_users";

            if (!$result = $db->query( $sql )) {
                die( 'There was an error running the query [' . $db->error . ']' );
            }

            while ($row = $result->fetch_assoc()) {

                $rows = $row;

            }

            $result = implode("", $rows);

            if ($result > $id) {
                $id++;
            } else {
                $id = '1';
            }
        }

        return $id;
    }

    function getUsers()
    {

        global $db;

        $sql = "SELECT *
                FROM sb_users";

        if (!$result = $db->query( $sql )) {
            die( 'There was an error running the query [' . $db->error . ']' );
        }

        while ($row = $result->fetch_assoc()) {

            $id = $row[ 'uID' ];
            $naam = $row[ 'naam' ];
            $positie = $row[ 'positie' ];

            // COMMENT: Google huiswerk: Switch case
            if ($positie == 0) {
                $positie = "Keeper";
            } elseif ($positie == 1) {
                $positie = "Verdediger";
            } elseif ($positie == 2) {
                $positie = "Middenvelder";
            } elseif ($positie == 3) {
                $positie = "Aanvaller";
            }

            echo '<tr>';
            echo '<td>' . $id . '</td>';
            echo '<td class="text-left"><a href="logged.php?page=edit_user&id=' . $id . '">' . $naam . '</a></td>';
            echo '<td class="text-left extra-info">' . $positie . '</td>';
            echo '</tr>';

        }
    }

        function getWedstrijden()
        {

        global $db;

        $sql = "SELECT *
                FROM sb_wedstrijden";

        if (!$result = $db->query( $sql )) {
            die( 'There was an error running the query [' . $db->error . ']' );
        }

        while ($row = $result->fetch_assoc()) {

            $wid            = $row[ 'wID' ];
            $tegenstander   = $row[ 'tegenstander' ];
            $eindstand      = $row[ 'stand' ];
            $datum          = $row[ 'datum' ];

            echo '<tr>';
            echo '<td>' . $wid . '</td>';
            echo '<td class="text-left extra-info">' . $datum . '</td>';
            echo '<td class="text-left">Apollo 2</td>';
            echo '<td class="text-left">' . $tegenstander . '</td>';
            echo '<td class="text-left extra-info">' . $eindstand . '</td>';
            echo '<td><a href="logged.php?page=add_points&wid=' . $wid . '&id=1"> Punten toevoegen </a></td>';
            echo '</tr>';
            }
        }

    function getWedstrijd($wid)
    {

        global $db;

        if(is_numeric($wid)) {
            $sql = "SELECT tegenstander
                FROM sb_wedstrijden
                WHERE wID = $wid";

            if (!$result = $db->query( $sql )) {
                die( 'There was an error running the query [' . $db->error . ']' );
            }

            $datarow = $result->fetch_array();
        }

        return $datarow[0];
    }

    public function aantalWedstrijden($id)
    {

        global $db;

        if(is_numeric($id)){
            $sql = "SELECT COUNT(*)
                FROM sb_punten
                WHERE uID = $id";

            if (!$result = $db->query( $sql )) {
                die( 'There was an error running the query [' . $db->error . ']' );
            }

            $datarow = $result->fetch_array();
        }

        return $datarow[0];
    }

    function getGoals($id)
    {
        global $db;

        if(is_numeric($id)){
            $sql = "SELECT doelpunten
                FROM sb_topscoorders
                WHERE uID = $id";

            if (!$result = $db->query( $sql )) {
                die( 'There was an error running the query [' . $db->error . ']' );
            }

            $datarow = $result->fetch_array();
        }

        return $datarow[0];
    }
}

?>