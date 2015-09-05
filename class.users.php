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

        if(is_numeric($id)) {
            $sql =  "SELECT *
                FROM punten
                WHERE uID = $id";
        }

        if (!$result = $db->query( $sql )) {
            // COMMENT die is niet echt netjes, zie ook puntentelling.php
            die( 'There was an error running the query [' . $db->error . ']' );
        }

        while ($row = $result->fetch_assoc()) {
            $data = $row;
        }

        // COMMENT: IS het de bedoeling dat er maar 1 row is? Die while loop hierboven overschrijft namelijk
        // Elke keer $data, wat zorgt dat alleen het laatste resultaat geretourneerd wordt in $data. Voor de netheid
        // Zou je hier de SQL een LIMIT 0,1 kunnen meegeven aan het einde
        return $data;
    }

    public function playerPosition()
    {
        // hier pak je weer de global; daarom in een constructor een private field $_db maken.
        global $db;
        $id = $_GET[ 'id' ];

        if(is_numeric($id)) {
            $sql = "SELECT positie
                    FROM users
                    WHERE id = $id";
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
        global $db; //..
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

        // COMMENT: Select * kan, maar het is  opzich wel beter om de velden te specificeren die je nodig hebt.
        $sql = "SELECT *
                FROM users";

        if (!$result = $db->query( $sql )) {
            die( 'There was an error running the query [' . $db->error . ']' );
        }

        while ($row = $result->fetch_assoc()) {

            $id = $row[ 'id' ];
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

}

?>