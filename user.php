<?php
require('class.users.php');
$obj = new users();
$data = $obj->getpoints();
$games = $obj->aantalWedstrijden($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SV Apollo '69 2 - 2015/2016 Scoreboard</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="col-md-6">

        <h2><?php echo $data['naam'] ?></h2>
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
                    <td>Gespeeld</td>
                    <td><?php echo $games ?></td>
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