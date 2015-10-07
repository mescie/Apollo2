<?php
require_once( 'db_config.php' );


class users
{

    public $data = '';

    public function getPoints()
    {

        // COMMENT Het gebruik van een global binnen een klasse is niet echt netjes, beter: maak een constructor waar je
        // een private field $_db maakt.
        global $db;

        // COMMENT beter is om dit ID in een functieparameter te plaatsen
        // public function getPoints($id){
        $id = $_GET[ 'id' ];

            // COMMENT gevaarlijk.. nu is mysqli standaard al wel een beetje beveiligd, maar je gooit
            // zonder enige validatie een door de user te wijzigen parameter in je sql query
            // Google huiswerk: SQL Injection
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
                    FROM 		punten p
                    INNER JOIN 	users u ON p.uID = u.uID
                    WHERE       u.uID = $id";

            if (!$result = $db->query( $sql )) {
                // COMMENT die is niet echt netjes, zie ook puntentelling.php
                die( 'There was an error running the query [' . $db->error . ']' );
            }

            while ($row = $result->fetch_assoc()) {
                $data = $row;
            }

        return $data;
    }

    public function getPointsByGame()
    {

        // COMMENT Het gebruik van een global binnen een klasse is niet echt netjes, beter: maak een constructor waar je
        // een private field $_db maakt.
        global $db;

        // COMMENT beter is om dit ID in een functieparameter te plaatsen
        // public function getPoints($id){
        $id = $_GET[ 'id' ];
        $wid = $_GET[ 'wid' ];

        // COMMENT gevaarlijk.. nu is mysqli standaard al wel een beetje beveiligd, maar je gooit
        // zonder enige validatie een door de user te wijzigen parameter in je sql query
        // Google huiswerk: SQL Injection
        $sql = "SELECT *
                FROM punten
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



        return $data;
    }

    public function getNaam()
    {
        global $db;

        $id = $_GET[ 'id' ];

        if(is_numeric($id)) {
            $sql = "SELECT  naam
                    FROM    users
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

    public function playerPosition()
    {
        // hier pak je weer de global; daarom in een constructor een private field $_db maken.
        global $db;
        $id = $_GET[ 'id' ];

        if(is_numeric($id)) {
            $sql = "SELECT positie
                    FROM users
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
    public function nextPlayer()
    {
        global $db; // ..
        $id = $_GET[ 'id' ];

        $sql = "SELECT COUNT(*)
                FROM users";

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

        return $id;
    }

    function getUsers()
    {

        global $db;

        $sql = "SELECT *
                FROM users";

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
            echo '<td class="text-left">' . $naam . '</td>';
            echo '<td class="text-left extra-info">' . $positie . '</td>';
            echo '<td><a href="logged.php?page=edit_user&id=' . $id . '"> Bewerken </a></td>';
            echo '</tr>';

        }
    }

        function getWedstrijden()
        {

        global $db;

        $sql = "SELECT *
                FROM wedstrijden";

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
            echo '<td class="text-left extra-info">' . $tegenstander . '</td>';
            echo '<td class="text-left extra-info">' . $eindstand . '</td>';
            echo '<td><a href="logged.php?page=add_points&wid=' . $wid . '&id=1"> Punten toevoegen </a></td>';
            echo '</tr>';
            }
        }

    function getWedstrijd()
    {

        global $db;

        $wid = $_GET[ 'wid' ];

        $sql = "SELECT tegenstander
                FROM wedstrijden
                WHERE wID = $wid";

        if (!$result = $db->query( $sql )) {
            die( 'There was an error running the query [' . $db->error . ']' );
        }

        $datarow = $result->fetch_array();

        return $datarow[0];
    }

    function aantalWedstrijden($id)
    {

        global $db;

        $sql = "SELECT COUNT(*)
                FROM punten
                WHERE uID = $id";

        if (!$result = $db->query( $sql )) {
            die( 'There was an error running the query [' . $db->error . ']' );
        }

        $datarow = $result->fetch_array();

        return $datarow[0];
    }
}

?>