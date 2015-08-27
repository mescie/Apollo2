<?php
require_once 'db_config.php';

$sql = <<<SQL
    SELECT *
    FROM `wedstrijden`
SQL;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()) {

    $tegenstander           = $row['tegenstander'];
    $goals_apollo           = $row['goals_apollo'];
    $goals_tegenstander     = $row['goals_tegenstander'];
    $datum                  = $row['datum'];
    $soort                  = $row['soort'];

    switch ($soort) {
        case 0:
            $soort = "Beker";
            break;
        case 1:
            $soort = "Competitie";
            break;
        case 2:
            $soort = "Oefenwedstrijd";
            break;
    }
    ?>

    <tr>
        <td>Apollo 2</td>
        <td><?php echo $tegenstander ?></td>
        <td><?php echo $goals_apollo .'-'. $goals_tegenstander ?></td>
        <td><?php echo $datum ?></td>
        <td><?php echo $soort ?></td>
    </tr>

<?php
}
?>