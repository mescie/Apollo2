<?php
require_once 'db_config.php';

$sql ="SELECT *
        FROM sb_wedstrijden";

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()) {

    $tegenstander    = $row['tegenstander'];
    $stand           = $row['stand'];
    $datum           = $row['datum'];
?>

    <tr>
        <td class="text-left">Apollo 2</td>
        <td class="text-left"><?php echo $tegenstander ?></td>
        <td><?php echo $stand?></td>
        <td class="extra-info"><?php echo $datum ?></td>
    </tr>

<?php
}
?>