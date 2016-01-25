<?php
require('class.users.php');
$obj = new users();
$data = $obj->getpoints($_GET[ 'id' ]);
$games = $obj->aantalWedstrijden($_GET['id']);
$goals = $obj->getGoals($_GET['id']);
$totaal = $obj->getTotalPoints($_GET['id']);

$gemiddeld = $totaal / $games;
$gemiddeld = number_format($gemiddeld, 2, '.', '');

include('./header.php');
?>

<div class="container">
    <div class="col-md-6">

        <h2><?php echo $data['naam'] ?> <small>Totaal punten</small></h2>
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Gespeeld</td>
                    <td><?php echo $data['gespeeld'] ?></td>
                </tr>
                <tr>
                    <td>Cleansheet</td>
                    <td><?php echo $data['cleansheet'] ?></td>
                </tr>
                <tr>
                    <td>Gescoord</td>
                    <td><?php echo $data['gescoord'] ?></td>
                </tr>
                <tr>
                    <td>Assist</td>
                    <td><?php echo $data['assist'] ?></td>
                </tr>
                <tr>
                    <td>Winst</td>
                    <td><?php echo $data['winst'] ?></td>
                </tr>
                <tr>
                    <td>Gelijkspel</td>
                    <td><?php echo $data['gelijkspel'] ?></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td>Geel</td>
                    <td><?php echo $data['geel'] ?></td>
                </tr>
                <tr>
                    <td>Rood</td>
                    <td><?php echo $data['rood'] ?></td>
                </tr>
                <tr>
                    <td>Tegengoal</td>
                    <td><?php echo $data['tegengoal'] ?></td>
                </tr>
                <tr>
                    <td>Eigengoal</td>
                    <td><?php echo $data['eigengoal'] ?></td>
                </tr>
                <tr>
                    <td>Jasje</td>
                    <td><?php echo $data['jasje'] ?></td>
                </tr>
            </table>

        <button class="btn btn-primary" onclick="goBack()">
            <span class="glyphicon glyphicon glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Vorige pagina
        </button>

    </div>

    <div class="col-md-6">

        <h2>Statistieken</h2>

            <table class="table table-striped table-bordered">
                <tr>
                    <td>Aantal wedstrijden gespeeld</td>
                    <td><?php echo $games ?></td>
                </tr>
                <tr>
                    <td>Aantal doelpunten</td>
                    <td><?php echo $goals ?></td>
                </tr>
                <tr>
                    <td>Gemiddeld punten per wedstrijd</td>
                    <td><?php echo $gemiddeld ?></td>
                </tr>
            </table>
    </div>

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scoreboard.js"></script>

    <script src="js/light-table-sorter.min.js"></script>
    <script> LightTableSorter.init() </script>
</body>
</html>