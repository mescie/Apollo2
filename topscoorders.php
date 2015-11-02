<?php
require_once 'db_config.php';

$sql =      "SELECT naam, doelpunten
            FROM 		sb_topscoorders t
            INNER JOIN 	sb_users u ON t.uID = u.uID
            ORDER BY    t.doelpunten DESC
            LIMIT 30";

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()) {

    $naam           = $row['naam'];
    $doelpunten     = $row['doelpunten'];

    if($doelpunten > 0) {
        ?>

        <tr>
            <td class="text-left"><?php echo $naam ?></td>
            <td><?php echo $doelpunten?></td>
        </tr>

    <?php
    }
}
?>