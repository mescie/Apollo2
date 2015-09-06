<?php
require_once 'db_config.php';

$sql ="SELECT naam,
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
			SUM(p.jasje) as jasje,
			SUM(p.total) as total
            FROM 		punten p
            INNER JOIN 	users u ON p.uID = u.uID
            GROUP BY 	p.uID
            ORDER BY 	u.naam";


if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
    // COMMENT: Die is misschien het makkelijkste, maar toont niet echt een mooie foutmelding als het mis gaat..
    // Beter: fatsoenlijke foutmelding maken hier, Dan kan je achter deze if een else zetten waar de while in komt.
} else {

while($row = $result->fetch_assoc()) {

    $id = $row[ 'p.uID' ]; //COMMENT $totaal += $id = $row['id']  Zou je hier ook kunnen doen. dat bespaart je die laatste
    $naam = $row[ 'naam' ]; // super lange regel.
    $gespeeld = $row[ 'gespeeld' ];
    $cleansheet = $row[ 'cleansheet' ];
    $gescoord = $row[ 'gescoord' ];
    $assist = $row[ 'assist' ];
    $winst = $row[ 'winst' ];
    $gelijkspel = $row[ 'gelijkspel' ];
    $geel = $row[ 'geel' ];
    $rood = $row[ 'rood' ];
    $tegengoal = $row[ 'tegengoal' ];
    $eigengoal = $row[ 'eigengoal' ];
    $jasje = $row[ 'jasje' ];
    $totaal = $gespeeld + $cleansheet + $gescoord + $assist + $winst + $gelijkspel + $geel + $rood + $tegengoal + $eigengoal + $jasje;
    ?>

    <tr>
        <td class="text-left">
            <a href="./user.php?id=<?php echo $id ?>">
                <?php echo $naam ?>
            </a>
        </td>
        <td class="extra-info"><?php echo $gespeeld ?></td>
        <td class="extra-info"><?php echo $cleansheet ?></td>
        <td class="extra-info"><?php echo $gescoord ?></td>
        <td class="extra-info"><?php echo $assist ?></td>
        <td class="extra-info"><?php echo $winst ?></td>
        <td class="extra-info"><?php echo $gelijkspel ?></td>
        <td class="extra-info"><?php echo $geel ?></td>
        <td class="extra-info"><?php echo $rood ?></td>
        <td class="extra-info"><?php echo $tegengoal ?></td>
        <td class="extra-info"><?php echo $eigengoal ?></td>
        <td class="extra-info"><?php echo $jasje ?></td>
        <td class="extra-info"></td>
        <td class="totalpoints"><?php echo $totaal ?></td>
    </tr>

<?php
}
    }
?>