<?php
require_once 'db_config.php';
require( 'class.users.php' );
$obj = new users();

$sql = "SELECT naam, p.uID as uID,
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
            GROUP BY 	p.uID
            ORDER BY 	u.naam";

if (!$result = $db->query( $sql )) {
    die( 'There was an error running the query [' . $db->error . ']' );
    // COMMENT: Die is misschien het makkelijkste, maar toont niet echt een mooie foutmelding als het mis gaat..
    // Beter: fatsoenlijke foutmelding maken hier, Dan kan je achter deze if een else zetten waar de while in komt.
} else {

    while ($row = $result->fetch_assoc()) {

        $naam = $row[ 'naam' ];
        $id = $row[ 'uID' ];
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

        $games = $obj->aantalWedstrijden( $id );

        $gemiddeld = $totaal / $games;
        $gemiddeld = number_format( $gemiddeld, 2, '.', '' );
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
            <td class="totalpoints"><?php echo $totaal ?></td>
            <td class="hidden"><?php echo $gemiddeld ?></td>
        </tr>

    <?php
    }
}
?>