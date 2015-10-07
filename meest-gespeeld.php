<?php
require_once 'db_config.php';

$sql ="COUNT (ID)
        FROM punten"
        LIMIT 3;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()) {

    $tegenstander    = $row['tegenstander'];
    $stand           = $row['stand'];
    $datum           = $row['datum'];
    ?>

    <tr>
        <td>Apollo 2</td>
        <td><?php echo $tegenstander ?></td>
        <td><?php echo $stand?></td>
        <td><?php echo $datum ?></td>
    </tr>

<?php
}
?>