<?php
require( 'class.users.php' );
$obj = new users();
$data = $obj->getpoints( $_GET[ 'id' ] );
$games = $obj->aantalWedstrijden( $_GET[ 'id' ] );
$goals = $obj->getGoals( $_GET[ 'id' ] );
$totaal = $obj->getTotalPoints( $_GET[ 'id' ] );
$pointsPerGame = $obj->getTotalPointsPerGame( $_GET[ 'id' ] );
$js_array = json_encode( $pointsPerGame );
$xasCount = count($pointsPerGame);

for($i=0;$i<$xasCount;)
{
    $i++;
    $xas[] = array($i);
}

$xas = json_encode($xas);

$gemiddeld = $totaal / $games;
$gemiddeld = number_format( $gemiddeld, 2, '.', '' );

include( './header.php' );
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2><?php echo $data[ 'naam' ] ?></h2>
        </div>
        <div class="col-md-6">
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Gespeeld</td>
                    <td><?php echo $data[ 'gespeeld' ] ?></td>
                </tr>
                <tr>
                    <td>Cleansheet</td>
                    <td><?php echo $data[ 'cleansheet' ] ?></td>
                </tr>
                <tr>
                    <td>Gescoord</td>
                    <td><?php echo $data[ 'gescoord' ] ?></td>
                </tr>
                <tr>
                    <td>Assist</td>
                    <td><?php echo $data[ 'assist' ] ?></td>
                </tr>
                <tr>
                    <td>Winst</td>
                    <td><?php echo $data[ 'winst' ] ?></td>
                </tr>
                <tr>
                    <td>Gelijkspel</td>
                    <td><?php echo $data[ 'gelijkspel' ] ?></td>
                </tr>
            </table>
        </div>

        <div class="col-md-6">
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Geel</td>
                    <td><?php echo $data[ 'geel' ] ?></td>
                </tr>
                <tr>
                    <td>Rood</td>
                    <td><?php echo $data[ 'rood' ] ?></td>
                </tr>
                <tr>
                    <td>Tegengoal</td>
                    <td><?php echo $data[ 'tegengoal' ] ?></td>
                </tr>
                <tr>
                    <td>Eigengoal</td>
                    <td><?php echo $data[ 'eigengoal' ] ?></td>
                </tr>
                <tr>
                    <td>Jasje</td>
                    <td><?php echo $data[ 'jasje' ] ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="col-md-12 user-stat">
                <p>Wedstrijden</p>

                <span><?php echo $games ?></span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="col-md-12 user-stat">
                <p>Doelpunten</p>

                <span><?php echo $goals ?></span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="col-md-12 user-stat">
                <p>Gemiddeld punten</p>

                <span><?php echo $gemiddeld ?></span>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-8 col-xs-12">
            <canvas id="myLineChart"></canvas>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary" onclick="goBack()">
                <span class="glyphicon glyphicon glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Vorige
                pagina
            </button>
        </div>
    </div>

</div>

<script type="text/javascript">

    var options = {
        maintainAspectRatio: false,
        responsive:          true
    };

    var data = {
        labels: <?php echo $xas ?>,
        datasets: [
            {
                fillColor:        "rgba(32,77,116,0.4)",
                strokeColor:      "#204D74",
                pointColor:       "#fff",
                pointStrokeColor: "#204D74",
                data: <?php echo $js_array?>
            }
        ]
    };

    var ctx = document.getElementById("myLineChart").getContext("2d");
    var myLineChart = new Chart(ctx).Line(data);
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/scoreboard.js"></script>
</body>
</html>